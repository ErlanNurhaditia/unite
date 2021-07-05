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
							<th class="align-middle">Tanggal Pengaduan</th>
							<th class="align-middle">Isi Laporan</th>
							<th class="align-middle">Lokasi</th>
							<th class="align-middle">Foto</th>
							<th class="align-middle">Pelapor</th>
							<th class="align-middle">Status</th>
							<th class="align-middle">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($pengaduan as $dp): ?>
							<?php 
								$this->db->order_by('tanggapan.id_tanggapan', 'desc');
								$getStatusTanggapan = $this->db->get_where('tanggapan', ['id_pengaduan' => $dp['id_pengaduan']])->row_array();
								if ($getStatusTanggapan) 
								{
									$status = $getStatusTanggapan['status_tanggapan'];
									$status = explode('_', $status);
									$status = implode(' ', $status);
									$status = ucwords(strtolower($status));
								}
							?>
							<tr>
								<td class="align-middle"><?= $i++; ?></td>
								<td class="align-middle"><?= date('d-M-Y,\P\u\k\u\l H:i', strtotime($dp['tgl_pengaduan'])); ?></td>
								<td class="align-middle"><?= $dp['isi_laporan']; ?></td>
								<td class="align-middle"><?= $dp['kelurahan']; ?></td>
								<td class="align-middle text-center">
									<a href="<?= base_url('assets/img/img_pengaduan/') . $dp['foto']; ?>" class="enlarge">
										<img src="<?= base_url('assets/img/img_pengaduan/') . $dp['foto']; ?>" class="img-fluid img-w-75-hm-100" alt="<?= $dp['foto']; ?>">
									</a>
								</td>
								<td class="align-middle"><?= $dp['username']; ?></td>
								<td class="align-middle">
								<?php if ($getStatusTanggapan): ?>
									<?php if ($getStatusTanggapan['status_tanggapan'] == 'proses'): ?>
										<button type="button" class="btn btn-sm text-center btn-danger"><i class="fas fa-fw fa-sync"></i> <?= $status; ?></button>
									<?php elseif ($getStatusTanggapan['status_tanggapan'] == 'valid'): ?>
										<button type="button" class="btn btn-sm text-center btn-success"><i class="fas fa-fw fa-check"></i> <?= $status; ?></button>
									<?php elseif ($getStatusTanggapan['status_tanggapan'] == 'pengerjaan'): ?>
										<button type="button" class="btn btn-sm text-center btn-warning"><i class="fas fa-fw fa-hammer"></i> <?= $status; ?></button>
									<?php elseif ($getStatusTanggapan['status_tanggapan'] == 'selesai'): ?>
										<button type="button" class="btn btn-sm text-center btn-primary"><i class="fas fa-fw fa-check-double"></i> <?= $status; ?></button>
									<?php elseif ($getStatusTanggapan['status_tanggapan'] == 'tidak_valid'): ?>
										<button type="button" class="btn btn-sm text-center btn-secondary"><i class="fas fa-fw fa-times"></i> <?= $status; ?></button>
									<?php endif ?>
								<?php else: ?>
									<button type="button" class="btn text-center btn-sm btn-secondary"><i class="fas fa-fw fa-times"></i> Belum ditanggapi</button>
								<?php endif ?>
								</td>

								<td class="align-middle text-center">
									<a href="<?= base_url('tanggapan/index/' . $dp['id_pengaduan']); ?>" class="btn btn-sm btn-info m-1"><i class="fas fa-fw fa-reply"></i></a>
									<a href="<?= base_url('pengaduan/editPengaduan/' . $dp['id_pengaduan']); ?>" class="btn btn-sm btn-success m-1"><i class="fas fa-fw fa-edit"></i></a>
									<?php if ($dataUser['jabatan'] == 'administrator'): ?>
										<a href="<?= base_url('pengaduan/removePengaduan/' . $dp['id_pengaduan']); ?>" class="btn btn-sm btn-danger m-1 btn-delete" data-nama="<?= $dp['isi_laporan']; ?>"><i class="fas fa-fw fa-fw fa-trash"></i></a>
									<?php endif ?>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
