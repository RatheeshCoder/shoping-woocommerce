		<!--=========================-->
		<!--=        Slider         =-->
		<!--=========================-->



		<section class="slider-wrapper">
			<div class="slider-start slider-2 owl-carousel owl-theme">

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
						$offer = CFS()->get('offer', $address_post_id);
                        $offer_para = CFS()->get('offer_para', $address_post_id);
                        

                ?>

				<div class="item">
					<img src="<?php echo $background ;?>" alt="">
					<div class="container-fluid custom-container slider-content">
						<div class="row align-items-center">
							<div class="col-12 col-sm-8 col-md-8 col-lg-6 ml-auto">
								<div class="slider-text style-two">
									<h1 class="animated fadeIn"><?php echo $offer ;?></h1>
									<p class="animated fadeIn"><?php echo $offer_para ;?></p>
									<a class="animated fadeIn btn-two" href="#">shopping now</a>
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
		<!--= Product banner style two  =-->
		<!--=========================-->

		<section class="product-banner-two-area padding-top-90">
			<div class="container container-two">
				<div class="row justify-content-center">
					<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="prod-banner-two">
							<a href="#">
						<img src="http://localhost/task/wp-content/uploads/2023/05/s4-3.jpg" alt="">
						<div class="pb-info">
							<p>Woman's Shop</p>
							<h6>20% Off</h6>
						</div>
					 </a>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="prod-banner-two">
							<a href="#">
						<img src="http://localhost/task/wp-content/uploads/2023/05/s2-2.jpg" alt="">
						<div class="pb-info">
							<p>Shoes's Shop</p>
							<h6>25% Off</h6>
						</div>
					 </a>
						</div>
						<div class="prod-banner-two">
							<a href="#">
						<img src="http://localhost/task/wp-content/uploads/2023/05/s2-2.jpg" alt="">
						<div class="pb-info">
							<p>Child's Shop</p>
							<h6>15% Off</h6>
						</div>
					</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="prod-banner-two">
							<a href="#">
						<img src="http://localhost/task/wp-content/uploads/2023/05/s4-3.jpg" alt="">
						<div class="pb-info">
							<p>Men Shop</p>
							<h6>15% Off</h6>
						</div>
					</a>
						</div>
					</div>
				</div>
				<!-- row -->
			</div>
			<!-- container-wo -->
		</section>

		<!--=========================-->
		<!--= Product banner style two  =-->
		<!--=========================-->







		<section class="main-product">
			<div class="container container-two">
				<div class="section-heading">
					<h3>Welcome to <span>product</span></h3>
				</div>
				<!-- /.section-heading-->
				<div class="row">
					<div class="col-xl-12 ">
						<div class="pro-tab-filter style-two">
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
											$product_person = CFS()->get('product_person', $address_post_id);
											
									?>

								<!-- single product -->
								<div class=" grid-item <?php echo $product_type ;?> col-6 col-md-6  col-lg-4 col-xl-3">
									<div class="sin-product style-two">
										<div class="pro-img">
											<img src="<?php echo $product_image ;?>" alt="">
										</div>
										<div class="mid-wrapper">
											<h5 class="pro-title"><a href="product.html"><?php echo $product_name ;?></a></h5>
											<div class="color-variation">
												<ul>
													<li><i class="fas fa-circle"></i></li>
													<li><i class="fas fa-circle"></i></li>
													<li><i class="fas fa-circle"></i></li>
													<li><i class="fas fa-circle"></i></li>
												</ul>
											</div>
											<p><?php echo $product_person ;?> / <span><?php echo $product_cost ;?></span></p>
										</div>
										<div class="icon-wrapper">
											<div class="pro-icon">
												<ul>
													<li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
													<li><a href="#"><i class="flaticon-compare"></i></a></li>
													<li><a class="trigger" href="#"><i class="flaticon-eye"></i></a></li>
												</ul>
											</div>
											<div class="add-to-cart">
												<a href="#">add to cart</a>
											</div>
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
			<!-- Container -->
		</section>
		<!-- main-product -->

		<!--=========================-->
		<!--=   Discount Countdown area      =-->
		<!--=========================-->



		<section class="add-area">
			<a href="#"><img src="http://localhost/task/wp-content/uploads/2023/05/add.jpg" alt=""></a>
		</section>



		<!--=========================-->
		<!--=   Product  area with  banner      =-->
		<!--=========================-->

		<section class="banner-product">
			<div class="container-fluid custom-container">
				<div class="section-heading pb-30">
					<h3>NEW <span>TRENDING</span></h3>
				</div>
				<!-- section-heading-->
				<div class="row">
					<div class="col-xl-4 col-lg-4">
						<!-- Product baneer-->
						<div class="prod-banner-two mt-0">
							<a href="#">
						<img src="http://localhost/task/wp-content/uploads/2023/05/s5-2.jpg" alt="">
						<div class="pb-info">
							<p>Woman's Shop</p>
							<h6>40% Off</h6>
						</div>
						</a>
						</div>
					</div>
					<!-- Col end-->
					<div class="no-padding col-xl-8 col-lg-8">
						<div class="prod-carousel owl-carousel owl-theme">

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


							<div class="sin-prod-car">
								<!-- SingleProduct-->
								<div class="sin-product style-two small">
									<div class="pro-img">
										<img src="<?php echo $trending_2_image_1 ;?>" alt="">
									</div>
									<div class="mid-wrapper">
										<h5 class="pro-title"><a href="product.html"><?php echo $trending_2_product_1 ;?></a></h5>
										<div class="color-variation">
											<ul>
												<li><i class="fas fa-circle"></i></li>
												<li><i class="fas fa-circle"></i></li>
												<li><i class="fas fa-circle"></i></li>
												<li><i class="fas fa-circle"></i></li>
											</ul>
										</div>
										<p>Woman / <span><?php echo $trending_2_cost_1 ;?></span></p>
									</div>
									<div class="icon-wrapper">
										<div class="pro-icon">
											<ul>
												<li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
												<li><a href="#"><i class="flaticon-compare"></i></a></li>
												<li><a class="trigger" href="#"><i class="flaticon-eye"></i></a></li>
											</ul>
										</div>
										<div class="add-to-cart">
											<a href="#">add to cart</a>
										</div>
									</div>
								</div>
								<!-- Single Product-->
								<div class="sin-product style-two small">
									<div class="pro-img">
										<img src="<?php echo $trending_2_image_2 ;?>" alt="">
									</div>
									<span class="new-tag">NEW!</span>

									<div class="mid-wrapper">
										<h5 class="pro-title"><a href="product.html"><?php echo $trending_2_product_2 ;?></a></h5>
										<div class="color-variation">
											<ul>
												<li><i class="fas fa-circle"></i></li>
												<li><i class="fas fa-circle"></i></li>
												<li><i class="fas fa-circle"></i></li>
												<li><i class="fas fa-circle"></i></li>
											</ul>
										</div>
										<p>Kids / <span><?php echo $trending_2_cost_2 ;?></span></p>
									</div>
									<div class="icon-wrapper">
										<div class="pro-icon">
											<ul>
												<li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
												<li><a href="#"><i class="flaticon-compare"></i></a></li>
												<li><a class="trigger" href="#"><i class="flaticon-eye"></i></a></li>
											</ul>
										</div>
										<div class="add-to-cart">
											<a href="#">add to cart</a>
										</div>
									</div>
								</div>
							</div>

							<?php
					}
				}
				?>



						</div>
					</div>
					<!-- Col end-->
				</div>
				<!-- /.row -->
			</div>
			<!-- Container End -->
		</section>
		<!-- main-product End -->



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
