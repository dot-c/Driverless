<?php

	session_start();
		
	if(!isset($_SESSION['user'])){
		
		header('Location:../login.php');
		
		exit();
	}

	include('assets/includes/header.php');
	include('assets/includes/sidebar.php');


?>

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(assets/images/bg-title-page-05.jpg);">
		<h2 class="tit6 t-center" data-aos="fade-up" data-aos-delay="100">
			Contact Us
		</h2>
	</section>

	<!-- Breadcrumb -->
	<div class="bg2-pattern bread-crumb bo5-b p-t-17 p-b-17">
			<div class="container">
				<a href="index.php" class="txt27">
					Home
				</a>

				<span class="txt29 m-l-10 m-r-10">/</span>

				<span class="txt29">
					Contact
				</span>
			</div>
	</div>

	<!-- Contact form -->
	<section class="section-contact bg1-pattern p-t-5 p-b-18" id="contact">
		
		<div class="container">
			<h3 class="tit7 t-center p-b-15 p-t-50" data-aos="fade-up" data-aos-delay="100">
				Contact Us
			</h3>
			<p class="t-center size3 m-l-r-auto" data-aos="fade-up" data-aos-delay="100">
				Ask us any question you would like to know about autonomous cars
			</p>

			
			
			<form action="faq.php" method="GET" class="wrap-form-reservation p-t-20 size22 m-l-r-auto" data-aos="fade-up" data-aos-delay="100">
				<?php 
					
					
					//echo "<div class='alert alert-danger' role='alert'>".$_SESSION['error-message']."</div>";
				
											
				?>

				<div class="row">
				
					<div class="col-md-4">
						<!-- Name -->
						<span class="txt9">
							Name
						</span>

						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Name">
						</div>
					</div>

					<div class="col-md-4">
						<!-- Email -->
						<span class="txt9">
							Email
						</span>

						<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
						</div>
					</div>

					<div class="col-md-4">
						<!-- Phone -->
						<span class="txt9">
							Phone
						</span>

						<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Phone">
						</div>
					</div>

					<div class="col-12">
						<!-- Subject -->
						<span class="txt9">
							Subject
						</span>

						<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="subject" placeholder="Subject">
						</div>

						<!-- Message -->
						<span class="txt9">
							Message
						</span>
						<textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="message" placeholder="Type your question here"></textarea>
					</div>
				</div>

				<div class="wrap-btn-booking flex-c-m m-t-13">
					<!-- Button3 -->
					<button type="submit" name ="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
						Submit
					</button>
				</div>
			</form>

			<div class="row p-t-50">
				<div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30" data-aos="fade-right" data-aos-delay="100">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="assets/images/icons/map-icon.png" alt="IMG-ICON">
						</div>

						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Location
							</span>

							<span class="txt23 size38">
								8th floor, 379 Hudson St, New York, NY 10018
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30" data-aos="fade-up" data-aos-delay="100">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="assets/images/icons/phone-icon.png" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Call Us
							</span>

							<span class="txt23 size38">
								(+1) 96 716 6879
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30" data-aos="fade-left" data-aos-delay="100">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="assets/images/icons/clock-icon.png" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Opening Hours
							</span>

							<span class="txt23 size38">
								09:30 AM – 11:00 PM <br/>Every Day
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Newsletter -->
	<div class="parallax0 parallax100" style="background-image: url(assets/images/bg-about-01.jpg);">
		<div class="wrap-text header-intro parallax100 t-center p-t-135 p-b-158" data-aos="zoom-in" data-aos-delay="100">
				<span class="tit2 p-l-15 p-r-15">
					Newsletter
				</span>

				<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
					Newsletter Sign Up 
				</h3>
				<p class="t-center m-b-22 size3 newsletter-txt m-l-r-auto">
					Sign up for our newsletter so that that you can start receiving news about autonomous cars. 
				</p>
				<!-- Button1 -->
				<a href="#signup" class="t-center btn1 flex-c-m size17 txt3 trans-0-4 m-l-r-auto">
					Click to Sign Up
				</a>
		</div>

	</div>

	

	<!-- Sign up -->
	<div id="signup" class="section-signup bg4-pattern p-t-200 p-b-200">
		<form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5" data-aos="fade-down" data-aos-delay="100">
			<span class="txt5 m-10">
				Newsletter Sign up
			</span>

			<div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
				<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address" placeholder="Email Adrress">
				<i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
			</div>

			<!-- Button3 -->
			<button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
				Sign-up
			</button>
		</form>
	</div>


	<?php
		include("assets/includes/footer.php");
	?>