<!DOCTYPE html>
<html lang="en">

<head>
@include('partials.client_head')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('partials.client_nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial -->
      <div class="main-panel">
        @include('partials.validation_errors')
        <!-- content-wrapper  -->
          @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('partials.client_footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('partials.client_scripts')

  @yield('scripts')

</body>

</html>

