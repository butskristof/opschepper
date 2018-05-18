	<hr>

	<footer class="container">
		<p>&copy; <?=date("Y")?> Opschepper <br>
		webdesign by <a href="https://www.github.com/butskristof" target="_blank">Kristof Buts</a></p>
	</footer>

	<script src="/static/js/vendor/modernizr-3.5.0.min.js"></script>
	<script>window.jQuery || document.write('<script src="/static/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
	<script src="/static/js/vendor/popper.min.js"></script>
	<script src="/static/js/vendor/bootstrap.min.js"></script>

	<script src="/static/js/plugins.js"></script>

	<script>
		window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
		ga('create','UA-70900108-6','auto');ga('send','pageview')
	</script>
	<script src="https://www.google-analytics.com/analytics.js" async defer></script>

	<script>
		var $form = $('form#applyForm');
		var url = "https://script.google.com/macros/s/AKfycbyDEVJaFJFATc8gooERnoej8DxdFOezGoamofakZRD4Zkga1_k/exec";

		$('#submit-applyForm').on('click', function (e) {
			e.preventDefault();
            console.log($form.serialize());

			var jqxhr = $.ajax({
				url: url,
				method: "GET",
				dataType: "json",
				data: $form.serialize(),
				success: function (data) {
					var confirmbox = document.querySelector("#applyConfirmation");
					confirmbox.innerHTML = 'Uw gegevens werden opgeslagen, we contacteren u zo snel mogelijk.';
					confirmbox.classList.add("alert-success")
					confirmbox.style.display = 'block';
				},
				error: function (data) {
					var confirmbox = document.querySelector("#applyConfirmation");
					confirmbox.classList.add("alert-danger")
					confirmbox.innerHTML = 'Er ging iets mis bij het opslaan van uw gegevens.';
					confirmbox.style.display = 'block';
				}
			});
        });
	</script>

</body>
</html>
