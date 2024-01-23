<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Add Data
		</div>
		<div class="panel-body">
			<?php

			if (isset($error_upload)) {
				echo '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
			}

			echo validation_errors('<div class="alert alert-warning alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

			echo form_open_multipart('akreditasi/add');
			?>

			<div class="form-group">
				<label>Foto Akreditasi</label>
				<input type="file" class="form-control" type="text" name="foto_akreditasi" required>
			</div>

			<div class="form-group">
				<label>Isi</label>
				<textarea class="form-control" name="isi" placeholder="Isi" id="floatingTextarea2" style="height: 100px"></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Simpan</button>
				<button type="reset" class="btn btn-success">Reset</button>
			</div>


			<?php echo form_close(); ?>
		</div>
	</div>