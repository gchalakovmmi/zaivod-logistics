<?php

if(isset($_SESSION['theme'])==false) 
	$_SESSION['theme']='light';
else
if($_SESSION['theme'] == 'dark')
        $_SESSION['opposite_theme']='light';
else
        $_SESSION['opposite_theme']='dark';

if(isset($_SESSION['language'])==false) 
	$_SESSION['language']='BG';

function navbar($logo, $anchors, $languages) {
	echo "
<nav class='navbar fixed-top navbar-expand-lg bg-body-tertiary' style='transition: transform 0.3s;'>
	<div class='container-fluid'>
		<a class='navbar-brand' href='#'>
			<img src='$logo' alt='logo' style='height: 44px; border-radius: 10px; border: 1px solid black;'>
		</a>
		<button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarScroll' aria-controls='navbarScroll' aria-expanded='false' aria-label='Toggle navigation'>
			<span class='navbar-toggler-icon'></span>
		</button>
		<div class='collapse navbar-collapse text-center' id='navbarScroll'>
			<ul class='navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll' style='--bs-scroll-height: 100px;'>
	";

	# Anchors
	foreach($anchors as $anchor){
		if(isset($anchor['dropdown-anchors']) == false){
			echo "
				<li class='nav-item'>
					<a class='nav-link active' aria-current='page' href='{$anchor['href']}'>{$anchor['phrase']}</a>
				</li>
			";
		}
		else {
			echo "
				<li class='nav-item dropdown'>
					<a class='nav-link dropdown-toggle' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
						{$anchor['phrase']}
					</a>
					<ul class='dropdown-menu'>
			";
			foreach($anchor['dropdown-anchors'] as $subanchor){
				echo"
						<li><a class='dropdown-item' href='{$subanchor['href']}'>
							{$subanchor['phrase']}
						</a></li>
				";
			}
			echo "
					</ul>
				</li>
			";
		}
	}

	# Languages
	echo "
				<li class='nav-item dropdown me-5'>
					<a class='nav-link dropdown-toggle' href='change_language.php?language={$_SESSION['language']}' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
						<img src='images/languages/{$_SESSION['language']}.jpg' alt='{$_SESSION['language']}' style='height: 22px; width: 22px; border-radius: 10px;'>
					</a>
					<ul class='dropdown-menu'>
	";

	foreach($languages as $language){
		echo "
						<li><a class='dropdown-item' href='change_language.php?language={$language['ISO_CODE']}'>
							<img src='images/languages/{$language['ISO_CODE']}.jpg' alt='{$language['NAME']}' style='height: 22px; width: 22px; border-radius: 10px;'>
							{$language['NAME']}
						</a></li>
		";
	}

	echo "
					</ul>
				</li>
	";

	# Theme
	echo "
				<li class='nav-item' style='background-color: #cccccc; border-radius: 10px; width: fit-content; padding: 0px 9px 0px 9px;'>
					<a class='nav-link' href='theme.php'>
						<img src='https://static-00.iconduck.com/assets.00/dark-theme-icon-2048x2048-ymrfkxsy.png' alt='Change Theme' style='width: 22px; height: 22px;'>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<script type='text/javascript' src='scripts/hide_navbar.js'></script>
	";
}

