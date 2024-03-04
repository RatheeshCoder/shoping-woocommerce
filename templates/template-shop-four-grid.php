<!--=========================-->
<!--=        Breadcrumb         =-->
<!--=========================-->

<section class="breadcrumb-area">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bc-inner">
                    <p><a href="#">Home |</a> Shop</p>
                </div>
            </div>
            <!-- /.col-xl-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!--=========================-->
<!--=        Shop area          =-->
<!--=========================-->

<section class="shop-area">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="order-2 order-lg-1 col-lg-3 col-xl-3">
                <div class=" shop-sidebar left-side">
                    <div class="sidebar-widget sidebar-search">
                        <input type="text" placeholder="Search Product....">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                    <!-- Product Categories Sidebar -->
                    <div class="sidebar-widget category-widget">
                        <h6>PRODUCT CATEGORIES</h6>
                        <ul>
                            <?php
								$args = array(
									'post_type' => 'product',
									'posts_per_page' => 12,
								);

								$products = new WP_Query($args);

								if ($products->have_posts()) {
									// Create an empty array to store product categories
									$product_categories = array();

									while ($products->have_posts()) {
										$products->the_post();
										global $product;

										// Get the product details
										$product_id = $product->get_id();

										// Get the product categories
										$categories = wp_get_post_terms($product_id, 'product_cat', array('fields' => 'names'));

										// Add categories to the product_categories array, excluding "Uncategorized"
										foreach ($categories as $category) {
											if ($category !== 'Uncategorized') {
												$product_categories[] = $category;
											}
										}
									}

									// Remove duplicates and sort the categories
									$product_categories = array_unique($product_categories);
									sort($product_categories);

									// Display product categories with count
									foreach ($product_categories as $category) {
										// Get the category count
										$category_obj = get_term_by('name', $category, 'product_cat');
										$category_count = $category_obj ? $category_obj->count : 0;

										echo '<li><a href="#" data-category-id="' . $category_obj->term_id . '">' . $category . '</a> <span>(' . $category_count . ')</span></li>';
									}
								}
								?>

                        </ul>
                    </div>



                    <div class="sidebar-widget range-widget">
                        <h6>SEARCH BY PRICE</h6>
                        <div class="price-range">
                            <div id="slider-range"></div>
                            <span>Price :</span>
                            <input type="text" id="amount">
                        </div>
                    </div>

                    <div class="sidebar-widget color-widget">
                        <h6>PRODUCT COLOR</h6>
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>

                    <div class="sidebar-widget product-widget">
                        <h6>BEST SELLERS</h6>


                        <?php
										$BestProductsArguments = array(
											'post_type' => 'BestProducts',
											'post_status' => 'publish',
											'posts_per_page'   => -1
										);

										$BestProductsQuery = new WP_Query($BestProductsArguments);

										if ($BestProductsQuery->have_posts()) {
											while ($BestProductsQuery->have_posts()) {
												$BestProductsQuery->the_post();
												$address_post_id = get_the_ID();
												$image = CFS()->get('image', $address_post_id);
												$product_name = CFS()->get('product_name', $address_post_id);
												$original_price = CFS()->get('original_price', $address_post_id);
												$selling_price = CFS()->get('selling_price', $address_post_id);
												
										?>


                        <div class="wid-pro">
                            <div class="sp-img">
                                <img src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="small-pro-details">
                                <h5 class="title"><a href="#"><?php echo $product_name; ?></a></h5>
                                <span>$<?php echo $selling_price; ?></span>
                                <span class="pre-price">$<?php echo $original_price; ?></span>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <?php
									}
								}
								?>



                    </div>

                    <div class="sidebar-widget advertise-img">
                        <a href="#" class="img">
                            <img src="http://localhost/task/wp-content/uploads/2023/06/isb1.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.col-xl-3 -->
            <div class="order-1 order-lg-2 col-lg-9 col-xl-9">
                <div class="shop-sorting-area row">
                    <div class="col-4 col-sm-4 col-md-6">
                        <ul class="nav nav-tabs shop-btn" id="myTab" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true"><i class="flaticon-menu"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false"><i class="flaticon-list"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-->
                    <div class="col-12 col-sm-8 col-md-6">
                        <div class="sort-by">
                            <span>Sort by :</span>

                            <select class="orderby" name="orderby">

                                <option value="menu_order">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option selected="selected">Best Selling</option>


                            </select>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>

                <!-- /.shop-sorting-area -->
        <div id="product-container" class="shop-content shop-four-grid">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row" id="product-list">


                                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 12,
                );

                $products = new WP_Query($args);

                if ($products->have_posts()) {
                    while ($products->have_posts()) {
                        $products->the_post();
                        global $product;

                        // Get the product details
                        $product_id = $product->get_id();
                        $product_price = $product->get_price();
                        $product_name = get_post_meta($product_id, '_product_name', true);
                        $product_type = get_post_meta($product_id, '_product_type', true);
                        $product_image = get_post_meta($product_id, '_product_image', true);
						
						// Get the product categories
						$categories = wp_get_post_terms($product_id, 'product_cat', array('fields' => 'ids'));
						$product_category_ids = implode(', ', $categories);

                        ?>





                                <div class="col-sm-6 col-xl-3" data-category="<?php echo $product_category_ids; ?> "
                                    data-price="<?php echo $product_price; ?>">
                                    <div class="sin-product style-two">
                                        <div class="pro-img">
                                            <img src="<?php echo $product_image; ?>" alt="">
                                        </div>
                                        <div class="mid-wrapper">
                                            <h5 class="pro-title"><a href="product.html"><?php echo $product_name; ?>
                                                </a></h5>
                                            <div class="color-variation">
                                                <ul>
                                                    <li><i class="fas fa-circle"></i></li>
                                                    <li><i class="fas fa-circle"></i></li>
                                                    <li><i class="fas fa-circle"></i></li>
                                                    <li><i class="fas fa-circle"></i></li>
                                                </ul>
                                            </div>
                                            <p><?php echo $product_type; ?> /
                                                <span>$<?php echo $product_price; ?></span>
                                            </p>
                                        </div>
                                        <div class="icon-wrapper">
                                            <div class="pro-icon">
                                                <ul>
                                                <li>
                                                    <a href="#" class="favorite-button" data-product-id="PRODUCT_ID">
                                                        <i class="flaticon-valentines-heart"></i>
                                                    </a>
                                                </li>
                                                                                                        <li><a href="#"><i class="flaticon-compare"></i></a></li>
                                                    <li><a href="#" class="trigger"><i class="flaticon-eye"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="add-to-cart">
                                                <form method="post"
                                                    action="<?php echo esc_url( wc_get_cart_url() ); ?>">
                                                    <input type="hidden" name="add-to-cart"
                                                        value="<?php echo esc_attr( $product_id ); ?>">
                                                    <button type="submit" class="button alt">Add to Cart</button>
                                                    <?php wp_nonce_field( 'woocommerce-add-to-cart', 'woocommerce-add-to-cart-nonce' ); ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.sin-product -->
                                </div>


                                <?php
                    }
                }
                ?>





                            </div>
                            <!-- /.col-xl-12 -->
                        </div>
                        <!-- /.col-xl-12 -->
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
                <div class="load-more-wrapper">
                    <a href="#" class="btn-two" id="load-more-btn">Load More</a>
                </div>

                <!-- /.load-more-wrapper -->
            </div>
            <!-- /.shop-content -->
        </div>