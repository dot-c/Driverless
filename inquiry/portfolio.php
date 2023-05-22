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
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(assets/images/bg-title-page-02.jpg);">
		
		<h2 class="tit6 t-center" data-aos="fade-up" data-aos-delay="100">
			Portfolio
		</h2>
		
	</section>

	<!-- Breadcrumb -->
	<div class="bread-crumb bo5-b p-t-17 p-b-17">
			<div class="container">
				<a href="index.php" class="txt27">
					Home
				</a>

				<span class="txt29 m-l-10 m-r-10">/</span>

				<span class="txt29">
					Portfolio
				</span>
			</div>
	</div>

	<!-- Portfolio -->
	<div class="section-gallery p-t-118 p-b-100">
		<div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60" data-aos="fade-up" data-aos-delay="100">
			<button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
				All Photos
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".latest">
				Latest
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".suv">
				SUV
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".sedan">
				Sedan
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".electric">
				Electric
			</button>
		</div>

		<div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25" data-aos="fade-up" data-aos-delay="300">
			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom sedan electric">
				<img src="assets/images/photo-gallery-01.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="assets/images/photo-gallery-01.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom suv">
				<img src="assets/images/photo-gallery-02.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="assets/images/photo-gallery-02.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom sedan">
				<img src="assets/images/photo-gallery-03.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="assets/images/photo-gallery-03.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom suv">
				<img src="assets/images/photo-gallery-04.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="assets/images/photo-gallery-04.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom suv">
				<img src="assets/images/photo-gallery-05.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="assets/images/photo-gallery-05.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom latest electric">
				<img src="assets/images/photo-gallery-06.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="assets/images/photo-gallery-06.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom latest">
				<img src="assets/images/photo-gallery-07.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="assets/images/photo-gallery-07.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom latest">
				<img src="assets/images/photo-gallery-08.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="assets/images/photo-gallery-08.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom sedan">
				<img src="assets/images/photo-gallery-09.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="assets/images/photo-gallery-09.jpg" data-lightbox="gallery"></a>
				</div>
			</div>
		</div>

		<div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
			<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
			<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
			<a href="#" class="item-pagination flex-c-m trans-0-4">3</a>
		</div>
	</div>

	<?php
		include("assets/includes/footer.php");
	?>