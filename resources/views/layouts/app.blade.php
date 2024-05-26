<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" class="">

        <!-- Topbar -->
        @include('layouts.navbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
          </div>

          <div class="bg-light text-black" >
            @yield('contents')
          </div>

          <!-- Content Row -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  @include('layouts.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="{{ asset('portfolio_assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('portfolio_assets/vendor/typed.js/typed.umd.js') }}"></script>

    <script src="{{ asset('portfolio_assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('portfolio_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('portfolio_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('portfolio_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('portfolio_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('portfolio_assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('portfolio_assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('portfolio_assets/js/main.js') }}"></script>

</body>
</html>
