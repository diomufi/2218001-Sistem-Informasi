<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Manajemen Data Penyakit">
    <meta name="author" content="YourName">

    <title>Manajemen Data Penyakit</title>

    <link href="{{ asset('Template/lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Template/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Template/lib/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
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
                </div>
            </div>
        </div>
        <div class="content-header justify-content-between">
            <div>
                <h4 class="content-title content-title-xs">Manajemen Data Penyakit</h4>
            </div>
        </div>

        <div class="card card-body">
            <div class="row mb-3">
                <div class="col">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">Tambah Data Penyakit</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-primary table-hover table-striped mg-b-0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Kode Penyakit</th>
                            <th>Nama Penyakit</th>
                            <th>Nama Latin</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penyakits as $penyakit)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $penyakit->kode_penyakit }}</td>
                            <td>{{ $penyakit->nama_penyakit }}</td>
                            <td>{{ $penyakit->nama_latin }}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm btn-selengkapnya" data-deskripsi="{{ $penyakit->deskripsi }}" data-toggle="modal" data-target="#modalDeskripsi">Selengkapnya</button>
                            </td>
                            <td>
                                <form action="{{ route('hapus-penyakit', $penyakit->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Penyakit -->
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahLabel">Tambah Data Penyakit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formTambahPenyakit" action="{{ route('tambah-penyakit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="kodePenyakit">Kode Penyakit</label>
                            <input type="text" class="form-control" id="kodePenyakit" name="kode_penyakit" required>
                        </div>
                        <div class="form-group">
                            <label for="namaPenyakit">Nama Penyakit</label>
                            <input type="text" class="form-control" id="namaPenyakit" name="nama_penyakit" required>
                        </div>
                        <div class="form-group">
                            <label for="namaLatin">Nama Latin</label>
                            <input type="text" class="form-control" id="namaLatin" name="nama_latin">
                        </div>
                        <div class="form-group">
                            <label for="deskripsiPenyakit">Deskripsi</label>
                            <textarea class="form-control" id="deskripsiPenyakit" name="deskripsi" rows="3"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Deskripsi -->
    <div class="modal fade" id="modalDeskripsi" tabindex="-1" role="dialog" aria-labelledby="modalDeskripsiLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeskripsiLabel">Deskripsi Penyakit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="deskripsiContent"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('Template/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Template/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
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
    <script src="{{ asset('Template/assets/js/cassie.js') }}"></script>
    <script src="{{ asset('Template/assets/js/flot.sampledata.js') }}"></script>
    <script src="{{ asset('Template/assets/js/vmap.sampledata.js') }}"></script>
    <script src="{{ asset('Template/assets/js/dashboard-one.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Menampilkan deskripsi penyakit saat tombol "Selengkapnya" diklik
            $(document).on('click', '.btn-selengkapnya', function() {
                var deskripsi = $(this).data('deskripsi');
                $('#deskripsiContent').text(deskripsi);
            });

        });
    </script>