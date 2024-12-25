<?php
session_start();
require_once("component_framework.php");

$theme=$_SESSION['theme'];
?>

<!doctype html>
<html lang="en" data-bs-theme="<?php echo $theme;?>">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Zaivode Logistics</title>
		<link rel="icon" type="image/png" href="images/logo.png">
		<link rel="stylesheet" href="styles.css">
		<?php require_once("bootstrap_head.php");?>
	</head>
	<body>
		<?php navbar();?>
		<?php carousel();?>
		<?php about_us();?>
		<?php interactive_map();?>
		<?php delimiter();?>
		<?php find_us();?>
		<?php delimiter();?>
		<?php services();?>
		<?php delimiter();?>
		<?php contact_us();?>
		<?php footer();?>

		<?php require_once("bootstrap_body.php");?>
	</body>
</html>
