
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
 @include('layouts.includes.head')
</head>
<body class="hold-transition sidebar-mini">
 
<div class="wrapper">
   @include('layouts.includes.navbar')
  <!-- Main Sidebar Container -->
 @include('layouts.includes.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 @yield('body')
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
 @include('layouts.includes.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('layouts.includes.script')
</body>
</html>
