<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.css')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  @include('admin.navbar')

  @include('admin.sidebar')

    <div class="content-wrapper">
      @include('admin.header')

      @include('admin.body')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>s
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('admin.footer')
</body>
</html>
