<?php
session_start();
require_once('functions.php');


	
# DETECT LANGUAGE FROM THE CLIENT'S IP

# US
#$ip = '52.25.109.230';
# AFG
#$ip = '180.94.77.212';

$ip = getVisIPAddr();
$ipdat = @json_decode(file_get_contents(
    'http://www.geoplugin.net/json.gp?ip=' . $ip));

if(isset($_SESSION['language']) == false)
if($ipdat->geoplugin_countryName == 'Bulgaria')
	$_SESSION['language']='BG';
else if($ipdat->geoplugin_countryName == 'Afghanistan')
	$_SESSION['language']='PS';
else
	$_SESSION['language']='EN';
# echo 'Country Name: ' . $ipdat->geoplugin_countryName . '<br>';
# echo 'City Name: ' . $ipdat->geoplugin_city . '<br>';
# echo 'Continent Name: ' . $ipdat->geoplugin_continentName . '<br>';
# echo 'Latitude: ' . $ipdat->geoplugin_latitude . '<br>';
# echo 'Longitude: ' . $ipdat->geoplugin_longitude . '<br>';
# echo 'Currency Symbol: ' . $ipdat->geoplugin_currencySymbol . '<br>';
# echo 'Currency Code: ' . $ipdat->geoplugin_currencyCode . '<br>';
# echo 'Timezone: ' . $ipdat->geoplugin_timezone;


	
require_once('theme_preset.php');

	
$db = new SQLite3('db.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
$db->enableExceptions(true);

$phrases = get_phrases($db);
$languages = get_languages($db);

$db->close();
?>


	
<!doctype html>
<html lang='<?php echo $_SESSION['language']; ?>' data-bs-theme='<?php echo $_SESSION['theme']; ?>'>
        <head>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <title><?php echo 'Name of the Business';?></title>
                <link rel='icon' type='image/png' href='images/tab_logo.png'>
                <link rel='stylesheet' href='styles/global_styles.css'>
                <?php require_once('bootstrap_head.php');?>
        </head>
        <body>

	
<nav class='navbar fixed-top navbar-expand-lg bg-body-tertiary' style='transition: transform 0.3s;'>
	<div class='container-fluid'>
		<a class='navbar-brand' href='#'>
			<img src='images/logo.jpg' alt='logo' style='height: 44px; border-radius: 10px; border: 1px solid black;'>
		</a>
		<button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarScroll' aria-controls='navbarScroll' aria-expanded='false' aria-label='Toggle navigation'>
			<span class='navbar-toggler-icon'></span>
		</button>
		<div class='collapse navbar-collapse text-center' id='navbarScroll'>
			<ul class='navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll' style='--bs-scroll-height: 100px;'>
	
				<li class='nav-item'>
					<a class='nav-link active' aria-current='page' href='#'><?php echo $phrases['navbar-home']; ?></a>
				</li>
			
				<li class='nav-item dropdown'>
					<a class='nav-link dropdown-toggle' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
						<?php echo $phrases['navbar-services'];?>
					</a>
					<ul class='dropdown-menu'>
			
						<li><a class='dropdown-item' href='#services'>
							<?php echo $phrases['navbar-services-transportation']; ?>
						</a></li>
				
						<li><a class='dropdown-item' href='#services'>
							<?php echo $phrases['navbar-services-vehicle']; ?>
						</a></li>
				
					</ul>
				</li>
			
				<li class='nav-item'>
					<a class='nav-link active' aria-current='page' href='#about-us'><?php echo $phrases['navbar-about-us']; ?></a>
				</li>
			
				<li class='nav-item'>
					<a class='nav-link active' aria-current='page' href='#find-us'><?php echo $phrases['navbar-find-us']; ?></a>
				</li>
			
				<li class='nav-item'>
					<a class='nav-link active' aria-current='page' href='#contacts'><?php echo $phrases['navbar-contacts']; ?></a>
				</li>
			
				<li class='nav-item dropdown me-5'>
					<a class='nav-link dropdown-toggle' href='change_language.php?language=<?php echo $_SESSION['language']; ?>' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
						<img src='images/languages/<?php echo $_SESSION['language']; ?>.jpg' alt='<?php echo $_SESSION['language']; ?>' style='height: 22px; width: 22px; border-radius: 10px;'>
					</a>
					<ul class='dropdown-menu'>
	
						<li><a class='dropdown-item' href='change_language.php?language=EN'>
							<img src='images/languages/EN.jpg' alt='English' style='height: 22px; width: 22px; border-radius: 10px;'>
							English
						</a></li>
		
						<li><a class='dropdown-item' href='change_language.php?language=BG'>
							<img src='images/languages/BG.jpg' alt='Български' style='height: 22px; width: 22px; border-radius: 10px;'>
							Български
						</a></li>
		
						<li><a class='dropdown-item' href='change_language.php?language=PS'>
							<img src='images/languages/PS.jpg' alt='ﭖښﺕﻭ' style='height: 22px; width: 22px; border-radius: 10px;'>
							ﭖښﺕﻭ
						</a></li>
		
					</ul>
				</li>
	
				<li class='nav-item' style='background-color: #cccccc; border-radius: 10px; width: fit-content; padding: 0px 9px 0px 9px;'>
					<a class='nav-link' href='change_theme.php'>
						<img src='https://static-00.iconduck.com/assets.00/dark-theme-icon-2048x2048-ymrfkxsy.png' alt='Change Theme' style='width: 22px; height: 22px;'>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<script type='text/javascript' src='scripts/hide_navbar.js'></script>
	
<div id='carousel' class='carousel carousel-dark slide'>
	<div class='carousel-indicators'>
	
		<button type='button' data-bs-target='#carousel' data-bs-slide-to='0' class=active aria-current='true' aria-label='Slide 0'></button>
		
		<button type='button' data-bs-target='#carousel' data-bs-slide-to='1'  aria-current='true' aria-label='Slide 1'></button>
		
		<button type='button' data-bs-target='#carousel' data-bs-slide-to='2'  aria-current='true' aria-label='Slide 2'></button>
		
	</div>
	<div class='carousel-inner'>
	
		<div class='carousel-item active' data-bs-interval='2000'>
			<div style='height: 80vh; overflow: hidden;'>
				<img src='https://images.alphacoders.com/504/504216.jpg' class='d-block w-100' style='height: 100%; width: 100%; object-fit: cover;' alt='Image of a truck'>
			</div>
			<div class='carousel-caption d-none d-md-block ' style='background-color: white; opacity: 0.8; width: fit-content; margin: 0 auto; padding: 5px; border-radius: 10px;'>
				<h5><?php echo $phrases['label-slide1-heading']; ?></h5>
				<p><?php echo $phrases['label-slide1-paragraph']; ?></p>
			</div>
		</div>
		
		<div class='carousel-item ' data-bs-interval='2000'>
			<div style='height: 80vh; overflow: hidden;'>
				<img src='https://images.alphacoders.com/504/504216.jpg' class='d-block w-100' style='height: 100%; width: 100%; object-fit: cover;' alt='Image of a truck'>
			</div>
			<div class='carousel-caption d-none d-md-block ' style='background-color: white; opacity: 0.8; width: fit-content; margin: 0 auto; padding: 5px; border-radius: 10px;'>
				<h5><?php echo $phrases['label-slide2-heading']; ?></h5>
				<p><?php echo $phrases['label-slide2-paragraph']; ?></p>
			</div>
		</div>
		
		<div class='carousel-item ' data-bs-interval='2000'>
			<div style='height: 80vh; overflow: hidden;'>
				<img src='https://images.alphacoders.com/504/504216.jpg' class='d-block w-100' style='height: 100%; width: 100%; object-fit: cover;' alt='Image of a truck'>
			</div>
			<div class='carousel-caption d-none d-md-block ' style='background-color: white; opacity: 0.8; width: fit-content; margin: 0 auto; padding: 5px; border-radius: 10px;'>
				<h5><?php echo $phrases['label-slide3-heading']; ?></h5>
				<p><?php echo $phrases['label-slide3-paragraph']; ?></p>
			</div>
		</div>
		
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
	
<div class='container' id='about-us' style='height: 20vh; display: flex; justify-content: center; align-items: center;'>
        <div class='row justify-content-center text-center'>
		<h1 class='col-12'><?php echo $phrases['strip-heading']; ?></h1>
        </div>
</div>
	
<div class='container' id='about-us'>
	<div class='row justify-content-center'>
		<h1 class='col-10 text-center'><?php echo $phrases['empty']; ?></h1>
	</div>
	<div class='row justify-content-center'>
		<p class='col-10 text-center'><?php echo $phrases['heading-top-paragraph-bottom-paragraph']; ?></p>
	</div>
</div>
	
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
	load_map(500, 180, 200, 220);
</script>
	
<div class='mt-5 mb-5' style='background-color: #cccccc; height: 10px;'></div>
	
<div class='container' id='find-us'>
	<div class='row justify-content-center text-center m-2'>
		<h1 class='col-md-10'><?php echo $phrases['find-us-heading']; ?></h1>
	</div>
	<div class='row justify-content-center'>
		<p class='col-md-3'><?php echo $phrases['find-us-paragraph']; ?></p>
		<div class='col-md-7'>
			<iframe 
				width='100%' 
				height='400' 
				frameborder='0' 
				scrolling='no' 
				marginheight='0' 
				marginwidth='0' 
				id='gmap_canvas' 
				src='https://maps.google.com/maps?
					hl=en&amp;
					q=%20+(Name+of+the+Business)&amp;
					t=k&amp;z=3&amp;ie=UTF8&amp;
					iwloc=B&amp;
					output=embed'>
			</iframe> 
		</div>
	</div>
</div>
	
<div class='mt-5 mb-5' style='background-color: #cccccc; height: 10px;'></div>
	
<div class='container' id='services'>
	<div class='row justify-content-center'>
		<h1 class='col-10 text-center'><?php echo $phrases['services-heading']; ?></h1>
	</div>
	<div class='row justify-content-center'>
		<p class='col-10 text-center'><?php echo $phrases['services-paragraph']; ?></p>
	</div>
</div>
	
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

		<div class='col-md-5 p-0 m-3 card'>
			<div style='width: 100%; height: 60%; overflow: hidden; border-radius: 10px 10px 0px 0px;'>
				<img src='https://images.alphacoders.com/504/504216.jpg' class='d-block w-100' alt='Car'>
			</div>
			<div class='row' style='width: 100%; height: 40%; overflow-x: hidden; overflow-y: auto; display: flex; justify-content: center; align-items: center;'>
				<h4 class='text-center' style='color: black;'>
					<?php echo $phrases['card1-heading']; ?>
				</h4>
				<p class='text-center' style='color: black;'>
					<?php echo $phrases['card1-paragraph']; ?>
				</p>
			</div>
		</div>
		
		<div class='col-md-5 p-0 m-3 card'>
			<div style='width: 100%; height: 60%; overflow: hidden; border-radius: 10px 10px 0px 0px;'>
				<img src='https://news-site-za.s3.af-south-1.amazonaws.com/images/2024/09/FordMustang2024_003.jpg' class='d-block w-100' alt='Car'>
			</div>
			<div class='row' style='width: 100%; height: 40%; overflow-x: hidden; overflow-y: auto; display: flex; justify-content: center; align-items: center;'>
				<h4 class='text-center' style='color: black;'>
					<?php echo $phrases['card2-heading']; ?>
				</h4>
				<p class='text-center' style='color: black;'>
					<?php echo $phrases['card2-paragraph']; ?>
				</p>
			</div>
		</div>
		
	</div>
</div>
	
<div class='mt-5 mb-5' style='background-color: #cccccc; height: 10px;'></div>
	
<div class='container p-5' style='border-radius: 10px; border: 1px solid #cccccc;' id='contacts'>
	<div class='row justify-content-center'>
		<h1 class='text-center'><?php echo $phrases['form-heading']; ?></h1>
		<p class='text-center mt-3'><?php echo $phrases['form-paragraph']; ?></p>
	</div>
	<div class='row justify-content-center'>
		<form class='row g-3' action='send_message.php' method='POST'>
	
			<div class='col-md-12'>
				<label for='company' class='form-label'><?php echo $phrases['form-label-company']; ?></label>
		
				<input type='text' class='form-control' name='company' id='company'>
			
			</div>
		
			<div class='col-md-6'>
				<label for='first_name' class='form-label'><?php echo $phrases['form-label-first-name']; ?></label>
		
				<input type='text' class='form-control' name='first_name' id='first_name'>
			
			</div>
		
			<div class='col-md-6'>
				<label for='last_name' class='form-label'><?php echo $phrases['form-label-last-name']; ?></label>
		
				<input type='text' class='form-control' name='last_name' id='last_name'>
			
			</div>
		
			<div class='col-md-6'>
				<label for='email' class='form-label'><?php echo $phrases['form-label-email']; ?></label>
		
				<input type='email' class='form-control' name='email' id='email'>
			
			</div>
		
			<div class='col-md-6'>
				<label for='phone' class='form-label'><?php echo $phrases['form-label-phone']; ?></label>
		
				<input type='text' class='form-control' name='phone' id='phone'>
			
			</div>
		
			<div class='col-md-12'>
				<label for='message' class='form-label'><?php echo $phrases['form-label-message']; ?></label>
		
				<textarea class='form-control' id='message' name='message' rows='3'></textarea>
			
			</div>
		
			<div class='col-12'>
				<button type='submit' class='btn col-12' style='background-color: #cccccc; color: black;'><?php echo $phrases['form-submit']; ?></button>
			</div>
		</form>
	</div>
</div>
	
<br>
<br>
<br>
<br>
<div class='container'>
	<footer class='d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top'>
		<div class='col-md-4 d-flex align-items-center'>
			<a href='#' class='mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1'>
				<img src='images/logo.jpg' alt='logo' style='height: 44px; border-radius: 10px; border: 1px solid black;'>
			</a>
			<span class='mb-3 mb-md-0 text-body-secondary'><?php echo $phrases['footer-copyright']; ?></span>
		</div>

		<ul class='nav col-md-4 justify-content-end list-unstyled d-flex'>
	
			<li class='ms-3'><a class='text-body-secondary' href='https://www.jobs.bg/' target='_blank'>
				<img src='images/jobs.png' alt='Jobs BG' class='rounded' style='height: 24px; border: 1px solid black;'>
			</a></li>
		
			<li class='ms-3'><a class='text-body-secondary' href='https://www.mobile.bg/' target='_blank'>
				<img src='images/mobile.jpg' alt='Mobile BG' class='rounded' style='height: 24px; border: 1px solid black;'>
			</a></li>
		
		</ul>
	</footer>
</div>
	

                <?php require_once('bootstrap_body.php');?>
        </body>
</html>
	