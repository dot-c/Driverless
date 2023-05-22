<?php

	session_start();

	ob_start();

	include('db-connection.php');
	include('functions.php');

	
	
	if(!isset($_SESSION['user'])){
		
		header('Location:../login.php');
	
		exit();
	}

	include('assets/includes/header.php');
	include('assets/includes/sidebar.php');

	$query = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
	$result = mysqli_query($connection, $query) or die();
	$row = mysqli_fetch_array($result);
	  
	  

?>

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(assets/images/bg-title-page-04.jpg);">
		<h2 class="tit6 t-center" data-aos="fade-up" data-aos-delay="100">
			Profile
		</h2>
	</section>

	<!-- Breadcrumb -->
	<div class="bg2-pattern bread-crumb bo5-b p-t-17 p-b-17" id="edit">
			<div class="container">
				<a href="index.php" class="txt27">
					Home
				</a>

				<span class="txt29 m-l-10 m-r-10">/</span>

				<span class="txt29">
					Edit Profile
				</span>
			</div>
	</div>

	<!-- Profile -->
	<section class="section-booking bg1-pattern p-t-30 p-b-110">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 p-b-30">
					<div class="t-center" data-aos="fade-right" data-aos-delay="100">
						<span class="tit2 t-center">
							Edit Profile
						</span>

							<h3 class="tit3 t-center m-b-5 m-t-2">
								Update your account info
							</h3>
							<p class="m-b-10">
								By creating an account you agree to our <a href="#" class="txt15">Terms & Privacy</a>
							</p>
					</div>

				</div>
				
				<div class="col-lg-1"></div>

				<div class="col-lg-8 p-b-10">
				<?php
					editUser();							
				?>
				<form action="#edit" method="POST" class="wrap-form-booking" data-aos="fade-left" data-aos-delay="200">
						<div class="row">
							<div class="col-md-6">

								<!-- Firstname -->
								<span class="txt9">
									Firstname
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="firstname" placeholder="Firstname" value='<?php echo $row['firstname'];?>'>
								</div>
								<!-- Username -->
								<span class="txt9">
									Username
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="username" placeholder="Username" value='<?php echo $row['username'];?>'>
								</div>

								<!-- Password -->
								<span class="txt9">
									Password
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="password" placeholder="Password" value='<?php echo $row['password'];?>'>
								</div>

								<!-- Address -->
								<span class="txt9">
									Address
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="address" placeholder="Address" value='<?php echo $row['address'];?>'>
								</div>

							</div>

							<div class="col-md-6">
								<!-- Lastname -->
								<span class="txt9">
									Lastname
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="lastname" placeholder="Lastname" value='<?php echo $row['lastname'];?>'>
								</div>

								<!-- Email -->
								<span class="txt9">
									Email
								</span>

								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email" value='<?php echo $row['email'];?>'>
								</div>


								<!-- Date of Birth-->
								<span class="txt9">
									Date of Birth
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="date" value='<?php echo $row['date'];?>'>
									<i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
								</div>
								
								<!-- Postcode -->
								<span class="txt9">
									Postcode
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-5">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="postcode" placeholder="Lastname" value='<?php echo $row['postcode'];?>' >
								</div>

							</div>
						</div>

						<div class="wrap-btn-booking flex-c-m m-t-3 m-b-5">
							<!-- Button3 -->
							<button type="submit" name="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
								Edit Profile
							</button>
						</div>
						
					</form>
					
				</div>
				
			</div>
		</div>
	</section>

	<?php
		include("assets/includes/footer.php");
		ob_end_flush();
	?>