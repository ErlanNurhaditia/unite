<div class="container">
	<div class="row justify-content-center py-3">
		<div class="col-lg">
			<h3 class="text-black"><i class="fas fa-fw fa-user"></i> Profil - <?= $dataUser ['username']; ?></h3>
		</div>
	</div>
	<div class="row py-3">
		<div class="col-lg-6 bg-light border rounded shadow-sm p-4">
			<table class="table table-borderless">
				<tr>
					<th class="text-muted">Username</th>
					<td class="text-center">:</td>
					<td><?= $dataUser ['username']; ?></td>
				</tr>
				<tr>
					<th class="text-muted">Nama Lengkap</th>
					<td class="text-center">:</td>
					<td><?= $dataUser ['nama']; ?></td>
				</tr>
				<tr>
					<th class="text-muted">No. Telepon</th>
					<td class="text-center">:</td>
					<td><?= $dataUser ['no_telepon']; ?></td>
				</tr>
				<tr>
					<th class="text-muted">Alamat</th>
					<td class="text-center">:</td>
					<td><?= $dataUser ['alamat']; ?></td>
				</tr>
				<tr>
					<td colspan="3">
						<div class="row pt-3">
							<div class="col">
								<a href="<?= base_url('pelapor/changePassword'); ?>" class="btn btn-danger btn-block"><i class="fas fa-fw fa-lock"></i> Ganti Password</a>
							</div>
							<div class="col">
								<a href="<?= base_url('pelapor/editProfile'); ?>" class="btn btn-success btn-block"><i class="fas fa-fw fa-user-edit"></i> Ubah Profil</a>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>

<style>
	.container {
		background-color: #f8f9fa; /* Warna latar belakang yang lembut */
		border-radius: 8px; /* Sudut yang membulat */
		padding: 20px; /* Ruang di dalam kontainer */
	}

	h3 {
		color: #f1c40f; /* Warna teks untuk judul */
	}

	.table th {
		background-color: rgba(0, 0, 0, 0.05); /* Latar belakang untuk header tabel */
	}

	.table td {
		color: #333; /* Warna teks untuk data */
	}

	.btn {
		border-radius: 20px; /* Sudut tombol yang membulat */
	}
</style>