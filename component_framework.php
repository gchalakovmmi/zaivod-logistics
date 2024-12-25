<?php

if(isset($_GET['theme']) and $_GET['theme'] == 'dark') {
        $_SESSION['theme']='dark';
        $_SESSION['opposite_theme']='light';
}
else {
        $_SESSION['theme']='light';
        $_SESSION['opposite_theme']='dark';
}

function navbar() {
	echo '
<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary" style="transition: transform 0.3s;">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<img src="images/logo1.jpg" alt="logo" style="height: 44px; border-radius: 10px; border: 1px solid black;">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarScroll">
			<ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Services
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#services">
							Transportation of Goods
						</a></li>
						<li><a class="dropdown-item" href="#services">
							Vehicle Trading 
						</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about-us">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contacts">Contacts</a>
				</li>
				<li class="nav-item dropdown me-5">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<img src="https://www.countryflags.com/wp-content/uploads/united-kingdom-flag-png-xl.png" alt="logo" style="height: 22px; width: 22px; border-radius: 10px;">
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSStInjoij0GtXE9qsDWIVjefpd6s9NNdi7mw&s" alt="logo" style="height: 22px; width: 22px; border-radius: 10px;">
							افغاني
						</a></li>
						<li><a class="dropdown-item" href="#">
							<img src="https://www.countryflags.com/wp-content/uploads/united-kingdom-flag-png-xl.png" alt="logo" style="height: 22px; width: 22px; border-radius: 10px;">
							English
						</a></li>
						<li><a class="dropdown-item" href="#">
							<img src="https://www.countryflags.com/wp-content/uploads/bulgaria-flag-png-xl.png" alt="logo" style="height: 22px; width: 22px; border-radius: 10px;">
							български
						</a></li>
					</ul>
				</li>
				<li class="nav-item" style="background-color: #cccccc; border-radius: 10px;">
					<a class="nav-link" href="index.php?theme=' . $_SESSION['opposite_theme'] . '">
						<img src="https://static-00.iconduck.com/assets.00/dark-theme-icon-2048x2048-ymrfkxsy.png" alt="Change Theme" style="width: 22px; height: 22px;">
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<script type="text/javascript" src="scripts/hide_navbar.js"></script>
	';
}

function carousel() {
	$coursel_height_vh=80;
	echo '
<div id="carouselExampleDark" class="carousel carousel-dark slide">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active" data-bs-interval="2000">
			<div style="height: ' . $coursel_height_vh . 'vh; overflow: hidden;">
				<img src="https://images.alphacoders.com/504/504216.jpg" class="d-block w-100" style="height: 100%; width: 100%; object-fit: cover;" alt="...">
			</div>
			<div class="carousel-caption d-none d-md-block " style="background-color: white; opacity: 0.8; width: fit-content; margin: 0 auto; padding: 5px; border-radius: 10px;">
				<h5>Helping you grow</h5>
				<p>Some representative placeholder content for the first slide.</p>
			</div>
		</div>
		<div class="carousel-item" data-bs-interval="2000">
			<div style="height: ' . $coursel_height_vh . 'vh; overflow: hidden;">
				<img src="https://images.alphacoders.com/504/504216.jpg" class="d-block w-100" style="height: 100%; width: 100%; object-fit: cover;" alt="...">
			</div>
			<div class="carousel-caption d-none d-md-block " style="background-color: white; opacity: 0.8; width: fit-content; margin: 0 auto; padding: 5px; border-radius: 10px;">
				<h5>First slide label</h5>
				<p>Some representative placeholder content for the first slide.</p>
			</div>
		</div>
		<div class="carousel-item">
			<div style="height: ' . $coursel_height_vh . 'vh; overflow: hidden;">
				<img src="https://images.alphacoders.com/504/504216.jpg" class="d-block w-100" style="height: 100%; width: 100%; object-fit: cover;" alt="...">
			</div>
			<div class="carousel-caption d-none d-md-block " style="background-color: white; opacity: 0.8; width: fit-content; margin: 0 auto; padding: 5px; border-radius: 10px;">
				<h5>First slide label</h5>
				<p>Some representative placeholder content for the first slide.</p>
			</div>
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
		<div style="background-color: white; padding: 10px; padding-top: 15px; border-radius: 10px;">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</div>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
		<div style="background-color: white; padding: 10px; padding-top: 15px; border-radius: 10px;">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</div>
	</button>
</div>
	';
}

function partners() {
	echo '
Unfinished...
<div class="container">
	<div class="row justify-content-center" style="height: 20vh;">
		<div class="col-2 h-100" style="background-color: grey; border-radius: 10px; margin-right: 10px;"></div>
		<div class="col-2 h-100" style="background-color: grey; border-radius: 10px; margin-right: 10px;"></div>
		<div class="col-2 h-100" style="background-color: grey; border-radius: 10px; margin-right: 10px;"></div>
		<div class="col-2 h-100" style="background-color: grey; border-radius: 10px; margin-right: 10px;"></div>
		<div class="col-2 h-100" style="background-color: grey; border-radius: 10px; margin-right: 10px;"></div>
	</div>
</div>
	';
}

function about_us() {
	echo '
<div class="container" id="about-us" style="height: 20vh; display: flex; justify-content: center; align-items: center;">
        <div class="row justify-content-center text-center">
                <h1 class="col-12">Your Partner in Global Trade</h1>
        </div>
</div>
<div class="container">
	<div class="row justify-content-center">
		<p class="col-10 text-center">Zaivod Logistics is a transportation company that specializes in hauling a wide range of goods across Europe and Asia. With our extensive network and expert knowledge, we provide reliable, flexible, and cost-effective solutions that help our clients achieve their goals and grow their businesses. </p>
	</div>
</div>
	';
}

