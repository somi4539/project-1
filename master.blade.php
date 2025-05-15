<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Full Stack Web Developer Portfolio: Showcasing Innovation and Expertise | Shuvo Bhowmik</title>
    <meta content="Explore the dynamic portfolio of a full stack web developer, showcasing innovation, expertise, and a passion for crafting cutting-edge web applications" name="description">
    <meta content="Full stack web developer, portfolio, web applications, innovation, expertise" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('upload/favicon.png') }}" rel="icon">
    <link href="{{ asset('upload/favicon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('Frontend/assets/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    


    <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Apr 4 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
    .topbar {
        background: #2d113b;

    }

    .header {
        background: #2d113b !important;
    }

    .hero {
        background: #2d113b !important
    }

    .icon-box {
        background: #361446 !important;
    }

    .contact .info-container {

        background: #2d113b !important;

    }

    .contact .info-item {

        background: #361446 !important
    }

    .contact .php-email-form button[type=submit] {
        background: #361446 !important;

    }

    .breadcrumbs .page-header {

        background: #2d113b;

    }

    .footer {

        background: #361446 !important
    }


    @media (max-width: 1279px) {

        .navbar ul {

            background: #361446 !important;

        }

    }
</style>

<body>

    @include('Frontend.body.topbar')

    @include('Frontend.body.header')

    <div>
        @yield('main')
    </div>



    <!-- ======= Footer ======= -->
    @include('Frontend.body.footer')
    
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>




    <!-- Vendor JS Files -->
    <script src="{{ asset('Frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <script src="{{ asset('Frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('Frontend/assets/js/main.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    
      <script>
    @if(Session::has('messages'))
        toastr.options = {
            "progressBar": true,
            "closeButton": true
        }

        @if(Session::get('messages')['type'] == 'success')
            toastr.success("{{ Session::get('messages')['text'] }}");
        @elseif(Session::get('messages')['type'] == 'error')
            toastr.error("{{ Session::get('messages')['text'] }}");
        @endif
    @endif
</script>

    



</body>

</html>
