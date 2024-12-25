<?php
session_start();
require_once("component_framework.php");

$db = new SQLite3('db.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
$db->enableExceptions(true);

$query = "SELECT KEY, VALUE FROM PHRASES WHERE LANGUAGE_ISO_CODE = 'EN'";
$results = $db->query($query);

$phrases = array();
while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
    $phrases[$row['KEY']] = $row['VALUE'];
}

$db->close();

echo $phrases['label-slide1-heading'];
exit();
?>

<!doctype html>
<html lang="en" data-bs-theme="<?php echo $_SESSION['theme'];?>">
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
