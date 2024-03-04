<?php
// cart.php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

wc_print_notices();

do_action('woocommerce_before_cart');
?>

<section class="cart-area">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-xl-9">
                <div class="cart-table">
                    <table class="tables">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                                $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);

                                // Ensure we have the correct product object.
                                if (!$_product || !$_product->exists()) {
                                    continue;
                                }

                                // Get the product ID and other details
                                $product_id    = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
                                $product_name = get_post_meta($product_id, '_product_name', true);
                                $product_price = wc_price($_product->get_price());
                                $product_qty   = $cart_item['quantity'];
                                $product_total = wc_price($_product->get_price() * $product_qty);
                                $product_image = $_product->get_image();

                                ?>
                                <tr class="woocommerce-cart-form__cart-item" <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>>
                                    <td>
                                        <?php
                                        // Display the remove link
                                        echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                            'woocommerce_cart_item_remove_link',
                                            sprintf(
                                                '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                                                esc_url(wc_get_cart_remove_url($cart_item_key)),
                                                __('Remove this item', 'woocommerce'),
                                                esc_attr($product_id),
                                                esc_attr($_product->get_sku())
                                            ),
                                            $cart_item_key
                                        );
                                        ?>
                                    </td>

                                    <td>
                                        <a href="#">
                                            <div class="product-image">
                                                <?php echo wp_kses_post($product_image); ?>
                                            </div>
                                        </a>
                                    </td>

                                    <td>
                                        <div class="product-title">
                                            <a href="#"><?php echo wp_kses_post($product_name); ?></a>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="quantity">
                                            <input type="number" value="<?php echo esc_attr($product_qty); ?>">
                                        </div>
                                    </td>

                                    <td>
                                        <ul>
                                            <li>
                                                <div class="price-box">
                                                    <span class="price"><?php echo wp_kses_post($product_price . ' x ' . $product_qty); ?></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>

                                    <td>
                                        <div class="total-price-box">
                                            <span class="price"><?php echo wp_kses_post($product_total); ?></span>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>

                </div>
                <!-- /.cart-table -->
                <div class="row cart-btn-section">
                    <div class="col-12 col-sm-8 col-lg-6">
                        <div class="cart-btn-left">
                            <a class="coupon-code" href="#">Coupon Code</a>
                            <a href="#">Apply Coupon</a>
                        </div>
                    </div>
                    <!-- /.col-xl-6 -->
                    <div class="col-12 col-sm-4 col-lg-6">
                        <div class="cart-btn-right">
                            <a href="#" class="button">Update Cart</a>
                        </div>
                    </div>
                    <!-- /.col-xl-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-xl-9 -->
            <div class="col-xl-3">
    <div class="cart-subtotal">
        <p>SUBTOTAL</p>
        <ul>
            <?php
            // Set default values for Tax and Shipping Cost
            $default_tax = 10;
            $default_shipping_cost = 25;

            // Get the cart totals
            $subtotal = WC()->cart->get_subtotal();
            $tax_total = WC()->cart->get_cart_contents_tax() + $default_tax;
            $shipping_total = WC()->cart->get_shipping_total() + $default_shipping_cost;
            $total = $subtotal + $tax_total + $shipping_total;

            // Format the cart totals with currency symbol
            $subtotal_formatted = wc_price($subtotal);
            $tax_total_formatted = wc_price($tax_total);
            $shipping_total_formatted = wc_price($shipping_total);
            $total_formatted = wc_price($total);
            ?>
            <li><span>Sub-Total:</span><span class="price"><?php echo $subtotal_formatted; ?></span></li>
            <li><span>Tax (-4.00):</span><span class="price"><?php echo $tax_total_formatted; ?></span></li>
            <li><span>Shipping Cost:</span><span class="price"><?php echo $shipping_total_formatted; ?></span></li>
            <li><span>TOTAL:</span><span class="price"><?php echo $total_formatted; ?></span></li>
        </ul>
        <div class="note">
            <span>Order Note :</span>
            <textarea></textarea>
        </div>
        <a href="<?php echo esc_url(wc_get_checkout_url()); ?>" class="button">Proceed To Checkout</a>
    </div>
    <!-- /.cart-subtotal -->
</div>



            <!-- /.col-xl-3 -->
        </div>
    </div>
</section>
<!-- /.cart-area -->

<?php do_action('woocommerce_after_cart'); ?>
