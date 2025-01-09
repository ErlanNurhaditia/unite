<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a class="navbar-brand" href="<?= base_url(); ?>">
	      <img style="width: 70px; height:auto;" src="<?= base_url('assets/img/img_properties/logo1.png'); ?>" class="d-inline-block align-top img-fluid ">
        <span 
    style="
        font-family: 'Poppins', sans-serif; 
        font-size: 2rem; 
        font-weight: 700; 
        color: #4CAF50; 
        letter-spacing: 2px; 
        text-transform: uppercase; 
        position: relative; 
        display: inline-block;
        transition: all 0.3s ease;"
    onmouseover="this.style.color='#2e7d32'; this.style.textDecoration='underline';"
    onmouseout="this.style.color='#4CAF50'; this.style.textDecoration='none';">
    Unité
</span>

	    </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <?php if (
            $_SERVER['REQUEST_URI'] == '/zona_lapor/pelapor/profile' || 
            $_SERVER['REQUEST_URI'] == '/zona_lapor/pelapor/profile/'
          ): ?>
            <a href="<?= base_url('pelapor/profile'); ?>" class="nav-link active"><i class="nav-icon fas fa-fw fa-user"></i> <p><?= $dataUser['username']; ?></p></a>
          <?php else: ?>
            <a href="<?= base_url('pelapor/profile'); ?>" class="nav-link"><i class="nav-icon fas fa-fw fa-user"></i> <p><?= $dataUser['username']; ?></p></a>
          <?php endif ?>
        </li>
        <li class="nav-item">
          <?php if (
            $_SERVER['REQUEST_URI'] == '/zona_lapor/pelapor' || 
            $_SERVER['REQUEST_URI'] == '/zona_lapor/pelapor/'
          ): ?>
            <a href="<?= base_url('pelapor'); ?>" class="nav-link active">
          <?php else: ?>
            <a href="<?= base_url('pelapor'); ?>" class="nav-link">
          <?php endif ?>
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dasbor
            </p>
          </a>
        </li>
        <li class="nav-item">
          <?php if (
            $_SERVER['REQUEST_URI'] == '/zona_lapor/pelaporPengaduan/addPelaporPengaduan' || 
            $_SERVER['REQUEST_URI'] == '/zona_lapor/pelaporPengaduan/addPelaporPengaduan/'
          ): ?>
            <a href="<?= base_url('pelaporPengaduan/addPelaporPengaduan'); ?>" class="nav-link active">
              <i class="fas fa-fw fa-plus nav-icon"></i>
              <p>Tambah Pengaduan</p>
            </a>
          <?php else: ?>
            <a href="<?= base_url('pelaporPengaduan/addPelaporPengaduan'); ?>" class="nav-link">
              <i class="fas fa-fw fa-plus nav-icon"></i>
              <p>Tambah Pengaduan</p>
            </a>
          <?php endif ?>
        </li>
        <li class="nav-item">
          <?php if (
            $_SERVER['REQUEST_URI'] == '/zona_lapor/pelaporPengaduan' || 
            $_SERVER['REQUEST_URI'] == '/zona_lapor/pelaporPengaduan/'
          ): ?>
            <a href="<?= base_url('pelaporPengaduan'); ?>" class="nav-link active">
              <i class="fas fa-exclamation nav-icon"></i>
              <p>Pengaduan</p>
            </a>
          <?php else: ?>
            <a href="<?= base_url('pelaporPengaduan'); ?>" class="nav-link">
              <i class="fas fa-exclamation nav-icon"></i>
              <p>Pengaduan</p>
            </a>
          <?php endif ?>
        </li>
        <li class="nav-item">
          <?php if (
            $_SERVER['REQUEST_URI'] == '/zona_lapor/pelaporLaporan' || 
            $_SERVER['REQUEST_URI'] == '/zona_lapor/pelaporLaporan/'
          ): ?>
            <a href="<?= base_url('pelaporLaporan'); ?>" class="nav-link active">
              <i class="fas fa-file-alt nav-icon"></i>
              <p>Laporan</p>
            </a>
          <?php else: ?>
            <a href="<?= base_url('pelaporLaporan'); ?>" class="nav-link">
              <i class="fas fa-file-alt nav-icon"></i>
              <p>Laporan</p>
            </a>
          <?php endif ?>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>