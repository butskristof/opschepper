	<hr>

	<footer class="container">
		<p>&copy; <?=date("Y")?> Opschepper</p>
	</footer>

	<script src="/static/js/vendor/modernizr-3.5.0.min.js"></script>
	<script>window.jQuery || document.write('<script src="/static/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
	<script src="/static/js/vendor/popper.min.js"></script>
	<script src="/static/js/vendor/bootstrap.min.js"></script>

	<script src="/static/js/plugins.js"></script>

<!--	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>-->

	<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
		window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
		ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
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
				data: $form.serialize()
			});
        });
	</script>

</body>
</html>
