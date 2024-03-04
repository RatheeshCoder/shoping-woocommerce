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

		<section class="shop-area single-product">
		    <div class="container-fluid custom-container">
		        <div class="row">
		            <div class="order-2 order-md-1 col-md-4 col-lg-3 col-xl-3">
		                <div class=" shop-sidebar">
		                    <div class="sidebar-widget sidebar-search">
		                        <input type="text" placeholder="Search Product....">
		                        <button type="submit"><i class="fas fa-search"></i></button>
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
		                                <span>$<?php echo $original_price; ?></span>
		                                <span class="pre-price">$<?php echo $selling_price; ?></span>
		                                <div class="rating">
		                                    <ul>
		                                        <li><a href="#"><i class="far fa-star"></i></a></li>
		                                        <li><a href="#"><i class="far fa-star"></i></a></li>
		                                        <li><a href="#"><i class="far fa-star"></i></a></li>
		                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
		                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
		                                    </ul>
		                                </div>
		                            </div>
		                        </div>

		                        <?php
									}
								}
								?>



		                    </div>

		                    <div class="sidebar-widget banner-wid">
		                        <div class="img">
		                            <img src="media/images/banner/sb1.jpg" alt="">
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <!-- /.col-xl-3 -->
		            <div class="order-1 order-md-2 col-md-8 col-lg-9 col-xl-9">
		                <div class="row">



		                    <?php

                                            $args = array(
                                                'post_type' => 'product',
                                                'posts_per_page' => 1, 
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
                                                    // $product_image = get_post_meta($product_id, '_product_image', true);
                                                    // $product_image = $product->get_image();
                                                    $product_title = get_post_meta($product_id, '_product_title', true);
                                                    $product_short_description = $product->get_short_description();
													$product_description = get_post_meta($product_id, '_product_description', true);

													$brand = get_post_meta($post->ID, '_product_brand', true);
													$manufacturer = get_post_meta($post->ID, '_product_manufacturer', true);
													$colors = get_post_meta($post->ID, '_product_colors', true);
													$additional_info = get_post_meta($post->ID, '_product_additional_info', true);

													// Get the sub images
													$sub_images = array();
													for ($i = 1; $i <= 5; $i++) {
														$sub_image = get_post_meta($product_id, '_product_sub_image_' . $i, true);
														if ($sub_image) {
															$sub_images[] = $sub_image;
														}
													}



                                                ?>



		                    <div class="col-lg-6 col-xl-6">
		                        <!-- Product View Slider -->
		                        <div class="quickview-slider">
		                            <div class="slider-for">
		                                <?php
							
							// Display the sub images
							foreach ($sub_images as $sub_image) {

								?>
		                                <div class="">
		                                    <?php
								echo '<img src="' . $sub_image . '" alt="' . $product_name . '">';
								?>
		                                </div>
		                                <?php
							}
							?>
		                            </div>

		                            <div class="slider-nav">

		                                <?php
							
							// Display the sub images
							foreach ($sub_images as $sub_image) {

								?>
		                                <div class="">
		                                    <?php
								echo '<img src="' . $sub_image . '" alt="' . $product_name . '">';
								?>
		                                </div>
		                                <?php
							}
							?>
		                            </div>
		                        </div>
		                        <!-- /.quickview-slider -->
		                    </div>
		                    <!-- /.col-xl-6 -->

		                    <div class="col-lg-6 col-xl-6">
		                        <div class="product-details">
		                            <h5 class="pro-title"><a href="#"><?php echo $product_name; ?></a></h5>
		                            <span class="price">Price : $<?php echo $product_price; ?></span>
		                            <div class="size-variation">
		                                <span>size :</span>
		                                <select name="size-value">
		                                    <option value="">1</option>
		                                    <option value="">2</option>
		                                    <option value="">3</option>
		                                    <option value="">4</option>
		                                    <option value="">5</option>
		                                </select>
		                            </div>
		                            <div class="color-checkboxes">
		                                <h4>Color:</h4>
		                                <input class="color-checkbox__input" id="col-Blue" name="colour" type="radio">
		                                <label class="color-checkbox" for="col-Blue" id="col-Blue-label"></label>
		                                <span></span>

		                                <input class="color-checkbox__input" id="col-Green" value="#8bc34a" name="colour"
		                                    type="radio">
		                                <label class="color-checkbox" for="col-Green" id="col-Green-label"></label>
		                                <span></span>

		                                <input class="color-checkbox__input" id="col-Yellow" value="#fdd835" name="colour"
		                                    type="radio">
		                                <label class="color-checkbox" for="col-Yellow" id="col-Yellow-label"></label>
		                                <span></span>

		                                <input class="color-checkbox__input" id="col-Orange" value="#ff9800" name="colour"
		                                    type="radio">
		                                <label class="color-checkbox" for="col-Orange" id="col-Orange-label"></label>
		                                <span></span>

		                                <input class="color-checkbox__input" id="col-Red" value="#f44336" name="colour"
		                                    type="radio">
		                                <label class="color-checkbox" for="col-Red" id="col-Red-label"></label>
		                                <span></span>

		                                <input class="color-checkbox__input" id="col-Black" value="#222222" name="colour"
		                                    type="radio">
		                                <label class="color-checkbox" for="col-Black" id="col-Black-label"></label>
		                                <span></span>
		                            </div>

		                            <div class="add-tocart-wrap">
		                                <!--PRODUCT INCREASE BUTTON START-->
		                                <div class="cart-plus-minus-button">
		                                    <input type="text" value="1" name="qtybutton" class="cart-plus-minus">
		                                </div>
		                                <a href="#" class="add-to-cart"><i class="flaticon-shopping-purse-icon"></i>Add to
		                                    Cart</a>
		                            </div>

		                            <p><?php echo $product_short_description; ?></p>
		                            <!-- <ul>
		                                <li>Lorem ipsum dolor sit amet</li>
		                                <li>quis nostrud exercitation ullamco</li>
		                                <li>Duis aute irure dolor in reprehenderit</li>
		                            </ul> -->
		                            <div class="product-social">
		                                <span>Share :</span>
		                                <ul>
		                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
		                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
		                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
		                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
		                                </ul>
		                            </div>

		                        </div>
		                        <!-- /.product-details -->
		                    </div>
		                    <!-- /.col-xl-6 -->


		                    <div class="col-xl-12">
    <div class="product-des-tab">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">DESCRIPTION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">ADDITIONAL INFORMATION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                    aria-controls="contact" aria-selected="false">REVIEWS</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="prod-bottom-tab-sin description">
                    <h5>Description</h5>
                    <p><?php echo $product_description; ?></p>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="prod-bottom-tab-sin">
                    <h5>Additional information</h5>
                    <div class="info-wrap">
                        <div class="sin-aditional-info">
                            <div class="first">
                                Brand
                            </div>
                            <div class="secound">
                                <?php echo $brand; ?>
                            </div>
                        </div>
                        <div class="sin-aditional-info">
                            <div class="first">
                                Manufacturer
                            </div>
                            <div class="secound">
                                <?php echo $manufacturer; ?>
                            </div>
                        </div>
                        <div class="sin-aditional-info">
                            <div class="first">
                                Colors
                            </div>
                            <div class="secound">
                                <?php echo $colors; ?>
                            </div>
                        </div>
                        <div class="sin-aditional-info">
                            <div class="first">
                                Brand
                            </div>
                            <div class="secound">
                                <?php echo $brand; ?>
                            </div>
                        </div>
                        <div class="sin-aditional-info">
                            <div class="first">
                                Brand
                            </div>
                            <div class="secound">
                                <?php echo $additional_info; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="prod-bottom-tab-sin">
                    <h5>Review (1)</h5>
                    <div class="product-review">
                        <!-- Content for reviews tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

		                </div>
		                <!-- /.row -->

		                <?php
                                                }
                                            }
                                            ?>
		            </div>
		            <!-- /.col-xl-9 -->
		        </div>
		        <!-- /.row -->
		    </div>
		    <!-- /.container-fluid -->
		</section>
		<!-- /.shop-area -->

		<section class="main-product padding-120">
		    <div class="container container-two">
		        <div class="section-heading">
		            <h3>related <span>product</span></h3>
		        </div>
		        <!-- /.section-heading-->
		        <div class="row inner-wrapper">
		            <!-- Single product -->
		            <div class="col-sm-6 col-lg-3 col-xl-3">
		                <div class="sin-product">
		                    <div class="pro-img">
		                        <img src="media/images/product/8.jpg" alt="">
		                    </div>
		                    <div class="mid-wrapper">
		                        <h5 class="pro-title"><a href="product.html">Bandage Dresses</a></h5>
		                        <span>$60.00</span>
		                    </div>
		                    <div class="pro-icon">
		                        <ul>
		                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
		                            <li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
		                            <li><a href="#" class="trigger"><i class="flaticon-zoom-in"></i></a></li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		            <!-- Single product -->
		            <div class="col-sm-6 col-lg-3 col-xl-3">
		                <div class="sin-product">
		                    <div class="pro-img">
		                        <img src="media/images/product/1.jpg" alt="">
		                    </div>
		                    <div class="mid-wrapper">
		                        <h5 class="pro-title"><a href="product.html">High-Low Dresses</a></h5>
		                        <span>$60.00</span>
		                    </div>
		                    <div class="pro-icon">
		                        <ul>
		                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
		                            <li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
		                            <li><a href="#" class="trigger"><i class="flaticon-zoom-in"></i></a></li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		            <!-- Single product -->
		            <div class="col-sm-6 col-lg-3 col-xl-3">
		                <div class="sin-product">
		                    <div class="pro-img">
		                        <img src="media/images/product/2.jpg" alt="">
		                    </div>
		                    <div class="mid-wrapper">
		                        <h5 class="pro-title"><a href="product.html">Empire Waist Dresses</a></h5>
		                        <span>$60.00</span>
		                    </div>
		                    <div class="pro-icon">
		                        <ul>
		                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
		                            <li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
		                            <li><a href="#" class="trigger"><i class="flaticon-zoom-in"></i></a></li>
		                        </ul>
		                    </div>
		                </div>
		            </div>

		            <!-- Single product -->
		            <div class="col-sm-6 col-lg-3 col-xl-3">
		                <div class="sin-product">
		                    <div class="pro-img">
		                        <img src="media/images/product/3.jpg" alt="">
		                    </div>
		                    <div class="mid-wrapper">
		                        <h5 class="pro-title"><a href="product.html">Bodycon Dresses</a></h5>
		                        <span>$60.00</span>
		                    </div>
		                    <div class="pro-icon">
		                        <ul>
		                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
		                            <li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
		                            <li><a href="#" class="trigger"><i class="flaticon-zoom-in"></i></a></li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <!-- Row End -->
		    </div>
		    <!-- Container  -->
		</section>
		<!-- main-product -->