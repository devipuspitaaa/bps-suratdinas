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
  </div>
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('assets/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('assets/vendors/flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('assets/vendors/flot/jquery.flot.categories.js') }}"></script>
  <script src="{{ asset('assets/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
  <script src="{{ asset('assets/vendors/flot/jquery.flot.stack.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/js/misc.js') }}"></script>
  <script src="{{ asset('assets/js/settings.js') }}"></script>
  <script src="{{ asset('assets/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <!-- End custom js for this page -->
</body>

</html>