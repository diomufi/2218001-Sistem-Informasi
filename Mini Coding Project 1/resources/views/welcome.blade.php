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

    <title>Healt Cat Analytics</title>

    <!-- vendor css -->
    <link href="{{asset ('Template/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset ('Template/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset ('Template/lib/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="{{asset ('Template/assets/css/cassie.css')}}">
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
            </ol>
          </nav>
          <h4 class="content-title content-title-xs">Welcome to Dashboard</h4>
        </div>
      </div><!-- content-header -->
    </div><!-- content -->

    <script src="{{asset ('Template/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset ('Template/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset ('Template/lib/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset ('Template/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset ('Template/lib/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset ('Template/lib/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset ('Template/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset ('Template/lib/jquery.flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset ('Template/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset ('Template/lib/jquery.flot/jquery.flot.threshold.js')}}"></script>
    <script src="{{asset ('Template/lib/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset ('Template/lib/jqvmap/maps/jquery.vmap.world.js')}}"></script>

    <script src="{{asset ('Template/assets/js/cassie.js')}}"></script>
    <script src="{{asset ('Template/assets/js/flot.sampledata.js')}}"></script>
    <script src="{{asset ('Template/assets/js/vmap.sampledata.js')}}"></script>
    <script src="{{asset ('Template/assets/js/dashboard-one.js')}}"></script>
  </body>
</html>
