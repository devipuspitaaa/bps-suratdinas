<!DOCTYPE html>
<html lang="en">
@include('layouts.header')

<body>
<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
      </div>
  </div>
  <!-- partial:partials/_sidebar.html -->
  <!-- navbar -->
  @include('layouts.sidebar')
  <!-- end navbar -->
  <!-- partial -->
  @yield('content')
  <!-- page-body-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  @include('layouts.footer')
  <!-- partial -->
  </div>
  <!-- main-panel ends -->