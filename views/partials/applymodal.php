<div class="modal fade" tabindex="-1" role="dialog" id="applyModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="#" role="form" method="post">
				<div class="modal-header">
					<h5 class="modal-title">Doe mee</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
<!--				MODAL BODY-->

					<p>Text</p>

					<div class="form-group">
						<label for="task">Ik wil</label>

						<div class="custom-control custom-radio">
							<input type="radio" id="taskEter" name="task" class="custom-control-input">
							<label class="custom-control-label" for="taskEter">Eten</label>
						</div>
						<div class="custom-control custom-radio">
							<input type="radio" id="taskKoker" name="task" class="custom-control-input">
							<label class="custom-control-label" for="taskKoker">Koken</label>
						</div>

					</div>

					<div class="form-group">
						<label for="name">Naam</label>
						<input type="text" class="form-control" id="name" name="name" aria-describedby="Naam" placeholder="Naam" required>
					</div>
					<div class="form-group">
						<label for="email">E-mailadres</label>
						<input type="email" class="form-control" id="email" name="email" aria-describedby="E-mailadres" placeholder="E-mailadres" required>
					</div>

				</div>
				<div class="modal-footer">
					<button type="submit" class="btn">Versturen</button>
				</div>
			</form>
		</div>
	</div>
</div>
