<?php $this->layout('template', ['title' => 'Opschepper', 'id' => 'home', 'extracss' => 'static/css/home.css']) ?>

<!-- NAVIGATION -->

<nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
	<div class="container">
		<a href="#" class="navbar-brand logo">
			Opschepper
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="#hoe" class="nav-link">
						Hoe
					</a>
				</li>
				<li class="nav-item">
					<a href="#missie" class="nav-link">
						Missie
					</a>
				</li>
				<li class="nav-item">
					<a href="#overons" class="nav-link">
						Over ons
					</a>
				</li>
				<li class="nav-item">
					<a href="#contact" class="nav-link">
						Contact
					</a>
				</li>
			</ul>
		</div><!-- /collapse navbar-collapse -->

	</div><!-- /container -->
</nav>

<div class="jumbotron" id="jumbo_main">
	<div class="container">
		<h1 class="logo">
			Opschepper
		</h1>
		<p><a href="#" class="btn btn-lg" data-toggle="modal" data-target="#applyModal">Doe mee</a></p>
	</div><!-- /container -->
</div><!-- /jumbotron -->

<div class="container">

	<!-- HOE -->

    <a class="anchor" id="hoe"></a>
	<section class="row info_row" id="hoe_section">

		<h2>Hoe werkt het?</h2>

		<div class="row">

			<div class="col-md-4">

				<img src="static/img/icons/icon1.svg" alt="Voedselpakket" class="img-fluid">
				<h3>Schrijf je in</h3>
				<p>om te koken of om te eten</p>

			</div><!-- /col-md-4 -->
			<div class="col-md-4">

				<img src="static/img/icons/icon2.svg" alt="Oude vrouw en jonge man" class="img-fluid">
				<h3>Wij verzamelen voedseloverschotten</h3>
				<p>en stellen op basis hiervan voedselboxen samen, die we thuis leveren bij de ‘opscheppers’.</p>

			</div><!-- /col-md-4 -->
			<div class="col-md-4">

				<img src="static/img/icons/icon3.svg" alt="Kookpot" class="img-fluid">
				<h3>Geniet samen</h3>
				<p>van een versbereide maaltijd terwijl voedselverspilling wordt tegengegaan!</p>

			</div><!-- /col-md-4 -->

		</div><!-- /row -->
	</section>

	<a class="anchor" id="missie"></a>
	<section class="row info_row" id="missie_section">

		<h2>Missie</h2>

		<div class="row" id="missie_row">

			<div class="col-md-7">

				<p>Met Opschepper geloven wij in de kracht van samen eten. Opschepper vormt een brug tussen studenten die graag een versbereide maaltijd willen eten in de buurt en  mensen die de borden willen volscheppen in een gezellige sfeer, terwijl er via een leuke en sociale manier voedselverspilling wordt tegengegaan. Als lid van Opschepper leer je interessante mensen uit jouw buurt kennen en ontstaan onvergetelijke herinneringen terwijl je geniet van een versbereide maaltijd.</p>

			</div><!-- /col-md-8 -->

			<div class="col-md-5">

				<img src="/static/img/foto/missie.jpg" alt="Sfeerbeeld Opschepper" class="img-fluid">

			</div><!-- /col-md-4 -->
		</div><!-- /row -->

	</section>

</div><!-- /container -->

<a class="anchor" id="overons"></a>
<div class="jumbotron" id="jumbo_sec">

	<section class="container info_row" id="overons_section">

		<h2>Over ons</h2>

		<div class="row">

			<div class="col-4">
				<picture>
					<source media="(min-width: 769px)" srcset="/static/img/foto/Laurens.png">
					<img src="/static/img/foto/Laurens_sm.png" alt="Laurens Somers" class="img-fluid">
				</picture>
				<p>Laurens Somers</p>
			</div><!-- /col-4 -->

			<div class="col-4">
				<picture>
					<source media="(min-width: 769px)" srcset="/static/img/foto/Ward.png">
					<img src="/static/img/foto/Ward_sm.png" alt="Ward Van Houdt" class="img-fluid">
				</picture>
				<p>Ward Van Houdt</p>
			</div><!-- /col-4 -->

			<div class="col-4">
				<picture>
					<source media="(min-width: 769px)" srcset="/static/img/foto/Thomas.png">
					<img src="/static/img/foto/Thomas_sm.png" alt="Thomas Domen" class="img-fluid">
				</picture>
				<p>Thomas Domen</p>
			</div><!-- /col-4 -->

		</div><!-- /row -->

		<p class="lead">
			Tijdens onze studie leerden we elkaar kennen en bedachten we Opschepper. <br>
			Wij geloven dat er niets zo speciaal is als nieuwe, interessante mensen leren kennen terwijl je geniet van een lekkere, verse maaltijd!
		</p>

	</section>

</div><!-- /jumbotron -->

<a class="anchor" id="contact"></a>
<section class="container" id="contact_section">

	<h2>Contact</h2>

	<div class="row">

		<div class="col-md-6">
			<?php include 'partials/contactform.php'; ?>
			<form action="/#contact" role="form" method="post">
				<div class="form-group">
					<label for="name">Naam</label>
					<input type="text" class="form-control" id="name" name="name" aria-describedby="Naam" placeholder="Naam" required>
				</div>
				<div class="form-group">
					<label for="email">E-mailadres</label>
					<input type="email" class="form-control" id="email" name="email" aria-describedby="E-mailadres" placeholder="E-mailadres" required>
				</div>
				<div class="form-group">
					<label for="content">Uw bericht</label>
					<textarea class="form-control" id="content" name="msgcontent" aria-describedby="Uw bericht" placeholder="Uw bericht" required></textarea>
				</div>
				<button type="submit" class="btn">Versturen</button>
			</form>
		</div><!-- /col-md-6 -->

		<div class="col-md-1">
			<p>&nbsp;</p>
		</div><!-- /col-md-1 -->

		<div class="col-md-5" id="contactcol">

			<span class="icons">
				<p>
					<i class="fas fa-phone fa-lg"></i> +32 486 73 95 59<br>
				</p>

				<!--			FB-->
				<p>
					<a href="https://www.facebook.com/opschepperBE/" target="_blank">
						<i class="fab fa-facebook fa-lg"></i> Facebook
					</a>
				</p>

				<!--			EMAIL-->
				<p>
					<i class="far fa-envelope fa-lg"></i> info@opschepper.be
				</p>

			</span>
		</div><!-- /col-md-6 -->

	</div><!-- /row -->

</section><!-- /container -->

<?php include 'partials/applymodal.php'; ?>
