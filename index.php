<?php
session_start();
require_once("component_framework.php");

$db = new SQLite3('db.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
$db->enableExceptions(true);


$query = "SELECT KEY, VALUE FROM PHRASES WHERE LANGUAGE_ISO_CODE = '{$_SESSION['language']}'";
$results = $db->query($query);

$phrases = array();
while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
	$phrases[$row['KEY']] = $row['VALUE'];
}


$query = "SELECT ISO_CODE, NAME FROM LANGUAGES";
$results = $db->query($query);

$languages = array();
while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
	$languages[] = $row;
}

$db->close();
?>

<!doctype html>
<?php echo "<html lang='{$_SESSION['language']}' data-bs-theme='{$_SESSION['theme']}'>"; ?>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Zaivod Logistics</title>
		<link rel="icon" type="image/png" href="images/tab_logo.png">
		<link rel="stylesheet" href="styles/global_styles.css">
		<?php require_once("bootstrap_head.php");?>
	</head>
	<body>
		<?php 
		$logo = 'images/logo1.jpg';
		$anchors = [
			[
				'phrase' => $phrases['navbar-home'], 
				'href' => '#'
			],
			[
				'phrase' => $phrases['navbar-services'], 
				'href' => '#services',
				'dropdown-anchors' => [
					[
						'phrase' => $phrases['navbar-services-transportation'], 
						'href' => '#services'
					],
					[
						'phrase' => $phrases['navbar-services-vehicle'], 
						'href' => '#services'
					],
				]
			],
			[
				'phrase' => $phrases['navbar-about-us'], 
				'href' => '#about-us'
			],
			[
				'phrase' => $phrases['navbar-find-us'], 
				'href' => '#find-us'
			],
			[
				'phrase' => $phrases['navbar-contacts'],
				'href' => '#contacts'
			]
		];

		navbar(
			$logo,
			$anchors,
			$languages
		);

		$coursel_height_percent = '80';
		$time_auto_next_ms = 2000;
		$slides = [
			[
				'image_src' => 'https://images.alphacoders.com/504/504216.jpg',
				'alt' => 'Image of a truck',
				'heading' => $phrases['label-slide1-heading'],
				'paragraph' => $phrases['label-slide1-paragraph']
			],
			[
				'image_src' => 'https://images.alphacoders.com/504/504216.jpg',
				'alt' => 'Image of a truck',
				'heading' => $phrases['label-slide2-heading'],
				'paragraph' => $phrases['label-slide2-paragraph']
			],
			[
				'image_src' => 'https://images.alphacoders.com/504/504216.jpg',
				'alt' => 'Image of a truck',
				'heading' => $phrases['label-slide3-heading'],
				'paragraph' => $phrases['label-slide3-paragraph']
			]
		];
		$strip_heading = $phrases['strip-heading'];
		carousel(
			$coursel_height_percent, 
			$time_auto_next_ms, 
			$slides,
			$strip_heading
		);

		$heading = '';
		$paragraph = $phrases['heading-top-paragraph-bottom-paragraph'];
		$id = 'about-us';
		heading_top_paragraph_bottom(
			$heading, 
			$paragraph,
			$id
		);

		$x = 500;
		$y = 180;
		$width = 200;
		$height = 220;
		interactive_map(
			$x, 
			$y, 
			$width, 
			$height
		);

		$color = '#cccccc';
		delimiter($color);

		$heading = $phrases['find-us-heading'];
		$paragraph = $phrases['find-us-paragraph'];
		$map_height = 400;
		$id = 'find-us';
		$business_name = 'Zaivod Logistics';
		find_us(
			$heading, 
			$paragraph, 
			$map_height, 
			$business_name,
			$id
		);

		$color = '#cccccc';
		delimiter($color);

		$heading = $phrases['services-heading'];
		$paragraph = $phrases['services-paragraph'];
		$id = 'services';
		heading_top_paragraph_bottom(
			$heading, 
			$paragraph,
			$id

		);

		$cards = [
			[
				'picture' => 'https://images.alphacoders.com/504/504216.jpg',
				'alt' => 'Car',
				'heading' => $phrases['card1-heading'],
				'paragraph' => $phrases['card1-paragraph']
			],
			[
				'picture' => 'https://news-site-za.s3.af-south-1.amazonaws.com/images/2024/09/FordMustang2024_003.jpg',
				'alt' => 'Car',
				'heading' => $phrases['card2-heading'],
				'paragraph' => $phrases['card2-paragraph']
			]
		];
		cards(
			$cards
		);

		$color = '#cccccc';
		delimiter($color);

		$heading = $phrases['form-heading'];
		$paragraph = $phrases['form-paragraph'];
		$inputs = [
			[
				'col-md' => '12',
				'label' => $phrases['form-label-company'],
				'id' => 'company',
				'type' => 'text'
			],
			[
				'col-md' => '6',
				'label' => $phrases['form-label-first-name'],
				'id' => 'first_name',
				'type' => 'text'
			],
			[
				'col-md' => '6',
				'label' => $phrases['form-label-first-name'],
				'id' => 'last_name',
				'type' => 'text'
			],
			[
				'col-md' => '6',
				'label' => $phrases['form-label-email'],
				'id' => 'email',
				'type' => 'email'
			],
			[
				'col-md' => '6',
				'label' => $phrases['form-label-phone'],
				'id' => 'phone',
				'type' => 'text'
			],
			[
				'col-md' => '12',
				'label' => $phrases['form-label-message'],
				'id' => 'message',
				'type' => 'textarea'
			],
		];
		$submit = $phrases['form-submit'];
		form(
			$heading, 
			$paragraph,
			$inputs,
			$submit
		);

		$logo = 'images/logo1.jpg';
		$copyright = '© 2024 Zaivod Logistics, Ltd.';
		$links = [
			[
				'href' => 'https://www.jobs.bg/',
				'image' => 'images/jobs.png',
				'alt' => 'Jobs BG'
			],
			[
				'href' => 'https://www.mobile.bg/',
				'image' => 'images/mobile.jpg',
				'alt' => 'Mobile BG'
			]
		];
		footer(
			$logo,
			$copyright,
			$links
		);
		?>

		<?php require_once("bootstrap_body.php");?>
	</body>
</html>
