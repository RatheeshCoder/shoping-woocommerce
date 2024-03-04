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



		<!--Contact area
	============================================= -->
		<section class="contact-area">
			<div class="container-fluid custom-container">
				<div class="section-heading pb-30">
					<h3>join with <span>us</span></h3>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-8 col-lg-8 col-xl-6">
						<div class="contact-form">
							<form action="#">
                            <?php
										$form_shortcode = '[contact-form-7 id="522" title="Contact"]'; // Replace with your actual Contact Form 7 shortcode
										echo do_shortcode($form_shortcode);
										?>
							</form>
						</div>
					</div>
				</div>
				<!-- /.row end -->
			</div>
			<!-- /.container-fluid end -->
		</section>
		<!-- /.contact-area end -->



        		<!--Map area
	============================================= -->

		<section class="google-map">
			<div class="row no-gutters">
				<div class="col-md-6 col-lg-6">
					<div class="gmap3-area" data-lat="40.730260" data-lng="-74.040315" data-mrkr="http://localhost/task/wp-content/uploads/2023/07/map-marker.png"></div>
					<!-- /.google-map -->
				</div>
				<!-- /.col-xl-6 -->
				<div class="col-md-6 col-lg-6">
					<div class="contact-info">
						<h5>ThemeIM Park</h5>
						<span>garmany</span>
						<p>Queens stae park city, Momin Tower 78, New York,WT47.</p>
						<p>Monday - Sunday:<span> 9:00am - 7:15pm</span> </p>
						<p>Phone:<span> 022 1458 645 125</span></p>
					</div>
				</div>
				<!-- /.col-xl-6 -->
			</div>
			<!-- /.row -->
		</section>
		<!-- /#map -->




		<!--Shop area
	============================================= -->
    <section class="store-area padding-120">
			<div class="container">
				<div class="section-heading  pb-30">
					<h3>SHOP ALSO <span>HERE</span></h3>
				</div>
				<div class="row">

                <?php
									$ShopHereArguments = array(
										'post_type' => 'ShopHere',
										'post_status' => 'publish',
										'posts_per_page'   => 3
									);

									$ShopHereQuery = new WP_Query($ShopHereArguments);

									if ($ShopHereQuery->have_posts()) {
										while ($ShopHereQuery->have_posts()) {
											$ShopHereQuery->the_post();
											$address_post_id = get_the_ID();
											$product_image = CFS()->get('product_image', $address_post_id);
											$company_name = CFS()->get('company_name', $address_post_id);
											$place = CFS()->get('place', $address_post_id);
											
									?>


					<div class="col-md-4">
						<div class="single-store">
							<img src="<?php echo $product_image ; ?>" alt="">
							<a href="#"><?php echo $company_name ; ?></a>
							<p><?php echo $place ; ?></p>
						</div>
					</div>


                    <?php
                    }
                }
                ?>

					

				</div>
				<!-- /.row end -->
			</div>
			<!-- /.container-fluid end -->
		</section>
		<!-- /.contact-area end -->




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