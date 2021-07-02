<div class="container">
	<div class="row justify-content-center py-3">
		<div class="col-lg header-title">
			<h3><i class="fas fa-fw fa-exclamation"></i> Pengaduan</h3>
		</div>
		<!-- <div class="col-lg header-button">
			<a href="<?= base_url('pengaduan/addPengaduan'); ?>" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i> Tambah Pengaduan</a>
		</div> -->
	</div>
	<div class="row py-3">
		<div class="col-lg">
			<div class="table-responsive">
				<table class="table table-bordered" id="table_id">
					<thead class="thead-dark">
						<tr>
							<th class="align-middle">No.</th>
							<th class="align-middle">Isi Laporan</th>
							<th class="align-middle">Pelapor</th>
							<th class="align-middle">Lokasi</th>
							<th class="align-middle">Foto</th>
							<th class="align-middle">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($pengaduan as $dp): ?>
							<tr>
								<td class="align-middle"><?= $i++; ?></td>
								<td class="align-middle"><?= $dp['isi_laporan']; ?></td>
								<td class="align-middle"><?= $dp['username']; ?></td>
								<td class="align-middle"><?= $dp['kelurahan']; ?></td>
								<td class="align-middle text-center">
									<a href="<?= base_url('assets/img/img_pengaduan/') . $dp['foto']; ?>" class="enlarge">
										<img src="<?= base_url('assets/img/img_pengaduan/') . $dp['foto']; ?>" class="img-fluid img-w-100-hm-100" alt="<?= $dp['foto']; ?>">
									</a>
								</td>
								<td class="align-middle text-center">
									<a href="<?= base_url('tanggapan/index/' . $dp['id_pengaduan']); ?>" class="btn btn-sm btn-info m-1"><i class="fas fa-fw fa-reply"></i></a>
									<a href="<?= base_url('pengaduan/editPengaduan/' . $dp['id_pengaduan']); ?>" class="btn btn-sm btn-success m-1"><i class="fas fa-fw fa-edit"></i></a>
									<a href="<?= base_url('pengaduan/removePengaduan/' . $dp['id_pengaduan']); ?>" class="btn btn-sm btn-danger m-1 btn-delete" data-nama="<?= $dp['isi_laporan']; ?>"><i class="fas fa-fw fa-fw fa-trash"></i></a>
								</td>
							</tr>
						<?php endforeach ?>
						<?php if ($pengaduan == null): ?>
							<tr>
								<td colspan="6" class="text-center">Tidak ada data.</td>
							</tr>
						<?php endif ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
