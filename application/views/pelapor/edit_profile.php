<?php if (validation_errors()): ?>
  <div class="toast bg-danger" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false" style="z-index: 999999; position: fixed; right: 1.5rem; bottom: 3.5rem">
    <div class="toast-header">
      <strong class="mr-auto">Gagal!</strong>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      <?= validation_errors(); ?>
    </div>
  </div>
<?php endif ?>

<div class="container">
	<div class="row py-3">
		<div class="col-lg-6 p-3">
			<div class="card shadow-sm">
			  <div class="card-header bg-light">
			  	<h3 class="my-auto text-dark"><i class="fas fa-fw fa-user"></i> Ubah Profil</h3>
			  </div>
			  <div class="card-body">
			  	<form action="<?= base_url('pelapor/editProfile'); ?>" method="post">
						<div class="form-group">
							<label for="nama"><i class="fas fa-fw fa-user"></i> Nama Lengkap</label>
							<input type="text" id="nama" class="form-control <?= (form_error('nama')) ? 'is-invalid' : ''; ?>" name="nama" required value="<?= (form_error('nama')) ? set_value('nama') : $dataUser ['nama']; ?>">
							<div class="invalid-feedback">
	              <?= form_error('nama'); ?>
	            </div>
						</div>
						<div class="form-group">
							<label for="no_telepon"><i class="fas fa-fw fa-phone"></i> No. Telepon</label>
							<input type="number" id="no_telepon" class="form-control <?= (form_error('no_telepon')) ? 'is-invalid' : ''; ?>" name="no_telepon" required value="<?= (form_error('no_telepon')) ? set_value('no_telepon') : $dataUser ['no_telepon']; ?>">
							<div class="invalid-feedback">
	              <?= form_error('no_telepon'); ?>
	            </div>
						</div>
						<div class="form-group">
							<label for="alamat"><i class="fas fa-fw fa-map-marker-alt"></i> Alamat</label>
							<textarea id="alamat" class="form-control <?= (form_error('alamat')) ? 'is-invalid' : ''; ?>" name="alamat" required><?= (form_error('alamat')) ? set_value('alamat') : $dataUser ['alamat']; ?></textarea>
							<div class="invalid-feedback">
	              <?= form_error('alamat'); ?>
	            </div>
						</div>
						<div class="form-group text-right">
							<button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Simpan</button>
						</div>
					</form>
			  </div>
			</div>
		</div>
	</div>
</div>

<style>
	.container {
		background-color: #f8f9fa; /* Warna latar belakang yang lembut */
		border-radius: 8px; /* Sudut yang membulat */
		padding: 20px; /* Ruang di dalam kontainer */
	}

	.card {
		border-radius: 8px; /* Sudut yang membulat pada kartu */
	}

	.card-header {
		background-color: #e9ecef; /* Warna latar belakang header kartu */
	}

	.card-body {
		padding: 20px; /* Ruang di dalam body kartu */
	}

	.btn {
		border-radius: 20px; /* Sudut tombol yang membulat */
	}
</style>