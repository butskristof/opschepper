<div class="modal fade" tabindex="-1" role="dialog" id="applyModal">

	<div class="modal-dialog" role="document">

		<div class="modal-content">

			<form role="form" id="applyForm">

				<div class="modal-body">
					<button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>

					<p>&nbsp;</p>
					<p id="applyConfirmation" class="alert">&nbsp;</p>
					<p>Laat hieronder je gegevens achter, zodat wij jou kunnen contacteren wanneer de eerstvolgende Opschepavond doorgaat!</p>

					<div class="form-group">
						<label for="task">Ik wil</label>

						<div class="custom-control custom-radio">
							<input type="radio" id="eten" name="taak" class="custom-control-input" value="eten">
							<label class="custom-control-label" for="eten">Eten</label>
						</div>

						<div class="custom-control custom-radio">
							<input type="radio" id="koken" name="taak" class="custom-control-input" value="koken">
							<label class="custom-control-label" for="koken">Koken</label>
						</div>

					</div>

					<div class="form-group">

						<label for="naam">Naam</label>
						<input type="text" class="form-control" id="naam" name="naam" aria-describedby="Naam" placeholder="Naam" required>

					</div>

					<div class="form-group">

						<label for="email">E-mailadres</label>
						<input type="email" class="form-control" id="email" name="email" aria-describedby="E-mailadres" placeholder="E-mailadres" required>

					</div>

				</div>
				<div class="modal-footer">
					<button type="submit" id="submit-applyForm" class="btn">Versturen</button>
				</div>
			</form>
		</div>
	</div>
</div>

