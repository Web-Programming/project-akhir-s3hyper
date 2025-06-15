
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin-lte/header')
    <style>
        /* Background untuk halaman dashboard */
        body {
            background-image: url('{{ asset('images/background-perpus.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }

        /* Biar isi konten transparan */
        .content-wrapper {
            background-color: transparent !important;
        }

        /* Optional: membuat .card transparan sedikit buram */
        .card {
            background-color: rgb(255, 255, 255) !important;
            backdrop-filter: blur(3px);
        }

        /* Optional: transparansi di small-box (info box) */

        .small-box .icon i {
            color: rgba(255, 255, 255, 0.9);
        }

        /* Tambahan opsional agar font terlihat jelas */
        .small-box .inner h3,
        .small-box .inner p {
            color: #fff;
        }
         .nav-sidebar .nav-item > .nav-link.active {
        color: #ffffff !important;
    }

    .nav-sidebar .nav-item > .nav-link.active .nav-icon,
    .nav-sidebar .nav-item > .nav-link.active p {
        color: #ffffff !important;
    }

    .nav-sidebar .nav-item > .nav-link.active p {
        font-weight: bold;
    }
    .nav-sidebar .nav-item > .nav-link:hover {
    color: #ffffff !important;
}
    </style>

    @livewireStyles
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
    @include('admin-lte/preloader')

  <!-- Navbar -->
    @include('admin-lte/navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('admin-lte/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        @include('admin-lte/main-header')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
            @yield('content')
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    @include('admin-lte/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin-lte/javascript')
@yield('script')
@livewireScripts
@yield('chart-script')
</body>
</html>
