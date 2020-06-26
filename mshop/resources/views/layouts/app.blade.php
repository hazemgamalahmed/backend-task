@include('layouts.parts.header')

  @include('layouts.parts.css.css')
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.parts.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('layouts.parts.mainSide')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 @include('layouts.parts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('layouts.parts.js.js')
</body>
</html>
