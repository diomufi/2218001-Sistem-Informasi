<div class="sidebar">
  <div class="sidebar-header">
    <div>
      <a href="../index.html" class="sidebar-logo"><span>HealthCat</span></a>
      <small class="sidebar-logo-headline">Health Cat Analytics</small>
    </div>
  </div><!-- sidebar-header -->
  <div id="dpSidebarBody" class="sidebar-body">
    <ul class="nav nav-sidebar">
      <li class="nav-label"><label class="content-label">Admin Access</label></li>
      <li class="nav-item show">
        <a href="" class="nav-link with-sub"><i data-feather="box"></i> Dashboard</a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link with-sub"><i data-feather="users"></i> Manajemen Pemilik</a>
        <nav class="nav nav-sub">
          <a href="{{ route('data-pemilik') }}" class="nav-sub-link">Manajemen Pemilik</a>
        </nav>
      </li>
      <li class="nav-item">
        <a href="{{ route('data-kucing') }}" class="nav-link with-sub"><i data-feather="github"></i> Manajemen Data Kucing</a>
        <nav class="nav nav-sub">
          <a href="{{ route('data-kucing') }}" class="nav-sub-link">Manajemen Kucing</a>
        </nav>
      </li>
      <li class="nav-item">
        <a href="{{ route('data-gejala') }}" class="nav-link with-sub"><i data-feather="target"></i> Manajemen Gejala</a>
        <nav class="nav nav-sub">
          <a href="{{ route('data-gejala') }}" class="nav-sub-link">Manajemen Gejala</a>
        </nav>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link with-sub"><i data-feather="x-square"></i> Manajemen Penyakit</a>
        <nav class="nav nav-sub">
          <a href="{{ route('data-penyakit') }}" class="nav-sub-link">Manajemen Penyakit</a>
        </nav>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link with-sub"><i data-feather="x-square"></i> Manajemen Relasi</a>
        <nav class="nav nav-sub">
          <a href="{{ route('data-penyakit') }}" class="nav-sub-link">Manajemen Relasi</a>
        </nav>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link with-sub"><i data-feather="file-text"></i> Laporan</a>
        <nav class="nav nav-sub">
          <a href="#" class="nav-sub-link">Laporan Konsultasi</a>
          <a href="#" class="nav-sub-link">Laporan Penyakit</a>
          <a href="#" class="nav-sub-link">Laporan Pengguna</a>
        </nav>
      </li>

      <hr class="mg-t-30 mg-b-25">

      <ul class="nav nav-sidebar">
        <li class="nav-item"><a href="themes.html" class="nav-link"><i data-feather="aperture"></i> Pengaturan</a></li>
        <li class="nav-item"><a href="../docs.html" class="nav-link"><i data-feather="help-circle"></i> LogOut</a></li>
      </ul>


  </div><!-- sidebar-body -->
</div><!-- sidebar -->