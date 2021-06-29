<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <i class="fas fa-university"></i>
    </div>
    <div class="sidebar-brand-text mx-1">Learn & Play</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?= base_url('pengajar'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Beranda</span></a>
  </li>


  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('pengajar/ambilMapel'); ?>">
      <i class="far fa-calendar-check"></i>
      <span>Ambil Mata Pelajaran</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('pengajar/tugas'); ?>">
      <i class="fas fa-tasks"></i>
      <span>Tugas</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('pengajar/materi'); ?>">
      <i class="fas fa-book"></i>
      <span>Materi</span></a>
  </li>


  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('pengajar/filtersiswa'); ?>">
      <i class="fas fa-users"></i>
      <span>Siswa</span></a>
  </li>

  <!--  <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pengajar/pesan'); ?>">
          <i class="fas fa-users"></i>
          <span>Pesan</span></a>
      </li> -->

  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('pengajar/ujian'); ?>">
      <i class="fas fa-users"></i>
      <span>Challenge</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('pengajar/soal'); ?>">
      <i class="fas fa-users"></i>
      <span>Soal Challenge</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('user') ?>">
      <i class="fas fa-sign-out-alt"></i>
      <span>Log Out</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>



      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">




        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama'); ?></span>
            <img class="img-profile rounded-circle" src="<?= base_url('assets/images/user/') . $foto ?>">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?= base_url('pengajar/profile') ?>">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>
    <!-- End of Topbar -->