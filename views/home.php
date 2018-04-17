<?php $this->layout('template', ['title' => 'Opschepper', 'id' => 'home', 'extracss' => 'static/css/home.css']) ?>

<!-- NAVIGATION -->

<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
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

	<section class="row info_row" id="hoe">

		<h2>Hoe werkt het?</h2>

		<div class="row">

			<div class="col-md-4">
				<img src="http://placehold.it/400x400" alt="" class="img-fluid">
				<h3>Wij verzamelen voedseloverschotten</h3>
			</div><!-- /col-md-4 -->
			<div class="col-md-4">
				<img src="http://placehold.it/400x400" alt="" class="img-fluid">
				<h3>Boek als <br>
					'eter/koker'</h3>
			</div><!-- /col-md-4 -->
			<div class="col-md-4">
				<img src="http://placehold.it/400x400" alt="" class="img-fluid">
				<h3>Enjoy & <br>save the environment</h3>
			</div><!-- /col-md-4 -->

		</div><!-- /row -->
	</section>

	<section class="row info_row" id="missie">

		<h2>Missie</h2>

		<div class="row" id="missie_row">
			<div class="col-md-8">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aut haec tibi, Torquate, sunt vituperanda aut patrocinium voluptatis repudiandum. Quamquam tu hanc copiosiorem etiam soles dicere. Duo Reges: constructio interrete. Quid me istud rogas? Miserum hominem! Si dolor summum malum est, dici aliter non potest. Iam doloris medicamenta illa Epicurea tamquam de narthecio proment: Si gravis, brevis; Traditur, inquit, ab Epicuro ratio neglegendi doloris. Quodsi ipsam honestatem undique pertectam atque absolutam. Quis enim est, qui non videat haec esse in natura rerum tria? Bona autem corporis huic sunt, quod posterius posui, similiora.</p>
			</div><!-- /col-md-8 -->
			<div class="col-md-4">
				<img src="http://placehold.it/400x300" alt="" class="img-fluid">
			</div><!-- /col-md-4 -->
		</div><!-- /row -->

	</section>

</div><!-- /container -->

<div class="jumbotron" id="jumbo_sec">

	<section class="container info_row" id="overons">
		<h2>Over ons</h2>

		<div class="row">

			<div class="col-4">
				<img src="http://placehold.it/400x400" alt="" class="img-fluid">
			</div><!-- /col-4 -->

			<div class="col-4">
				<img src="http://placehold.it/400x400" alt="" class="img-fluid">
			</div><!-- /col-4 -->

			<div class="col-4">
				<img src="http://placehold.it/400x400" alt="" class="img-fluid">
			</div><!-- /col-4 -->

		</div><!-- /row -->

		<p class="lead">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Itaque ad tempus ad Pisonem omnes. De illis, cum volemus. Minime vero istorum quidem, inquit. Longum est enim ad omnia respondere, quae a te dicta sunt. Nunc ita separantur, ut disiuncta sint, quo nihil potest esse perversius.
		</p>

	</section>

</div><!-- /jumbotron -->

<section class="container" id="contact">

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

		<div class="col-md-5 offset-md-1" id="contactcol">

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

