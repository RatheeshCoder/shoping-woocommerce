		<!--=========================-->
		<!--=        Slider         =-->
		<!--=========================-->


		<section class="slider-wrapper">
			<div class="slider-start slider-three owl-carousel owl-theme">

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
					<img src="<?php echo $background; ?>" alt="">
					<div class="container-fluid custom-container slider-content">
						<div class="row align-items-center">
							<div class="col-12 col-sm-8 col-md-8 offset-md-1 col-lg-6 offset-xl-2 col-xl-5 mr-auto">
								<div class="slider-text mob-align-left">
									<h4 class="animated fadeIn"><?php echo $title; ?> </h4>
									<h1 class="animated fadeIn"><?php echo $title_sub; ?> </h1>
									<p class="animated fadeIn"><?php echo $title_paragraph; ?></p>
									<a class="animated fadeIn btn-two" href="#">SHOP NOW</a>
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

		<section class="category-area padding-120">
			<div class="container-fluid custom-container">
				<div class="category-carousel owl-carousel owl-theme">


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

					<div class="sin-category">
						<img src="<?php echo $banner_image; ?>" alt="">
						<div class="cat-name">
							<a href="#">
								<h5><?php echo $product_type; ?></h5>
								<h5><?php echo $shop_before; ?><span><?php echo $shop_after; ?></span></h5>
							</a>
						</div>
					</div>
					<?php
                    }
                }
                ?>




				</div>
				<!-- .row -->
			</div>
			<!-- .container-fluid -->
		</section>
		<!-- .category section-->



<!--=========================-->
		<!--=        Product Filter          =-->
		<!--=========================-->

		<section class="main-product bg-one">
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
							<div class="grid grid-three">

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
								<div class="grid-item <?php echo $product_type;  ?> col-sm-12 col-md-6">
									<div class="sin-product style-three">
										<div class="pro-img-three">
											<div class="img-show">
												<img src="<?php echo $product_image;  ?>" alt="">
											</div>
											<div class="img-hover">
												<img src="<?php echo $product_image;  ?>" alt="">
											</div>
										</div>
										<div class="mid-wrapper">
											<h5 class="pro-title"><a href="product.html"><?php echo $product_name;  ?></a></h5>
											<div class="color-variation">
												<ul>
													<li><i class="fas fa-circle"></i></li>
													<li><i class="fas fa-circle"></i></li>
													<li><i class="fas fa-circle"></i></li>
													<li><i class="fas fa-circle"></i></li>
												</ul>
											</div>
											<p>Woman / <span><?php echo $product_cost;  ?></span></p>
										</div>
										<div class="pro-icon style-three">
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
			<!-- Container End -->
		</section>
		<!-- main-product End -->




				<!--=========================-->
		<!--=        Logo Carousel Area          =-->
		<!--=========================-->

		<section class="logo-carousel">
			<div class="container container-two">
				<div class="row">
					<div class="col-xl-12">
						<div class="client-car owl-carousel owl-theme">
							
						<?php
									$LogoAreaArguments = array(
										'post_type' => 'LogoArea',
										'post_status' => 'publish',
										'posts_per_page'   => -1
									);

									$LogoAreaQuery = new WP_Query($LogoAreaArguments);

									if ($LogoAreaQuery->have_posts()) {
										while ($LogoAreaQuery->have_posts()) {
											$LogoAreaQuery->the_post();
											$address_post_id = get_the_ID();
											$image = CFS()->get('image', $address_post_id);
											
											
									?>
						
							<div>
								<a href="#">
									<img src="<?php echo $image;   ?>" alt="">
								</a>
							</div>

					
							<?php
									}
								}
								?>
							
						
						</div>
					</div>
					<!-- /.col-xl-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.logo-carousel -->


		<!--=========================-->
		<!--=        Testimonial Area          =-->
		<!--=========================-->

		<section class="testimonial-area bg-one padding-120">
			<div class="container container-two">
				<div class="section-heading pb-30">
					<h3>our happy <span>clients</span></h3>
				</div>
				<!-- /.section-heading-->
				<div class="row">
					<div class="col-xl-12">
						<div class="testimonial-carousel owl-carousel owl-theme">
						<?php
									$CLIENTSArguments = array(
										'post_type' => 'CLIENTS',
										'post_status' => 'publish',
										'posts_per_page'   => -1
									);

									$CLIENTSQuery = new WP_Query($CLIENTSArguments);

									if ($CLIENTSQuery->have_posts()) {
										while ($CLIENTSQuery->have_posts()) {
											$CLIENTSQuery->the_post();
											$address_post_id = get_the_ID();
											$image = CFS()->get('image', $address_post_id);
											$paragraph = CFS()->get('paragraph', $address_post_id);
											$name = CFS()->get('name', $address_post_id);
											
											
									?>


							<div class="single-testimonial">
								<div class="tes-img">
									<img src="<?php echo $image; ?>" alt="">
								</div>
								<div class="tes-content">
									<p><?php echo $paragraph; ?></p>
									<span><?php echo $name; ?></span>
								</div>
							</div>
							<!-- /.single-testimonial -->
							<?php
									}
								}
								?>
							



						</div>
						<!-- /.testimonial-carousel -->
					</div>
					<!-- /.col-xl-12  -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.testimonial-area -->





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




		<!--=========================-->
		<!--=   Instagram area      =-->
		<!--=========================-->
		<section class="instagram-area-two">
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
					
				
						
				?>
			
			
				<div class="sin-instagram">
					<img src="<?php $back_ground_image; ?>" alt="">
						<div class="hover-text">
							<a href="#">
								<span>instagram</span>
				 			</a>
						</div>
				</div>

				<?php
					}
				}
				?>


			</div>
		</section>
		<!-- /.instagram-area -->