<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<a href="<?= base_url('mitra/add'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
		</div>
		<div class="panel-body">
			<?php

			if ($this->session->flashdata('pesan')) {
				echo '<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
				echo $this->session->flashdata('pesan');
				echo '</div>';
			}

			?>
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Perusahaan</th>
						<th>Logo Perusahaan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($mitra as $key => $value) { ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $value->nama ?></td>
							<td><img src="<?= base_url('gambar/mitra/' . $value->logo) ?>" width="150px"></td>
							<td>
								<a href="<?= base_url('mitra/edit/' . $value->id_mitra) ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
								<a href="<?= base_url('mitra/delete/' . $value->id_mitra) ?>" onclick="return confirm('Apakah Data Ini Akan Dihapus..?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
