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
		<!--=        Login         =-->
		<!--=========================-->
    




		<?php
/**
 * Template Name: Custom Login Page
 */

// Check if WooCommerce is active
if (!function_exists('is_woocommerce')) {
    return;
}

// Process login form
if (isset($_POST['login'])) {
    $username = sanitize_user($_POST['username']);
    $password = $_POST['password'];

    // Perform the login
    $user = wp_signon(array('user_login' => $username, 'user_password' => $password));

    if (is_wp_error($user)) {
        $error_message = $user->get_error_message();
    } else {
        // Redirect to the account dashboard after successful login
        wp_redirect(wc_get_page_permalink('myaccount'));
        exit;
    }
}


?>

<!-- Login area -->
<section class="contact-area">
    <div class="container-fluid custom-container">
        <div class="section-heading pb-30">
            <h3>Login <span>Account</span></h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-9 col-md-8 col-lg-6 col-xl-4">
                <div class="contact-form login-form">
                    <form method="post">
                        <div class="row">
                            <div class="col-xl-12">
                                <input type="text" name="username" placeholder="Email*" required>
                            </div>
                            <div class="col-xl-12">
                                <input type="password" name="password" placeholder="Password*" required>
                            </div>
                            <div class="col-xl-12">
                                <input type="submit" name="login" value="LOG IN">
                            </div>
                        </div>
                        <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row end -->
    </div>
    <!-- /.container-fluid end -->
</section>
<!-- /.contact-area end -->


<section class="login-now">
			<div class="container-fluid custom-container">
				<div class="col-12">
					<span>Dont have account</span>
					<a href="create-account.html" class="btn-two">Create Account</a>
				</div>
				<!-- /.col-12 -->
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.login-now -->




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
