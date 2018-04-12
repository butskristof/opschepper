<?php $this->layout('template', ['title' => 'Opschepper', 'id' => 'home', 'extracss' => '']) ?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
	<div class="container">
		<a class="navbar-brand logo" href="/">
			Opschepper
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="#" class="nav-link">
						Hoe
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						Missie
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						Over ons
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						Contact
					</a>
				</li>
			</ul>
		</div><!-- /collapse -->
	</div><!-- /container -->
</nav>

<div class="jumbotron" id="jumbo_main">
	<div class="container">
		<h1 class="logo">Opschepper</h1>
		<p><a href="#" class="btn btn-secondary btn-lg">Doe mee</a></p>
	</div><!-- /container -->
</div><!-- /jumbotron -->

<div class="container info_col">
	<h2>Hoe werkt het?</h2>
	<div class="row">
		<div class="col-md-4">
			<h3>Stap 1</h3>
		</div><!-- /col-md-4 -->
		<div class="col-md-4">
			<h3>Stap 2</h3>
		</div><!-- /col-md-4 -->
		<div class="col-md-4">
			<h3>Stap 3</h3>
		</div><!-- /col-md-4 -->
	</div><!-- /row -->
</div><!-- /container -->

