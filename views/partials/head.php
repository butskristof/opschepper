	<!-- META -->
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Opschepper">
	<meta name="author" content="Kristof Buts">

	<!-- TITLE -->
	<title><?=$this->e($title)?></title>

	<!-- FAVICONS -->

	<!-- STYLESHEETS AND LIBRARIES -->
	<link rel="stylesheet" href="static/css/normalize.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Quicksand" rel="stylesheet">
	<link rel="stylesheet" href="static/css/main.css">
	<link rel="stylesheet" href="static/css/custom.css">
	<?php
	if ($this->e($extracss)) { ?>
		<link rel="stylesheet" href="<?=$this->e($extracss)?>">
	<?php }
	?>

	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<link rel="stylesheet" href="static/css/magnific-popup.css">
