		<!--=========================-->
		<!--=   Footer area      =-->
		<!--=========================-->

		<footer class="footer-widget-area style-two">
			<div class="container-fluid custom-container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-3">
						<div class="footer-widget style-two">
							<div class="logo">
								<a href="#">
							<img src="http://localhost/task/wp-content/uploads/2023/06/logo.png" alt="">
						</a>
							</div>
							<p>Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illum dolore eu olestie.</p>
							<div class="time-table">
								<p>Opening time</p>
								<span>Monday - Friday   ( 8.00 to 18.00 )</span>
								<span>Saturday    ( 8.00 to 18.00 )</span>
							</div>
						</div>
					</div>
					<!-- /.col-xl-3 -->
					<div class="col-12 col-sm-6 col-md-6 col-lg-2">
						<div class="footer-widget style-two">
							<h3>Quick shop</h3>
							<div class="footer-menu">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">Clothing</a></li>
									<li><a href="#">Jewellery</a></li>
									<li><a href="#">Shoes</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Collections</a></li>
									<li><a href="#">Sale</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /.col-xl-3 -->
					<div class="col-12 col-sm-6 col-md-6 col-lg-2">
						<div class="footer-widget style-two">
							<h3>CUSTOMER SERVICES</h3>
							<div class="footer-menu">
								<ul>
									<li><a href="#">FAQ's</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Customer Service</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Consultant</a></li>
									<li><a href="#">Collections</a></li>
									<li><a href="#">Support Center</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /.col-xl-3 -->
					<div class="col-12 col-sm-6 col-md-6 col-lg-2">
						<div class="footer-widget style-two">
							<h3>EXPERIENCE</h3>
							<div class="footer-menu">
								<ul>
									<li><a href="#">Help</a></li>
									<li><a href="#">Order Status</a></li>
									<li><a href="#">Returns & Exchanges</a></li>
									<li><a href="#">International</a></li>
									<li><a href="#">Gift Cards</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /.col-xl-3 -->
					<div class="col-12 col-sm-6 col-md-6 col-lg-3">
						<div class="footer-widget style-two">
							<h3>instagram</h3>
							<div class="footer-instagram">
								<ul>
									<li><a href="#"><img src="http://localhost/task/wp-content/uploads/2023/06/6.jpg" alt=""></a></li>
									<li><a href="#"><img src="http://localhost/task/wp-content/uploads/2023/06/6.jpg" alt=""></a></li>
									<li><a href="#"><img src="http://localhost/task/wp-content/uploads/2023/06/6.jpg" alt=""></a></li>
									<li><a href="#"><img src="http://localhost/task/wp-content/uploads/2023/06/6.jpg" alt=""></a></li>
									<li><a href="#"><img src="http://localhost/task/wp-content/uploads/2023/06/6.jpg" alt=""></a></li>
									<li><a href="#"><img src="http://localhost/task/wp-content/uploads/2023/06/6.jpg" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /.col-xl-3 -->
				</div>
				<div class="footer-bottom">
					<div class="row">
						<div class="col-md-12 col-lg-6 col-xl-6 order-2 order-lg-1">
							<p>Copyright © <span>2018</span> ThemeIM Solution • Designed by <a href="#">ThemeIM</a></p>
						</div>
						<!-- /.col-xl-6 -->
						<div class="col-md-12 col-lg-6 col-xl-6 order-1 order-lg-2">
							<div class="footer-payment-icon">
								<ul>
									<li><a href="#"><img src="http://localhost/task/wp-content/uploads/2023/06/p1.png" alt=""></a></li>
									<li><a href="#"><img src="http://localhost/task/wp-content/uploads/2023/06/p1.png" alt=""></a></li>
									<li><a href="#"><img src="http://localhost/task/wp-content/uploads/2023/06/p1.png" alt=""></a></li>
									<li><a href="#"><img src="http://localhost/task/wp-content/uploads/2023/06/p1.png" alt=""></a></li>
								</ul>
							</div>
						</div>
						<!-- /.col-xl-6 -->
					</div>
					<!-- /.row -->
				</div>
			</div>
			<!-- container-fluid -->
		</footer>
		<!-- footer-widget-area -->

<!-- Back to top
	============================================= -->

	<div class="backtotop">
			<i class="fa fa-angle-up backtotop_btn"></i>
		</div>





		<!--=========================-->
		<!--=   Popup 2 area      =-->
		<!--=========================-->

		<!-- Popup area
	============================================= -->

		<div class="modal popup-2" id="exampleModaltwo" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-body popup-banner style-two">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
					<h3>Get the Product <span>Delivered Daily!</span></h3>
					<p>Give me your email and you will be daily updated with the latest product & detail!.</p>
					<div class="popup-subscribe">
						<div class="subscribe-wrapper">
							<input placeholder="Enter Keyword" type="text">
							<button type="submit">SUBSCRIBE</button>
						</div>
					</div>
					<input type="checkbox" name="vehicle" value="Bike">
					<span>Don't show this popup again</span>
				</div>
			</div>
		</div>

		<!--=========================-->
		<!--=   Product Quick view area       =-->
		<!--=========================-->

		<!-- Quick View -->
		<div class="modal quickview-wrapper">
			<div class="quickview">
				<div class="row">

				<?php

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    $product = wc_get_product($product_id);

    if ($product) {
 

						
								
								// Get the product details
								$product_id = $product->get_id();
								$product_price = $product->get_price();
								$product_name = get_post_meta($product_id, '_product_name', true);
								$product_type = get_post_meta($product_id, '_product_type', true);
								

								// Get the sub images
								$sub_images = array();
								for ($i = 1; $i <= 5; $i++) {
									$sub_image = get_post_meta($product_id, '_product_sub_image_' . $i, true);
									if ($sub_image) {
										$sub_images[] = $sub_image;
									}
								}

								?>

									<div class="col-12">
										<span class="close-qv">
									<i class="flaticon-close"></i>
								</span>
									</div>
									<div class="col-md-6">
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
						<!-- /.quickview-slider -->
					</div>
					<!-- /.col-xl-6 -->

					<div class="col-md-6">
						<div class="product-details">
							<h5 class="pro-title"><a href="#"><?php echo $product_name;  ?></a></h5>
							<span class="price">Price : $387</span>
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
							<div class="color-variation">
								<span>color :</span>
								<ul>
									<li><i class="fas fa-circle"></i></li>
									<li><i class="fas fa-circle"></i></li>
									<li><i class="fas fa-circle"></i></li>
									<li><i class="fas fa-circle"></i></li>
								</ul>
							</div>

							<div class="add-tocart-wrap">
								<!--PRODUCT INCREASE BUTTON START-->
								<div class="cart-plus-minus-button">
									<input type="text" value="1" name="qtybutton" class="cart-plus-minus">
								</div>
								<a href="#" class="add-to-cart"><i class="flaticon-shopping-purse-icon"></i>Add to Cart</a>
								<!-- <a href="#"><i class="flaticon-valentines-heart"></i></a> -->
							</div>

							<!-- <span>SKU:	N/A</span>
								<p>Tags <a href="#">boys,</a><a href="#"> dress,</a><a href="#">Rok-dress</a></p> -->

							<p>But I must explain to you how all this mistaken idedenounc pleasure and praisi pain was born and I will give you a complete accosystem, and expound the actu teachings of the great explore tmaster-builder of human happiness. No one rejects, dislikes,
								or avoids.</p>

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

					<?php
                      }
					}
                  
                  
                  ?>

				</div>
				<!-- /.row -->
			</div>
		</div>





        </div>
	

	<?php wp_footer(); ?>

</body>

</htm