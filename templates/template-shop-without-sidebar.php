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

		            <div class="col-12">
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
		                    <!-- /.col-xl-6 -->
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
		                    <!-- /.col-xl-6 -->
		                </div>
		                <!-- /.shop-sorting-area -->
		                <div class="shop-content">
		                    <div class="tab-content" id="myTabContent">
		                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		                            <div class="row">


                                    <?php

$args = array(
    'post_type' => 'product',
    'posts_per_page' => 12, // Display all products
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
        // $product_image = $product->get_image();
        $product_title = get_post_meta($product_id, '_product_title', true);
        $product_short_description = $product->get_short_description();



    ?>



		                                <div class="col-sm-6 col-xl-3">
		                                    <div class="sin-product style-two">
		                                        <div class="pro-img">
		                                            <img src="<?php echo  $product_image;  ?>" alt="">
		                                        </div>
		                                        <div class="mid-wrapper">
		                                            <h5 class="pro-title"><a href="product.html"><?php echo  $product_name;  ?></a></h5>
		                                            <div class="color-variation">
		                                                <ul>
		                                                    <li><i class="fas fa-circle"></i></li>
		                                                    <li><i class="fas fa-circle"></i></li>
		                                                    <li><i class="fas fa-circle"></i></li>
		                                                    <li><i class="fas fa-circle"></i></li>
		                                                </ul>
		                                            </div>
		                                            <p><?php echo  $product_type;  ?> / <span>$<?php echo  $product_price;  ?></span></p>
		                                        </div>
		                                        <div class="icon-wrapper">
		                                            <div class="pro-icon">
		                                                <ul>
		                                                    <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
		                                                    <li><a href="#"><i class="flaticon-compare"></i></a></li>
		                                                    <li><a href="#" class="trigger"><i class="flaticon-eye"></i></a>
		                                                    </li>
		                                                </ul>
		                                            </div>
		                                            <div class="add-to-cart">
		                                                <a href="#">add to cart</a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                    <!-- /.sin-product -->
		                               

		                                </div>
		                                <!-- /.col-xl-12 -->

                                        <?php
                                                }
                                            }
                                            ?>


		                            </div>
		                            <!-- /.col-xl-12 -->
		                        </div>
		                        <!-- /.tab-pane -->
		                    </div>
		                    <!-- /.tab-content -->
		                    <div class="load-more-wrapper">
		                        <a href="create-account.html" class="btn-two">Load More</a>
		                    </div>
		                    <!-- /.load-more-wrapper -->
		                </div>
		                <!-- /.shop-content -->
		            </div>
		            <!-- /.col-xl-9 -->
		        </div>
		        <!-- /.row -->
		    </div>
		    <!-- /.container-fluid -->
		</section>
		<!-- /.shop-area -->