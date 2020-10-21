<?php
session_start();
header('Content-Type: text/html; charset=iso-8859-9');
if (! $_SESSION["lang"]) {
    require ("../Langs/tr.php");
} else {
    require ("../Langs/" . $_SESSION["lang"] . ".php");
}
$site = "SITE_URL_HERE";
?>
<html>
<head>
<title>Translater | Turkish - German</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords"
	content="almanca, turkce, turkce game">
<meta name="author" content="Emre Cebeci">
<meta name="description"
	content="Simple Turkish-German or German-Turkish translator. It is only for 9th grade students.">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="icon" href="<?php echo $site; ?>/Assets/Image/favicon.ico"
	type="image/x-icon">
<link rel="stylesheet"
	href="<?php echo $site; ?>/Assets/CSS/default.css">
	<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
	<script src="<?php echo $site; ?>/Assets/JS/loader.js"></script>
</head>
<body>
	<div id="header">
		<h3
			style="padding: 30px; text-align: left; font-size: 30px;"><?php echo $lang["tras"]; ?></h3>
		<span style="padding: 20px;"><?php echo $lang["copy"]; ?></span>
	</div>
	
</div>
</body>
</html>