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

    <title>Manajemen Kucing</title>

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
                <h4 class="content-title content-title-xs">Manajemen Kucing</h4>
            </div>
        </div><!-- content-header -->
        <div class="card card-body">
            <div class="container">
                <div class="row mb-3">
                    <div class="col">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Tambah Kucing</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-primary table-hover table-striped mg-b-0">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama Kucing</th>
                                <th scope="col">Nama Pemilik</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Usia</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cats as $cat)
                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->nama }}</td>
                                <td>{{ $cat->owner->nama }}</td>
                                <td>{{ $cat->jenis }}</td>
                                <td>{{ $cat->usia }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalUpdate{{ $cat->id }}">Update</a>
                                    <a href="#" class="btn btn-sm btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $cat->id }}').submit();">Delete</a>
                                    <form id="delete-form-{{ $cat->id }}" action="{{ route('hapus-kucing', $cat->id) }}" method="POST" style="display: none;">
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
        @foreach($cats as $cat)
        <div class="modal fade" id="modalUpdate{{ $cat->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel2">Update Data Kucing</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('update-kucing', $cat->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $cat->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis</label>
                                <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $cat->jenis }}" required>
                            </div>
                            <div class="form-group">
                                <label for="usia">Usia</label>
                                <input type="number" class="form-control" id="usia" name="usia" value="{{ $cat->usia }}" required>
                            </div>
                            <div class="form-group">
                                <label for="owner_id">Pemilik</label>
                                <select class="form-control" id="owner_id" name="owner_id" required>
                                    @foreach($owners as $owner)
                                    <option value="{{ $owner->id }}" {{ $cat->owner_id == $owner->id ? 'selected' : '' }}>{{ $owner->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Modal Tambah -->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">Tambah Kucing</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('tambah-kucing') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis</label>
                                <input type="text" class="form-control" id="jenis" name="jenis" required>
                            </div>
                            <div class="form-group">
                                <label for="usia">Usia</label>
                                <input type="number" class="form-control" id="usia" name="usia" required>
                            </div>
                            <div class="form-group">
                                <label for="owner_id">Pemilik</label>
                                <select class="form-control" id="owner_id" name="owner_id" required>
                                    @foreach($owners as $owner)
                                    <option value="{{ $owner->id }}">{{ $owner->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('Template/lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('Template/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('Template/lib/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('Template/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('Template/lib/jquery.flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('Template/lib/jquery.flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('Template/lib/jquery.flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('Template/lib/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('Template/lib/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
        <script src="{{ asset('Template/assets/js/cassie.js') }}"></script>
        <script>
            $(function() {
                'use strict'

                $('#modal1').on('shown.bs.modal', function() {
                    $('#nama').trigger('focus')
                })
            });
        </script>
    </div>
</body>
</html>