function carousel($coursel_height_percent, $time_auto_next_ms, $slides,  $strip_heading) {
	echo "
<div id='carousel' class='carousel carousel-dark slide'>
	<div class='carousel-indicators'>
	";


	$slide_number = 0;
	foreach($slides as $slide){
		if($slide_number == 0) $class = 'class=active';
		else $class = '';
		echo "
		<button type='button' data-bs-target='#carousel' data-bs-slide-to='$slide_number' $class aria-current='true' aria-label='Slide $slide_number'></button>
		";
		$slide_number++;
	}
	echo "
	</div>
	<div class='carousel-inner'>
	";


	$slide_number = 0;
	$coursel_height = $coursel_height_percent . 'vh';
	foreach($slides as $slide){
		if($slide_number == 0) $active = 'active';
		else $active = '';
		echo "
		<div class='carousel-item $active' data-bs-interval='$time_auto_next_ms'>
			<div style='height: $coursel_height; overflow: hidden;'>
				<img src='{$slide['image_src']}' class='d-block w-100' style='height: 100%; width: 100%; object-fit: cover;' alt='{$slide['alt']}'>
			</div>
			<div class='carousel-caption d-none d-md-block ' style='background-color: white; opacity: 0.8; width: fit-content; margin: 0 auto; padding: 5px; border-radius: 10px;'>
				<h5>{$slide['heading']}</h5>
				<p>{$slide['paragraph']}</p>
			</div>
		</div>
		";
		$slide_number++;
	}
	echo "
	</div>
	<button class='carousel-control-prev' type='button' data-bs-target='#carousel' data-bs-slide='prev'>
		<div style='background-color: white; padding: 10px; padding-top: 15px; border-radius: 10px;'>
			<span class='carousel-control-prev-icon' aria-hidden='true'></span>
			<span class='visually-hidden'>Previous</span>
		</div>
	</button>
	<button class='carousel-control-next' type='button' data-bs-target='#carousel' data-bs-slide='next'>
		<div style='background-color: white; padding: 10px; padding-top: 15px; border-radius: 10px;'>
			<span class='carousel-control-next-icon' aria-hidden='true'></span>
			<span class='visually-hidden'>Next</span>
		</div>
	</button>
</div>
	";

	# Strip
	$strip_height_percent = 100 - $coursel_height_percent;
	$strip_height = $strip_height_percent . 'vh';
	echo "
<div class='container' id='about-us' style='height: $strip_height; display: flex; justify-content: center; align-items: center;'>
        <div class='row justify-content-center text-center'>
                <h1 class='col-12'>$strip_heading</h1>
        </div>
</div>
	";
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

function heading_top_paragraph_bottom($heading, $paragraph, $id) {
	echo "
<div class='container' id='$id'>
	<div class='row justify-content-center'>
		<h1 class='col-10 text-center'>$heading</h1>
	</div>
	<div class='row justify-content-center'>
		<p class='col-10 text-center'>$paragraph</p>
	</div>
</div>
	";
}

function interactive_map($x, $y, $width, $height) {
	echo "
<div class='container'>
	<div class='row justify-content-center mt-5'>
		<div class='col-10 p-0' style='border-radius: 10px; background-color: lightblue;'>
			<div style='border: 2px black solid; border-radius: 10px;'>
				<div class='d-block w-100' style='height: 100%; width: 100%;' id='svg-container'></div>
			</div>
		</div>
	</div>
</div>

<script type='text/javascript' src='scripts/map.js'></script>
<script>
	load_map($x, $y, $width, $height);
</script>
	";
}

function find_us($heading, $paragraph, $map_height, $business_name, $id) {
	$business_name = urlencode($business_name);
	echo "
<div class='container' id='$id'>
	<div class='row justify-content-center text-center m-2'>
		<h1 class='col-md-10'>$heading</h1>
	</div>
	<div class='row justify-content-center'>
		<p class='col-md-3'>$paragraph</p>
		<div class='col-md-7'>
			<iframe 
				width='100%' 
				height='$map_height' 
				frameborder='0' 
				scrolling='no' 
				marginheight='0' 
				marginwidth='0' 
				id='gmap_canvas' 
				src='https://maps.google.com/maps?
					hl=en&amp;
					q=%20+($business_name)&amp;
					t=k&amp;z=3&amp;ie=UTF8&amp;
					iwloc=B&amp;
					output=embed'>
			</iframe> 
		</div>
	</div>
</div>
	";
}

function delimiter($color) {
	echo "
<div class='mt-5 mb-5' style='background-color: $color; height: 10px;'></div>
	";
}

function cards($cards) {
	echo "
<style>
/* Add this CSS code to your stylesheet */

.card {
  height: 400px;
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
<div class='container' id='services'>
	<div class='row justify-content-center'>
";
	foreach($cards as $card){
		echo "
		<div class='col-md-5 p-0 m-3 card'>
			<div style='width: 100%; height: 60%; overflow: hidden; border-radius: 10px 10px 0px 0px;'>
				<img src='{$card['picture']}' class='d-block w-100' alt='{$card['alt']}'>
			</div>
			<div class='row' style='width: 100%; height: 40%; overflow-x: hidden; overflow-y: auto; display: flex; justify-content: center; align-items: center;'>
				<h4 class='text-center' style='color: black;'>
					{$card['heading']}
				</h4>
				<p class='text-center' style='color: black;'>
					{$card['paragraph']}
				</p>
			</div>
		</div>
		";
	}
	echo "
	</div>
</div>
	";
}

function form($heading, $paragraph, $inputs, $submit) {
	echo "
<div class='container p-5' style='border-radius: 10px; border: 1px solid #cccccc;' id='contacts'>
	<div class='row justify-content-center'>
		<h1 class='text-center'>$heading</h1>
		<p class='text-center mt-3'>$paragraph</p>
	</div>
	<div class='row justify-content-center'>
		<form class='row g-3'>
	";
	foreach($inputs as $input){
		echo "
			<div class='col-md-{$input['col-md']}'>
				<label for='{$input['id']}' class='form-label'>{$input['label']}</label>
		";
		if($input['type'] != 'textarea'){
			echo "
				<input type='{$input['type']}' class='form-control' id='{$input['id']}'>
			";
		}
		else {
			echo "
				<textarea class='form-control' id='{$input['id']}' rows='3'></textarea>
			";
		}
		echo "
			</div>
		";
	}

	echo "
			<div class='col-12'>
				<button type='submit' class='btn col-12' style='background-color: #cccccc; color: black;'>$submit</button>
			</div>
		</form>
	</div>
</div>
	";
}

function footer($logo, $copyright, $links) {
	echo "
<br>
<br>
<br>
<br>
<div class='container'>
	<footer class='d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top'>
		<div class='col-md-4 d-flex align-items-center'>
			<a href='#' class='mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1'>
				<img src='$logo' alt='logo' style='height: 44px; border-radius: 10px; border: 1px solid black;'>
			</a>
			<span class='mb-3 mb-md-0 text-body-secondary'>$copyright</span>
		</div>

		<ul class='nav col-md-4 justify-content-end list-unstyled d-flex'>
	";

	foreach($links as $link) {
		echo "
			<li class='ms-3'><a class='text-body-secondary' href='{$link['href']}' target='_blank'>
				<img src='{$link['image']}' alt='{$link['alt']}' class='rounded' style='height: 24px; border: 1px solid black;'>
			</a></li>
		";
	}

	echo "
		</ul>
	</footer>
</div>
	";
}
