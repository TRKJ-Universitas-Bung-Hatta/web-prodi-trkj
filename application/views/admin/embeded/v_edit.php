<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Edit embeded
		</div>
		<div class="panel-body">
			<?php

			if (isset($error_upload)) {
				echo '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
			}

			echo validation_errors('<div class="alert alert-warning alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

			echo form_open_multipart('embeded/edit/' . $embeded->id_embeded);
			?>

			<div class="form-group">
				<label>Ganti Foto Lab</label>
				<input type="file" class="form-control" type="text" name="foto_lab">
			</div>

			<div class="form-group">
				<label>Kata Pengantar</label>
				<textarea name="kata_pengantar" id="editor" required><?= $embeded->kata_pengantar ?></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Simpan</button>
				<button type="reset" class="btn btn-success">Reset</button>
			</div>


			<?php echo form_close(); ?>
		</div>
	</div>