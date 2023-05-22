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
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(assets/images/bg-title-page-03.jpg);">
			
			<h2 class="tit6 t-center" data-aos="fade-up" data-aos-delay="100">
				About Us
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
					About
				</span>
			</div>
	</div>


	<!-- Our Story -->
	<section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
		
		

		<span class="tit2 t-center" data-aos="fade-up" data-aos-delay="100">
			Autonomous Cars
		</span>

		<h3 class="tit3 t-center m-b-35 m-t-5" data-aos="fade-up" data-aos-delay="200">
			Our Story
		</h3>

		<p class="t-center size32 m-l-r-auto" data-aos="fade-up" data-aos-delay="300">
		We are a company that provides self-driving vehicles. For ease of your travelling, we have a range of cars that best suit your needs. We are an international company that provides autonomous vehicles world-wide, and we are located in almost all continents across the globe. Our team works tirelessly in order to meet our customer needs. Your ease of travel is at our most concern.
		</p>
	</section>


	<!-- Video -->
	<section class="section-video parallax100" style="background-image: url(assets/images/bg-cover-video-02.jpg);">
		<div class="content-video t-center p-t-225 p-b-250">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Our Video
			</h3>

			<div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal" data-target="#modal-video-01">
				<div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
					<i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</section>


	<!-- Technology -->
	<section class="bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<!-- Artificial Intelligence -->
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-delicious t-center" data-aos="fade-right" data-aos-delay="100">
						<span class="tit2 t-center">
							Technology
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							ARTIFICIAL INTELLIGENCE 
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							Our vehicles are powered by the latest Artifiacial Intelligence technology. Machine Learning algorithms that are highly trained are used to sooth your self-driving car experience.
						</p>
					</div>
				</div>

				<div class="col-md-6 p-b-30" data-aos="fade-left" data-aos-delay="200">
					<div class="wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="assets/images/our-story-01.jpg" alt="IMG-OUR">
					</div>
				</div>
			</div>


			<!-- Travel Comfort -->
			<div class="row p-t-170">
				<div class="col-md-6 p-b-30" data-aos="fade-right" data-aos-delay="100">
					<div class="wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="assets/images/our-story-02.jpg" alt="IMG-OUR">
					</div>
				</div>

				<div class="col-md-6 p-t-45 p-b-30" data-aos="fade-left" data-aos-delay="200">
					<div class="wrap-text-romantic t-center">
						<span class="tit2 t-center">
							Travel Comfort
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							AN AUTOMATED EXPERIENCE
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							Automation is our most considered service to make sure your travel experience is comfortable. A computerised system with tailored feedback is is at the heart of our service. 
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Team Title -->
	<div class="parallax0 parallax100" style="background-image: url(assets/images/bg-about-01.jpg);">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158">
			<span class="tit2 p-l-15 p-r-15" data-aos="fade-up" data-aos-delay="100">
				Meet Our
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3" data-aos="fade-up" data-aos-delay="200">
				Team
			</h3>
		</div>

	</div>


	<!-- Team -->
	<section class="section-chef bgwhite p-t-115 p-b-95">
		<div class="container t-center">
			
			<div class="row">
				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30" data-aos="zoom-in" data-aos-delay="100">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="assets/images/avatar-01.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Peter Hart
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								CEO
							</span>

							<p class="t-center">
								The head of the company who over looks all activities of the organisation.	
							</p>

						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30" data-aos="zoom-in" data-aos-delay="200">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="assets/images/avatar-02.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Joyce Bowman
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								Manufacturing Manager
							</span>

							<p class="t-center">
								She deals with all production activities. From assembly of parts to overseeing finished products.
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30" data-aos="zoom-in" data-aos-delay="300">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="assets/images/avatar-01.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Dothan Chimutu
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								Head of AI
							</span>

							<p class="t-center">
								He oversees all services of Artificial Intelligence. Makes sure the company is using the latest AI technology.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
		include("assets/includes/footer.php");
	?>