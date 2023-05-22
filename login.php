<?php

	ob_start();

	include('db-connection.php');
	include('functions.php');
	

	include('assets/includes/header.php');
	include('assets/includes/navbar.php');
	include('assets/includes/sidebar.php');
	
	
		
	

?>

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(assets/images/bg-title-page-01.jpg);">
		<h2 class="tit6 t-center" data-aos="fade-up" data-aos-delay="100">
			Login
		</h2>
	</section>

	<!-- Breadcrumb -->
	<div class="bg2-pattern bread-crumb bo5-b p-t-17 p-b-17" id="login">
			<div class="container">
				<a href="index.php" class="txt27">
					Home
				</a>

				<span class="txt29 m-l-10 m-r-10">/</span>

				<span class="txt29">
					Login
				</span>
			</div>
	</div>

<!-- Login -->
<section class="section-booking bg1-pattern p-t-100 p-b-110">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 p-b-10">
					<div class="t-center"data-aos="fade-right" data-aos-delay="200">
						<span class="tit2 t-center">
							Sign in
						</span>

							<h3 class="tit3 t-center m-b-5 m-t-2">
								Log in to your account
							</h3>
							<p class="m-b-10">
								By creating an account you agree to our <a href="#" class="txt15">Terms & Privacy</a>
							</p>
					</div>

					
				</div>

				<div class="col-lg-6 p-b-30 p-t-18" data-aos="fade-left" data-aos-delay="200">

				<?php
						login();
					?>
				
					<form action="#login" method="POST" class="wrap-form-booking"  >
						<div class="row">
							

							<div class="col-md-12">
								<!-- Username -->
								<span class="txt9">
									Username
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="username" placeholder="Username">
								</div>

								<!-- Password -->
								<span class="txt9">
									Password
								</span>

								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="password" placeholder="Password">
								</div>
							</div>
						</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" name="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
								Login
							</button>
						</div>
					</form>
					
					
				</div>
			</div>
			<div class="col-lg-6 t-center" data-aos="fade-up" data-aos-delay="100">
					<p class="m-b-20">
							Need an account? <a href="register.php" class="txt15">Sign Up</a>
					</p>
			</div>
		</div>
	</section>

	<?php
		ob_end_flush();
		include("assets/includes/footer.php");
	?>