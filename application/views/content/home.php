<form action="<?php echo base_url(); ?>" method="post">
	<div class="row">
		<div class="col-md-12 jumbotron text-center">
			<div class="row">
				<div class="col-md-3">
					<input type="radio" name="option" value="ascii" id="ascii">ASCII
				</div>
				<div class="col-md-3">
					<input type="radio" name="option" value="desimal" id="desimal">DESIMAL
				</div>
				<div class="col-md-3">
					<input type="radio" name="option" value="biner" id="biner">BINER
				</div>
				<div class="col-md-3">
					<input type="radio" name="option" value="hexadesimal" id="hexadesimal">HEXADESIMAL
				</div>
			</div>
			<div class="row input-text">
				<div class="input-group in" id="input-text">
	            	<textarea type="text" name="input" class="form-control" rows="3"><?php echo $input; ?></textarea>
	            </div>
			</div>
			<div class="row">
			<?php
				if (validation_errors()) {
					echo "<div id='alert' class='alert alert-danger' role='alert'>". validation_errors() . "</div>";
				}
			?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 jumbotron">
			<div class="row">
				<div class="btn-group btn-group-justified" role="group" aria-label="...">
					<div class="btn-group" role="group">
						<button type="submit" name="btn_convert" value="#" class="btn btn-default" id="btn_1"> - </button>
					</div>
					<div class="btn-group" role="group">
						<button type="submit" name="btn_convert" value="#" class="btn btn-default" id="btn_2"> - </button>
					</div>
					<div class="btn-group" role="group">
						<button type="submit" name="btn_convert" value="#" class="btn btn-default" id="btn_3"> - </button>
					</div>
				</div>
			</div>
			<div class="row input-text">
				<div class="input-group in" id="input-text">
	            	<textarea type="text" name="output" class="form-control" rows="3"><?php echo $result; ?></textarea>
	            </div>
			</div>
		</div>
	</div>
</form>