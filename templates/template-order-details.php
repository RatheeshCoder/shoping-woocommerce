		<!--=========================-->
		<!--=        Breadcrumb         =-->
		<!--=========================-->

		<section class="breadcrumb-area">
			<div class="container-fluid custom-container">
				<div class="row">
					<div class="col-xl-12">
						<div class="bc-inner">
							<p><a href="#">Home  |</a> Shop</p>
						</div>
					</div>
					<!-- /.col-xl-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>

		<!--=========================-->
		<!--=        Breadcrumb         =-->
		<!--=========================-->

        <?php
/*
Template Name: Order History Page
*/

// Ensure WooCommerce is active
if (!class_exists('WooCommerce')) {
    return;
}



?>

<section class="account-area">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-xl-3">
                <div class="account-details">
                    <p>Account</p>
                    <?php
                    // Check if the user is logged in
                    if (is_user_logged_in()) {
                        $current_user = wp_get_current_user();
                        echo '<ul>';
                        echo '<li>' . $current_user->display_name . '</li>';
                        echo '<li>' . $current_user->user_email . '</li>';
                        echo '<li>' . $current_user->user_address . '</li>';
                        echo '<li>' . $current_user->user_postal_code . '</li>';
                        echo '</ul>';
                    } else {
                        echo '<p>Please log in to view your account details.</p>';
                    }
                    ?>
                </div>
                <!-- /.account-details -->
            </div>
            <!-- /.col-xl-3 -->
            <div class="col-xl-9">
                <div class="account-table">
                    <h6>Order History</h6>
                    <table class="tables">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Date</th>
                                <th>Payment Status</th>
                                <th>Fulfillment Status</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Check if the user is logged in
                            if (is_user_logged_in()) {
                                $current_user = wp_get_current_user();

                                // Get the customer's orders
                                $customer_orders = wc_get_orders(array(
                                    'customer' => $current_user->ID,
                                    'status'   => 'completed',
                                    'limit'    => -1, // Get all orders
                                ));

                                // Display order details if there are orders
                                if ($customer_orders) {
                                    foreach ($customer_orders as $order) {
                                        $order_id = $order->get_order_number();
                                        $order_date = $order->get_date_created()->date_i18n('d-m-Y');
                                        $payment_status = $order->get_status();
                                        $fulfillment_status = $order->get_status();
                                        $total = wc_price($order->get_total());
                                        ?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo esc_url($order->get_view_order_url()); ?>">#<?php echo $order_id; ?></a>
                                            </td>
                                            <td>
                                                <?php echo $order_date; ?>
                                            </td>
                                            <td>
                                                <?php echo $payment_status; ?>
                                            </td>
                                            <td>
                                                <?php echo $fulfillment_status; ?>
                                            </td>
                                            <td>
                                                <?php echo $total; ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo '<tr><td colspan="5">No order history found.</td></tr>';
                                }
                            } else {
                                echo '<tr><td colspan="5">Please log in to view your order history.</td></tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.account-table -->
            </div>
            <!-- /.col-xl-9 -->
        </div>
    </div>
</section>


		<!--=========================-->
		<!--=   Subscribe area      =-->
		<!--=========================-->

		<section class="subscribe-area style-two">
			<div class="container container-two">
				<div class="row">
					<div class="col-lg-5">
						<div class="subscribe-text">
							<h6>Join our newsletter</h6>
						</div>
					</div>
					<!-- col-xl-6 -->

					<div class="col-lg-7">
						<div class="subscribe-wrapper">
							<input placeholder="Enter Keyword" type="text">
							<button type="submit">SUBSCRIBE</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container-two -->
		</section>
		<!-- subscribe-area -->

