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
		<!--=        Product Filter          =-->
		<!--=========================-->


		<section class="blog-wrapper">
			<div class="container container-two">
				<div class="section-heading">
					<h3>Blog<span>Area</span></h3>
				</div>
				<!-- /.section-heading-->
				<div class="row">
					<div class="col-xl-12 ">
						<div class="pro-tab-filter">
							<ul class="pro-tab-button">
								<li class="filter active" data-filter="*">ALL</li>
								<li class="filter" data-filter=".Accessories">Accessories</li>
								<li class="filter" data-filter=".Men">Men's clothing</li>
								<li class="filter" data-filter=".Kids">Kids clothing</li>
								<li class="filter" data-filter=".Women">Women dresses</li>
							</ul>
							<div class="grid row">



                            <?php
									$SingleBlogPostArguments = array(
										'post_type' => 'SingleBlogPost',
										'post_status' => 'publish',
										'posts_per_page'   => -1
									);

									$SingleBlogPostQuery = new WP_Query($SingleBlogPostArguments);

									if ($SingleBlogPostQuery->have_posts()) {
										while ($SingleBlogPostQuery->have_posts()) {
											$SingleBlogPostQuery->the_post();
											$address_post_id = get_the_ID();
											$blog_thumbnail = CFS()->get('blog_thumbnail', $address_post_id);
											$blog_title = CFS()->get('blog_title', $address_post_id);
											$blog_content = CFS()->get('blog_content', $address_post_id);
											$blog_author_name = CFS()->get('blog_author_name', $address_post_id);
                                            $blog_post_date = CFS()->get('blog_post_date', $address_post_id);
                                            $short_content = substr($blog_content, 0, 100) . '...';
                                            $blog_filter = CFS()->get('blog_filter', $address_post_id);


									?>



								<!-- single product -->
								<div class=" grid-item <?php echo $blog_filter ; ?> col-sm-6 col-md-6  col-lg-4 col-xl-6">
									<article class="sin-blog">
										<figure class="blog-img">
											<a href="#"><img src="<?php echo $blog_thumbnail ; ?>" alt=""></a>
										</figure>
										<div class="blog-content">
											<div class="blog-meta">
												<a href="#"><?php echo $blog_post_date ; ?></a>
											</div>
											<h5><a class="title" href="#"><?php echo $blog_title ; ?></a></h5>
											<div class="blog-details">
												<p><?php echo $short_content ; ?></p>
												<a href="#">Read more</a>
											</div>
										</div>
									</article>
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
		<!--=   Subscribe area      =-->
		<!--=========================-->

		<section class="subscribe-area">
			<div class="container container-two">
				<div class="row">
					<div class="col-lg-5 col-xl-5">
						<div class="subscribe-text">
							<h6><span>Join our newsletter </span>save 10% off</h6>
							<p>Autem vel eum iriure dolor in hendrerit in vulpuate velit esse molestie consequat vel illum dolore eu olestie.</p>
						</div>
					</div>
					<!-- col-xl-6 -->

					<div class="col-lg-7 col-xl-7">
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