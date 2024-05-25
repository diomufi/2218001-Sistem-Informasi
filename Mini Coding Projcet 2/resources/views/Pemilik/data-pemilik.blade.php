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

    <title>Manajemen Pemilik</title>

    <!-- vendor css -->
    <link href="{{ asset('Template/lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Template/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Template/lib/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

    <!-- template css -->
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
                <h4 class="content-title content-title-xs">Manajemen Pemilik</h4>
            </div>
        </div><!-- content-header -->
        <div class="card card-body">
            <div class="container">
                <div class="row mb-3">
                    <div class="col">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modal1">Tambah Pemilik</button>
                            <a href="/Pemilik/cetak-pemilik"><button class="btn btn-secondary">Cetak</button></a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-primary table-hover table-striped mg-b-0">
                        <thead>
                            <tr>
                                <th scope="col">ID Pemilik</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                                <th scope="col">No. HP</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($owners as $owner)
                            <tr>
                                <td>{{ $owner->id }}</td>
                                <td>{{ $owner->nama }}</td>
                                <td>{{ $owner->alamat }}</td>
                                <td>{{ $owner->email }}</td>
                                <td>{{ $owner->no_hp }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info" data-toggle="modal"
                                        data-target="#modalUpdate{{ $owner->id }}">Update</a>
                                    <a href="#" class="btn btn-sm btn-danger"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $owner->id }}').submit();">Delete</a>

                                    <!-- Delete Form -->
                                    <form id="delete-form-{{ $owner->id }}"
                                        action="{{ route('hapus-pemilik', $owner->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- table-responsive -->
            </div><!-- container -->

        </div><!-- content -->

        <!-- Modal Update -->
        @foreach($owners as $owner)
        <div class="modal fade" id="modalUpdate{{ $owner->id }}" tabindex="-1" role="dialog" data-animation="effect-super-scaled"
            aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel2">Update Data Pemilik</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('update-pemilik', $owner->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $owner->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    value="{{ $owner->alamat }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $owner->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor HP</label>
                                <input type="tel" class="form-control" id="no_hp" name="no_hp"
                                    value="{{ $owner->no_hp }}" required>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-sm btn-info">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Modal Add -->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel2">Tambah Data Pemilik</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('tambah-pemilik') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Masukkan nama pemilik" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    placeholder="Masukkan alamat pemilik" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Masukkan email pemilik" required>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor HP</label>
                                <input type="tel" class="form-control" id="no_hp" name="no_hp"
                                    placeholder="Masukkan nomor HP pemilik" required>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-sm btn-primary">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script src="{{ asset('Template/lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('Template/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('Template/lib/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('Template/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script         src="{{ asset('Template/lib/js-cookie/js.cookie.js') }}"></script>
        <script src="{{ asset('Template/lib/chart.js/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('Template/lib/jquery.flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('Template/lib/jquery.flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('Template/lib/jquery.flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('Template/lib/jquery.flot/jquery.flot.threshold.js') }}"></script>
        <script src="{{ asset('Template/lib/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('Template/lib/jqvmap/maps/jquery.vmap.world.js') }}"></script>

        <script src="{{ asset('Template/assets/js/cassie.js') }}"></script>
        <script src="{{ asset('Template/assets/js/flot.sampledata.js') }}"></script>
        <script src="{{ asset('Template/assets/js/vmap.sampledata.js') }}"></script>
        <script src="{{ asset('Template/assets/js/dashboard-one.js') }}"></script>

        <script>
            $(document).ready(function () {
                // Activate feather icons
                feather.replace();

                // Initialize perfect scrollbar
                new PerfectScrollbar('.content');

                // Enable Bootstrap tooltips
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </body>
</html>

