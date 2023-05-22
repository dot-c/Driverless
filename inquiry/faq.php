<?php

	//session_start();


	include('db-connection.php');
	


	$name = $_GET['name'];
	$email = $_GET['email'];
	$phone = $_GET['phone'];
	$subject = $_GET['subject'];
	$message = $_GET['message'];

	if((empty($name)) || (empty($email)) || (empty($phone)) || (empty($message)) || (empty($subject))){
		
		//$_SESSION['contact-error'] = true;
		header("Location:contact.php#contact");
		$_SESSION['error-message'] = "All field are required";
		
	}
	include('functions.php');
	
	if(!isset($_SESSION['user'])){
	
		header('Location:../login.php');
	
		exit();
	}

	include('assets/includes/header.php');
	include('assets/includes/sidebar.php');

	



?>

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(assets/images/bg-title-page-06.jpg);">
		<h2 class="tit6 t-center" data-aos="fade-up" data-aos-delay="100">
			FAQ
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
					FAQ
				</span>
			</div>
	</div>
	
	<!-- Main menu -->
	<section class="section-mainmenu p-t-10 p-b-70 bg4-pattern">
		<div class="container">
		<div class="title-section-ourmenu t-center m-b-50" data-aos="zoom-in">

			<span class="tit2 t-center">
				FAQ
			</span>

			<h3 class="txt5 t-center p-b-10 m-t-2">
				Our Frequently Asked Questions			
			</h3>

			<p class="t-center m-b-22 size3 m-l-r-auto">
				Some of these answers to questions that are asked frequently may help you out.
			</p>
		</div>
			<div class="row">
				<div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22" data-aos="fade-right" data-aos-delay="100">
						<h3 class="tit-mainmenu tit10 p-b-15" >
							Q1
						</h3>

						<!-- Question1 -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt9">
									What are Autonomous Vehicles?
								</a>
							</div>

						</div>

					
					</div>

					<div class="wrap-item-mainmenu p-b-22" data-aos="fade-right" data-aos-delay="100">
						<h3 class="tit-mainmenu tit10 p-b-15">
							Q2
						</h3>

						<!-- Question2 -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt9">
									How do Autonomous Cars work?
								</a>
							</div>

						</div>					
					</div>

					<div class="wrap-item-mainmenu p-b-22" data-aos="fade-right" data-aos-delay="100">
						<h3 class="tit-mainmenu tit10 p-b-15">
							Q3
						</h3>

						<!-- Question3 -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt9">
									Are Autonomous Vehicles safe?
								</a>
							</div>

						</div>					
					</div>

				</div>

				<div class="col-md-10 col-lg-6 p-l-35 p-l-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22" data-aos="fade-left" data-aos-delay="200">
						<h3 class="name-item-mainmenu txt21 p-b-10">
							Answer
						</h3>

						<!-- Answer1 -->
						<div class="item-mainmenu m-b-36">

							<span class="info-item-mainmenu txt10">
								An autonomous car is a vehicle capable of sensing its environment and operating without human involvement
							</span>
						</div>
					
					</div>

					<div class="wrap-item-mainmenu p-b-22" data-aos="fade-left" data-aos-delay="200">
						<h3 class="name-item-mainmenu txt21 p-b-10">
							Answer
						</h3>

						<!-- Answer2 -->
						<div class="item-mainmenu m-b-36">

							<span class="info-item-mainmenu txt10">
								Autonomous cars rely on sensors, acuators, complex algorithms, machine learning systems and powerful processors to execute self-driving software
							</span>
						</div>


					</div>

					<div class="wrap-item-mainmenu p-b-22" data-aos="fade-left" data-aos-delay="200">
						<h3 class="name-item-mainmenu txt21 p-b-10">
							Answer
						</h3>

						<!-- Answer3 -->
						<div class="item-mainmenu m-b-36">

							<span class="info-item-mainmenu txt10">
								According to research, 93% of accidents are due to human error. Therefore, the introduction of self-driving cars somehow minimizes human errors. So we can say they are safer.
							</span>
						</div>


					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Contact form -->
	<section class="section-contact bg1-pattern p-t-5 p-b-18">
		
		<div class="container">
			<h3 class="tit7 t-center p-b-15 p-t-50" data-aos="fade-up" data-aos-delay="100">
				Contact Us
			</h3>
			<p class="t-center size3 m-l-r-auto" data-aos="fade-up" data-aos-delay="100">
				If your question is not on the list above please continue to submit your question so that we can answer it
			</p>


			<form action="faq-handler.php#question" method="POST"class="wrap-form-reservation p-t-20 size22 m-l-r-auto" data-aos="fade-up" data-aos-delay="100">
				
				<div class="row">
					<div class="col-md-4">
						<!-- Name -->
						<span class="txt9">
							Name
						</span>

						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="faq-name" placeholder="Name" value='<?php echo $name;?>'>
						</div>
					</div>

					<div class="col-md-4">
						<!-- Email -->
						<span class="txt9">
							Email
						</span>

						<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="faq-email" placeholder="Email" value='<?php echo $email;?>'>
						</div>
					</div>

					<div class="col-md-4">
						<!-- Phone -->
						<span class="txt9">
							Phone
						</span>

						<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="faq-phone" placeholder="Phone" value='<?php echo $phone;?>'>
						</div>
					</div>

					<div class="col-12">
						
						<!-- Subject -->
						<span class="txt9">
							Subject
						</span>

						<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="faq-subject" placeholder="Subject" value='<?php echo $subject;?>'>
						</div>
						<!-- Message -->
						<span class="txt9">
							Message
						</span>
						<textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="faq-message" placeholder="Type your question here"><?php echo $message;?></textarea>
					</div>
				</div>

				<div class="wrap-btn-booking flex-c-m m-t-13">
					<!-- Button3 -->
					<button type="submit" name="faq-submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
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

	<?php
		include("assets/includes/footer.php");
	?>