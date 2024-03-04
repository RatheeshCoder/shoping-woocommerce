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


		<section class="main-product pad-45">
			<div class="container">
				<div class="row">
					<!-- single product -->
					<div class="col-lg-8 col-xl-8">


                    <?php
									$SingleBlogPostArguments = array(
										'post_type' => 'SingleBlogPost',
										'post_status' => 'publish',
										'posts_per_page'   => 1
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
											
									?>

						<article class="sin-blog single-page">
							<figure class="blog-img">
								<img src="<?php echo $blog_thumbnail ; ?>" alt="">
							</figure>
							<div class="blog-content">
								<div class="blog-meta">
									<a href="#"><?php echo $blog_post_date ; ?></a>
								</div>
								<h5><?php echo $blog_title ; ?></h5>
								<div class="blog-details">
									<p><?php echo $blog_content ; ?></p>

									<p>by <a href="#"><?php echo $blog_author_name ; ?></a></p>

									<div class="social">
										<ul>
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
											<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</article>

                        <?php
                    }
                }
                ?>
				

						<div id="comments">
							<div class="comments-list">
								<h4 class="heading"><span>4 Comments</span></h4>
								<div class="commentlists-div">
									<ol class="commentlists">


									<?php
									$CommentsArguments = array(
										'post_type' => 'Comments',
										'post_status' => 'publish',
										'posts_per_page'   => 3
									);

									$CommentsQuery = new WP_Query($CommentsArguments);

									if ($CommentsQuery->have_posts()) {
										while ($CommentsQuery->have_posts()) {
											$CommentsQuery->the_post();
											$address_post_id = get_the_ID();
											$user_profile = CFS()->get('user_profile', $address_post_id);
											$username = CFS()->get('username', $address_post_id);
											$user_date = CFS()->get('user_date', $address_post_id);
											$comments = CFS()->get('comments', $address_post_id);
                                            $replay_profile = CFS()->get('replay_profile', $address_post_id);
											$replay_name = CFS()->get('replay_name', $address_post_id);
											$replay_date = CFS()->get('replay_date', $address_post_id);
											$replay = CFS()->get('replay', $address_post_id);
											
									?>



										<li class="sin-comment  depth-1">
											<div class="the-comment">
												<div class="avatar">
													<img alt="" src="<?php echo $user_profile ; ?>">
												</div>
												<div class="comment-box">
													<div class="comment-author meta">
														<p class="com-name"><strong><?php echo $username ; ?></strong></p>
														<p><?php echo $user_date ; ?> ago <a href="#" class="comment-reply-link"> Reply </a></p>
													</div>
													<div class="comment-text">
														<p><?php echo $comments ; ?></p>
													</div>
												</div>
											</div>
											<ul class="children-comment">
												<li class="comment odd alt depth-2">
													<div class="the-comment">
														<div class="avatar">
															<img alt="" src="<?php echo $replay_profile ; ?>">
														</div>
														<div class="comment-box">
															<div class="comment-author meta">
																<p class="com-name"><strong><?php echo $replay_name ; ?></strong></p>
																<p> <?php echo $replay_date ; ?> ago<a href="#" class="comment-reply-link"> Reply </a></p>
															</div>
															<div class="comment-text">
																<p><?php echo $replay ; ?><br>
																</p>
															</div>
														</div>
													</div>
												</li>
												<!-- #comment-## -->
											</ul>
											<!-- .children -->
										</li>
										

										<?php
                    }
                }
                ?>



										<!-- #comment-## -->
									</ol>
								</div>
							</div>
							<div class="commentform">
								<div class="comment-respond">
									<div class="comment-reply-title">
										<h4 class="heading">
											<span>Leave a Comment</span>
										</h4>
									</div>
									<form class="comment-form" id="commentform" method="post" action="#">
									<?php
										$form_shortcode = '[contact-form-7 id="507" title="Comments"]'; // Replace with your actual Contact Form 7 shortcode
										echo do_shortcode($form_shortcode);
										?>

									</form>
								</div>
								<!-- #respond -->
							</div>
							<!-- end commentform -->
						</div>
					</div>

					<div class="col-lg-4 col-xl-4">
						<div class="blog-sidebar">

							<div class="blog-widget">
								<h4 class="widget-title">Latest Post</h4>


                                <?php
									$SingleBlogPostArguments = array(
										'post_type' => 'SingleBlogPost',
										'post_status' => 'publish',
										'posts_per_page'   => 3
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
                                            $short_content = substr($blog_content, 0, 20) . '...';


											
									?>

								<div class="widget-post">
									<div class="widget-post-img">
										<a href="#"><img src="<?php echo $blog_thumbnail ; ?>" alt=""></a>
									</div>
									<div class="widget-post-content">
										<h6 class="wid-post-title">
											<a href="#"><?php echo $short_content ; ?></a></h6>
										<p><?php echo $blog_post_date ; ?></p>
									</div>
								</div>


                                <?php
                    }
                }
                ?>


							</div>
							<!-- /.blog-widget-->

							<div class="blog-widget">
								<h4 class="widget-title">Categories</h4>
								<ul class="wid-category">

                                <?php
									$BlogsCategoriesArguments = array(
										'post_type' => 'BlogsCategories',
										'post_status' => 'publish',
										'posts_per_page'   => 5
									);

									$BlogsCategoriesQuery = new WP_Query($BlogsCategoriesArguments);

									if ($BlogsCategoriesQuery->have_posts()) {
										while ($BlogsCategoriesQuery->have_posts()) {
											$BlogsCategoriesQuery->the_post();
											$address_post_id = get_the_ID();
											$categories_name = CFS()->get('categories_name', $address_post_id);
											


											
									?>
									<li><a href="#"><?php echo $categories_name;  ?></a></li>

                                    <?php
                    }
                }
                ?>
									
								</ul>
							</div>
							<!-- /.blog-widget-->

							<div class="blog-widget">
								<h4 class="widget-title">Tags</h4>
								<ul class="widget-tag">
                                <?php
									$BlogsTagsArguments = array(
										'post_type' => 'BlogsTags',
										'post_status' => 'publish',
										'posts_per_page'   => 8
									);

									$BlogsTagsQuery = new WP_Query($BlogsTagsArguments);

									if ($BlogsTagsQuery->have_posts()) {
										while ($BlogsTagsQuery->have_posts()) {
											$BlogsTagsQuery->the_post();
											$address_post_id = get_the_ID();
											$tags_name = CFS()->get('tags_name', $address_post_id);
											


											
									?>
									<li><a href="#"><?php echo $tags_name;  ?></a></li>

                                    <?php
                    }
                }
                ?>
									
								</ul>
							</div>
							<!-- /.blog-widget-->

						</div>
					</div>
					<!-- /.col-xl-3 -->

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