function interactive_map() {
	echo '
<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-10 p-0" style="border-radius: 10px; background-color: #00eaff;">
			<div style="border: 2px black solid; border-radius: 10px;">
				<div class="d-block w-100" style="height: 100%; width: 100%;" id="svg-container"></div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="scripts/map.js"></script>
	';
}

function find_us() {
	echo '
<div class="container" id="services">
	<div class="row justify-content-center text-center m-2">
		<h1 class="col-md-10">Where Can You Find Us?</h1>
	</div>
	<div class="row justify-content-center">
		<p class="col-md-3">
			We are situated in the beautiful village named Voivodinovo. Here you can find our base ... .
		</p>
		<div class="col-md-7">
			<iframe 
				width="100%" 
				height="400" 
				frameborder="0" 
				scrolling="no" 
				marginheight="0" 
				marginwidth="0" 
				id="gmap_canvas" 
				src="https://maps.google.com/maps?width=750&amp;height=400&amp;hl=en&amp;q=%20Voivodinovo+(Find%20us%20here)&amp;t=k&amp;z=3&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
			</iframe> 
		</div>
	</div>
</div>
	';
}

function delimiter() {
	echo '
<div class="mt-5 mb-5" style="background-color: #cccccc; height: 10px;"></div>
	';
}

function services() {
	echo '
<style>
/* Add this CSS code to your stylesheet */

.card {
  height: 300px;
  background-color: #cccccc;
  border-radius: 10px;
  border: 1px solid black;
  transition: transform 0.2s ease-in-out;
}

.card img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  border: 1px solid black;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
}
</style>
<div class="container" id="services">
	<div class="row justify-content-center text-center m-2">
		<h1 class="col-10">What We Offer</h1>
	</div>
	<div class="row justify-content-center">
		<p class="col-10 text-center">
			At Zaivod Logistics, we provide comprehensive solutions for all your logistics needs. Our services include the reliable transportation of goods, ensuring your products reach their destination safely and on time. Additionally, we specialize in vehicle trading, offering a wide range of options for those looking to buy or sell vehicles. Whether you\'re a business looking to transport goods or an individual seeking a new vehicle, we\'ve got you covered.
		</p>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-5 p-0 m-3 card">
			<div style="width: 100%; height: 75%; overflow: hidden; border-radius: 10px 10px 0px 0px;">
				<img src="https://images.alphacoders.com/504/504216.jpg" class="d-block w-100" alt="...">
			</div>
			<div style="width: 100%; height: 25%; overflow-x: hidden; overflow-y: auto; display: flex; justify-content: center; align-items: center;">
				<h4 class="text-center" style="color: black;">
					Vehicle Trading
				</h4>
			</div>
		</div>
		<div class="col-md-5 p-0 m-3 card">
			<div style="width: 100%; height: 75%; overflow: hidden; border-radius: 10px 10px 0px 0px;">
				<img src="https://news-site-za.s3.af-south-1.amazonaws.com/images/2024/09/FordMustang2024_003.jpg" class="d-block w-100" alt="...">
			</div>
			<div style="width: 100%; height: 25%; overflow-x: hidden; overflow-y: auto; display: flex; justify-content: center; align-items: center;">
				<h4 class="text-center" style="color: black;">
					Vehicle Trading
				</h4>
			</div>
		</div>
	</div>
</div>
	';
}

function contact_us() {
	echo '
<div class="container p-5" style="border-radius: 10px; border: 1px solid #cccccc;" id="contacts">
	<div class="row justify-content-center">
		<h1 class="text-center">Get in touch with Us</h1>
		<p class="text-center mt-3">We would love to answer all your questions regarding our future work together. You can write to us at <b>info@zaivodelogistics.com</b> or directly in the form below.</p>
	</div>
	<div class="row justify-content-center">
		<form class="row g-3">
			<div class="col-md-12">
				<label for="companyName" class="form-label">Company Name</label>
				<input type="text" class="form-control" id="companyName">
			</div>
			<div class="col-md-6">
				<label for="firstName" class="form-label">First Name</label>
				<input type="text" class="form-control" id="firstName">
			</div>
			<div class="col-md-6">
				<label for="lastName" class="form-label">Last Name</label>
				<input type="text" class="form-control" id="lastName">
			</div>
			<div class="col-md-6">
				<label for="inputEmail4" class="form-label">Email</label>
				<input type="email" class="form-control" id="inputEmail4">
			</div>
			<div class="col-md-6">
				<label for="phone" class="form-label">Phone</label>
				<input type="text" class="form-control" id="phone">
			</div>
			<div class="mb-12">
				<label for="message" class="form-label">Message</label>
				<textarea class="form-control" id="message" rows="3"></textarea>
			</div>
			<div class="col-12">
				<button type="submit" class="btn col-12" style="background-color: #cccccc;">Send</button>
			</div>
		</form>
	</div>
</div>
	';
}

function footer() {
	echo '
<br>
<br>
<br>
<br>
<div class="container">
	<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
		<div class="col-md-4 d-flex align-items-center">
			<a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
				<img src="images/logo1.jpg" alt="logo" style="height: 44px; border-radius: 10px; border: 1px solid black;">
			</a>
			<span class="mb-3 mb-md-0 text-body-secondary">© 2024 Zaivod Logistics, Ltd.</span>
		</div>

		<ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
			<li class="ms-3"><a class="text-body-secondary" href="#">
				<img src="images/jobs.png" alt="JobsBG" class="rounded" style="height: 24px; border: 1px solid black;">
			</a></li>
			<li class="ms-3"><a class="text-body-secondary" href="#">
				<img src="images/mobile.jpg" alt="JobsBG" class="rounded" style="height: 24px; border: 1px solid black;">
			</a></li>
		</ul>
	</footer>
</div>
	';
}
