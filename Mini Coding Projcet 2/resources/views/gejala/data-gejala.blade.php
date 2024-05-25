<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Meta -->
  <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">
  <meta name="author" content="ThemePixels">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

  <title>Health Cat Analytics - Manajemen Gejala</title>

  <!-- Vendor CSS -->
  <link href="{{ asset('Template/lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Template/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Template/lib/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('Template/assets/css/cassie.css') }}">
</head>

<body>
  @include('components.sidebar')

  <div class="content content-page">
    <div class="header">
      <div class="header-left">
        <a href="" class="burger-menu"><i data-feather="menu"></i></a>

        <div class="header-search">
          <i data-feather="search"></i>
          <input type="search" class="form-control" placeholder="What are you looking for?">
        </div><!-- header-search -->
      </div><!-- header-left -->
    </div><!-- header -->
    <div class="content-header justify-content-between">
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manajemen Gejala</li>
          </ol>
        </nav>
        <h4 class="content-title content-title-xs">Manajemen Gejala</h4>
      </div>
    </div><!-- content-header -->
    <div class="card card-body">
      <div class="container">
        <div class="row mb-3">
          <div class="col">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambahGejala">Tambah Gejala</button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-primary table-hover table-striped mg-b-0">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Gejala</th>
                <th scope="col">Nama Gejala</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($gejalas as $gejala)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $gejala->kode_gejala }}</td>
                <td>{{ $gejala->nama_gejala }}</td>
                <td>
                  <button type="button" class="btn btn-danger btn-sm btn-delete-gejala" data-id="{{ $gejala->id }}">Delete</button>
                </td>
              </tr>
              @endforeach
              <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
          </table>
        </div><!-- table-responsive -->
      </div><!-- card -->
    </div><!-- content -->

    <!-- Modal Tambah Gejala -->
    <div class="modal fade" id="modalTambahGejala" tabindex="-1" role="dialog" aria-labelledby="modalTambahGejalaLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTambahGejalaLabel">Tambah Gejala</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="formTambahGejala" action="{{ route('tambah-gejala') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="kode_gejala">Kode Gejala</label>
                <input type="text" class="form-control" id="kode_gejala" name="kode_gejala" required>
              </div>
              <div class="form-group">
                <label for="nama_gejala">Nama Gejala</label>
                <input type="text" class="form-control" id="nama_gejala" name="nama_gejala" required>
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div><!-- End Modal Tambah Gejala -->

    <!-- Vendor JS -->
    <script src="{{ asset('Template/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Template/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Template/lib/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('Template/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('Template/lib/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('Template/lib/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('Template/lib/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('Template/lib/jquery.flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('Template/lib/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('Template/lib/jquery.flot/jquery.flot.threshold.js') }}"></script>
    <script src="{{ asset('Template/lib/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('Template/lib/jqvmap/maps/jquery.vmap.world.js') }}"></script>

    <!-- Template JS -->
    <script src="{{ asset('Template/assets/js/cassie.js') }}"></script>
    <script src="{{ asset('Template/assets/js/flot.sampledata.js') }}"></script>
    <script src="{{ asset('Template/assets/js/vmap.sampledata.js') }}"></script>
    <script src="{{ asset('Template/assets/js/dashboard-one.js') }}"></script>

    <!-- Custom JS -->
    <script>
      $(document).ready(function() {
        // Handle delete button click
        $(document).on('click', '.btn-delete-gejala', function() {
          var gejalaId = $(this).data('id');
          if (confirm('Anda yakin ingin menghapus gejala ini?')) {
            $.ajax({
              type: 'DELETE',
              url: '/hapus-gejala/' + gejalaId,
              data: {
                _token: '{{ csrf_token() }}'
              },
              success: function(response) {
                window.location.reload();
              },
              error: function(xhr) {
                console.error(xhr.responseText);
              }
            });
          }
        });

        // Handle form submission for adding gejala
        $('#formTambahGejala').submit(function(event) {
          event.preventDefault();
          var formData = $(this).serialize();
          $.ajax({
            type: 'POST',
            url: $(this).attr('action'), // Use action attribute of form for URL
            data: formData,
            success: function(response) {
              $('#modalTambahGejala').modal('hide');
              window.location.reload(); // Refresh page on success
            },
            error: function(xhr) {
              console.error(xhr.responseText);
            }
          });
        });
      });
    </script>
  </body>

</html>
