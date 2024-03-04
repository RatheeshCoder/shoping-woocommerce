		<!--=========================-->
		<!--=        Slider         =-->
		<!--=========================-->


		<section class="slider-wrapper">
			<div class="slider-start slider-1 owl-carousel owl-theme">


            <?php
                $backgroundArguments = array(
                    'post_type' => 'BackgroundImage',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $backgroundQuery = new WP_Query($backgroundArguments);

                if ($backgroundQuery->have_posts()) {
                    while ($backgroundQuery->have_posts()) {
                        $backgroundQuery->the_post();
                        $address_post_id = get_the_ID();
                        $background = CFS()->get('background', $address_post_id);
						$title = CFS()->get('title', $address_post_id);
                        $title_sub = CFS()->get('title_sub', $address_post_id);
                        $title_main = CFS()->get('title_main', $address_post_id);
                        $title_paragraph = CFS()->get('title_paragraph', $address_post_id);

                ?>

				<div class="item">
					<img src="<?php echo $background ;?>" alt="">
					<div class="container-fluid custom-container slider-content">
						<div class="row align-items-center">

							<div class="col-12 col-sm-8 col-md-8 col-lg-6 ml-auto">
								<div class="slider-text ">
									<h4 class="animated fadeInUp"><span><?php echo $title ;?></span> <?php echo $title_sub ;?></h4>
									<h1 class="animated fadeInUp"><?php echo $title_main ;?></h1>
									<p class="animated fadeInUp"><?php echo $title_paragraph ;?></p>
									<a class="animated fadeInUp btn-two" href="#">SHOP NOW</a>
								</div>
							</div>
							<!-- Col End -->
						</div>
						<!-- Row End -->
					</div>
				</div>

				<?php
                    }
                }
                ?>

			</div>
	</section>
		<!-- Slides end -->


		<!--=========================-->
		<!--=        Banner         =-->
		<!--=========================-->

		<section class="banner padding-top-120">
			<div class="container-fluid custom-container">
				<div class="row">

				<?php
                $BannerArguments = array(
                    'post_type' => 'Banner',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $BannerQuery = new WP_Query($BannerArguments);

                if ($BannerQuery->have_posts()) {
                    while ($BannerQuery->have_posts()) {
                        $BannerQuery->the_post();
                        $address_post_id = get_the_ID();
                        $banner_image = CFS()->get('banner_image', $address_post_id);
						$product_type = CFS()->get('product_type', $address_post_id);
						$shop_before = CFS()->get('shop_before', $address_post_id);
                        $shop_after = CFS()->get('shop_after', $address_post_id);
                        $para = CFS()->get('para', $address_post_id);
                        $offer = CFS()->get('offer', $address_post_id);
						$sale_before = CFS()->get('sale_before', $address_post_id);
						$sale_after = CFS()->get('sale_after', $address_post_id);

                ?>
					<div class="col-12 col-md-4">
						<a href="#">
							<div class="sin-banner align-items-center">
								<img src="<?php echo $banner_image ;?>" alt="">
								<div class="sin-banner-con">
									<div class="sin-banner-inner-wrap">
										<div class="banner-top">
											<h4><?php echo $product_type ;?></h4>
											<h4><?php echo $shop_before ;?> <span><?php echo $shop_after ;?></span></h4>
										</div>
										<p><?php echo $para ;?></p>
										<h3><?php echo $offer ;?></h3>
										<span><?php echo $sale_before ;?></span>
										<span><?php echo $sale_after ;?></span>
									</div>
								</div>
							</div>
							<!-- /.sin-banner -->
						</a>
					</div>
					<?php
                    }
                }
                ?>
					<!-- /.col-xl-3 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- banner -->


		<!--=========================-->
		<!--=        Product Filter      =-->
		<!--=========================-->


		<section class="main-product">
			<div class="container container-two">
				<div class="section-heading">
					<h3>Welcome to <span>product</span></h3>
				</div>
				<!-- /.section-heading-->
				<div class="row">
					<div class="col-xl-12 ">
						<div class="pro-tab-filter">
							<ul class="pro-tab-button">
								<li class="filter active" data-filter="*">ALL</li>
								<?php
									$productfilterArguments = array(
										'post_type' => 'ProductFilter',
										'post_status' => 'publish',
										'posts_per_page'   => 4
									);

									$ProductFilterQuery = new WP_Query($productfilterArguments);

									if ($ProductFilterQuery->have_posts()) {
										while ($ProductFilterQuery->have_posts()) {
											$ProductFilterQuery->the_post();
											$address_post_id = get_the_ID();
											$product_type = CFS()->get('product_type', $address_post_id);
											
											
									?>
								<li class="filter" data-filter=".<?php echo $product_type ;?>"><?php echo $product_type ;?></li>
								
								<?php
									}
								}
								?>
							</ul>
							<div class="grid row">

							<?php
									$productfilterArguments = array(
										'post_type' => 'ProductFilter',
										'post_status' => 'publish',
										'posts_per_page'   => -1
									);

									$ProductFilterQuery = new WP_Query($productfilterArguments);

									if ($ProductFilterQuery->have_posts()) {
										while ($ProductFilterQuery->have_posts()) {
											$ProductFilterQuery->the_post();
											$address_post_id = get_the_ID();
											$product_image = CFS()->get('product_image', $address_post_id);
											$product_name = CFS()->get('product_name', $address_post_id);
											$product_cost = CFS()->get('product_cost', $address_post_id);
											$product_type = CFS()->get('product_type', $address_post_id);
											
									?>
								<!-- single product -->
								<div class=" grid-item <?php echo $product_type ;?> col-6 col-md-6  col-lg-4 col-xl-3">
									<div class="sin-product style-one">
										<div class="pro-img">
											<img src="<?php echo $product_image ;?>" alt="">
										</div>
										<div class="mid-wrapper">
											<h5 class="pro-title"><a href="product.html"><?php echo $product_name ;?></a></h5>
											<span><?php echo $product_cost ;?></span>
										</div>

										<div class="pro-icon">
											<ul>
												<li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
												<li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
												<li><a class="trigger" href="#"><i class="flaticon-zoom-in"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<!-- single product -->
								<?php
									}
								}
								?>
							


							</div>
						</div>
					</div>
				</div>
				<!-- Row End -->
			</div>
			<!-- Container  -->
		</section>
		<!-- main-product -->




	<!--=========================-->
		<!--=        Feature Area      =-->
		<!--=========================-->

		<section class="feature-area">
			<div class="container-fluid custom-container">
				<div class="row">


				<?php
				$FeatureArguments = array(
					'post_type' => 'Feature',
					'post_status' => 'publish',
					'posts_per_page'   => -1
				);

				$FeatureQuery = new WP_Query($FeatureArguments);

				if ($FeatureQuery->have_posts()) {
					while ($FeatureQuery->have_posts()) {
						$FeatureQuery->the_post();
						$address_post_id = get_the_ID();
						$feature_type = CFS()->get('feature_type', $address_post_id);
						$feature_para = CFS()->get('feature_para', $address_post_id);
						$feature_icon = CFS()->get('feature_icon', $address_post_id);
						
				?>

					<!-- Single Feature -->
					<div class="col-sm-6 col-xl-3">
						<div class="sin-feature">
							<div class="inner-sin-feature">
								<div class="icon">
									<i class="<?php echo $feature_icon ;?>"></i>
								</div>
								<div class="f-content">
									<h6><a href="#"><?php echo $feature_type ;?></a></h6>
									<p><?php echo $feature_para ;?></p>
								</div>
							</div>
						</div>
					</div>

					<!-- Single Feature -->
					<?php
					}
				}
				?>
				
				
				</div>
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.feature-area -->




		<!--=========================-->
		<!--=   Product  area Two   =-->
		<!--=========================-->

		<section class="banner-product">
			<div class="container container-two">
				<div class="section-heading pb-30">
					<h3>NEW <span>TRENDING</span></h3>
				</div>
				<!-- section-heading-->
				<div class="row justify-content-center">
					<div class="col-xl-6 col-lg-4 col-md-8">
						<!-- Single Product-->
						<div class="sin-product">
							<div class="pro-img">
								<img src="http://localhost/task/wp-content/uploads/2023/05/b1-2.jpg" alt="">
							</div>
							<div class="mid-wrapper style-two">
								<h5 class="pro-title"><a href="product.html">Colorfull long dress</a></h5>
								<div class="rating">
									<ul>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star-half"></i></a></li>
									</ul>
								</div>
								<span>$60.00</span>
							</div>
							<div class="pro-icon">
								<ul>
									<li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
									<li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
									<li><a class="trigger" href="#"><i class="flaticon-zoom-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

					<?php
                $TrendingArguments = array(
                    'post_type' => 'Trending',
                    'post_status' => 'publish',
                    'posts_per_page'   => 2
                );

                $TrendingQuery = new WP_Query($TrendingArguments);

                if ($TrendingQuery->have_posts()) {
                    while ($TrendingQuery->have_posts()) {
                        $TrendingQuery->the_post();
                        $address_post_id = get_the_ID();
                        $trending_2_image_1 = CFS()->get('trending_2_image_1', $address_post_id);
						$trending_2_product_1 = CFS()->get('trending_2_product_1', $address_post_id);
                        $trending_2_cost_1 = CFS()->get('trending_2_cost_1', $address_post_id);
						$trending_2_image_2 = CFS()->get('trending_2_image_2', $address_post_id);
						$trending_2_product_2 = CFS()->get('trending_2_product_2', $address_post_id);
						$trending_2_cost_2 = CFS()->get('trending_2_cost_2', $address_post_id);
                        

                ?>

					<div class="col-xl-3 col-lg-4 col-sm-6">
						<!-- Single Product-->
						<div class="sin-product">
							<div class="pro-img">
								<img src="<?php echo $trending_2_image_1 ;?>" alt="">
							</div>
							<div class="mid-wrapper style-two">
								<h5 class="pro-title"><a href="product.html"><?php echo $trending_2_product_1 ;?></a></h5>
								<div class="rating">
									<ul>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star-half"></i></a></li>
									</ul>
								</div>
								<span><?php echo $trending_2_cost_1 ;?></span>
							</div>
							<div class="pro-icon">
								<ul>
									<li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
									<li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
									<li><a class="trigger" href="#"><i class="flaticon-zoom-in"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- Single Product-->
						<div class="sin-product">
							<div class="pro-img">
								<img src="<?php echo $trending_2_image_2 ;?>" alt="">
							</div>
							<div class="mid-wrapper style-two">
								<h5 class="pro-title"><a href="product.html"><?php echo $trending_2_product_2 ;?></a></h5>
								<div class="rating">
									<ul>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
									</ul>
								</div>
								<span><?php echo $trending_2_cost_2 ;?></span>
							</div>
							<div class="pro-icon">
								<ul>
									<li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
									<li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
									<li><a class="trigger" href="#"><i class="flaticon-zoom-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

					<?php
					}
				}
				?>

				</div>
				<!-- /.row -->
			</div>
			<!-- Container-two  -->
		</section>
		<!-- main-product -->



		<!--=========================-->
		<!--=   Discount Countdown area   =-->
		<!--=========================-->

		<section class="add-area">
			<a href="#"><img src="media/images/banner/add.jpg" alt=""></a>
		</section>



		<!--=========================-->
		<!--=   Small Product area    =-->
		<!--=========================-->

		<section class="product-small">
			<div class="container-fluid  custom-container">
				<div class="row">

				<?php
				$BestProductArguments = array(
					'post_type' => 'BestProduct',
					'post_status' => 'publish',
					'posts_per_page'   => -1
				);

				$BestProductQuery = new WP_Query($BestProductArguments);

				if ($BestProductQuery->have_posts()) {
					while ($BestProductQuery->have_posts()) {
						$BestProductQuery->the_post();
						$address_post_id = get_the_ID();
						$title = CFS()->get('title', $address_post_id);
						$product_image_1 = CFS()->get('product_image_1', $address_post_id);
						$product_name_1 = CFS()->get('product_name_1', $address_post_id);
						$product_cost_1 = CFS()->get('product_cost_1', $address_post_id);
						$product_image_2 = CFS()->get('product_image_2', $address_post_id);
						$product_name_2 = CFS()->get('product_name_2', $address_post_id);
						$product_cost_2 = CFS()->get('product_cost_2', $address_post_id);
						
				?>

					<div class="col-sm-6 col-md-6 col-xl-3">
						<div class="small-sec-title">
							<h6><?php echo $title ;?></h6>
						</div>
						<!-- Single product-->
						<div class="sin-product-s">
							<div class="sp-img">
								<img src="<?php echo $product_image_1 ;?>" alt="">
							</div>
							<div class="small-pro-details">
								<h5 class="title"><a href="#"><?php echo $product_name_1 ;?></a></h5>
								<div class="rating">
									<ul>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
									</ul>
								</div>
								<span><?php echo $product_cost_1 ;?></span>
								<a href="#">Buy Now</a>
							</div>
						</div>

						<!-- Single product-->
						<div class="sin-product-s">
							<div class="sp-img">
								<img src="<?php echo $product_image_2 ;?>" alt="">
							</div>
							<div class="small-pro-details">
								<h5 class="title"><a href="#"><?php echo $product_name_2 ;?></a></h5>
								<div class="rating">
									<ul>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
										<li><a href="#"><i class="fas fa-star"></i></a></li>
									</ul>
								</div>
								<span><?php echo $product_cost_2 ;?></span>
								<a href="#">Buy Now</a>
							</div>
						</div>


					</div>
					<!-- col -->

					<?php
					}
				}
				?>

				</div>
				<!-- row -->
			</div>
			<!-- container-fluid End-->
		</section>





		<!--=========================-->
		<!--=   Instagram area      =-->
		<!--=========================-->

		<section class="instagram-area">
			<div class="instagram-slider owl-carousel owl-theme">

			<?php
				$InstagramPostArguments = array(
					'post_type' => 'InstagramPost',
					'post_status' => 'publish',
					'posts_per_page'   => -1
				);

				$InstagramPostQuery = new WP_Query($InstagramPostArguments);

				if ($InstagramPostQuery->have_posts()) {
					while ($InstagramPostQuery->have_posts()) {
						$InstagramPostQuery->the_post();
						$address_post_id = get_the_ID();
						$back_ground_image = CFS()->get('back_ground_image', $address_post_id);
						$instagram_logo = CFS()->get('instagram_logo', $address_post_id);
				
						
				?>
				<!-- single instagram-slider -->
				<div class="sin-instagram">
					<img src="<?php echo $back_ground_image ;?>" alt="">
					<div class="hover-text">
						<a href="#">
					<img src="<?php echo $instagram_logo ;?>" alt="">
					<span>instagram</span>
				 </a>
					</div>
				</div>
				<!-- single instagram-slider -->
				<?php
					}
				}
				?>


			</div>
			<!-- /.instagram-slider end -->
		</section>
		<!-- /.instagram-area end-->




