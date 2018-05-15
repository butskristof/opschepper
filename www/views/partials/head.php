	<!-- META -->
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Opschepper">
	<meta name="author" content="Kristof Buts">

	<!-- TITLE -->
	<title><?=$this->e($title)?></title>

	<!-- FAVICONS -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#e2492f">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<!-- STYLESHEETS AND LIBRARIES -->
	<link rel="stylesheet" href="static/css/normalize.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="static/css/main.css">
	<link rel="stylesheet" href="static/css/custom.css">
	<?php
	if ($this->e($extracss)) { ?>
		<link rel="stylesheet" href="<?=$this->e($extracss)?>">
	<?php }
	?>

	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
