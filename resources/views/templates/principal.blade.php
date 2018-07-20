<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo-pagina')</title>
    <!-- META para SEO -->
    <meta content="@yield('meta-descripcion')" name="description">
    <meta content="@yield('meta-keywords')" name="keywords">
    <meta content="Inelco IT Solutions S.A. de C.V." name="author">
    <meta content="Index, Follow" name="robots">
    <!-- META para Social Media -->
    <meta property="og:url" content="https://@yield('fb-url')">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('fb-titulo')">
    <meta property="og:description" content="@yield('fb-descripcion')">
    <meta property="og:image" content="http://@yield('fb-img')">
    <meta property="og:image:secure_url" content="https://@yield('fb-img')">
    <link href="https://@yield('fb-img')" rel="image_src">
    <!-- Favicon -->
    <link href="{{ asset('/assets/imagenes/icon/favicon.jpg') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('/assets/imagenes/icon/favicon.jpg') }}" rel="icon" type="image/jpg" >
    <!-- =========================
            FUENTES 
    ============================== -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600,700,800,900,400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
    @stack('agregar-fonts')
    <!-- =========================
            CSS 
    ============================== -->
    <!-- Bootstrap -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Owl Carousel Assets -->
    <link href="{{ asset('/assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/owl.theme.css') }}" rel="stylesheet">
    <!-- Pixeden Icon Font -->
    <link href="{{ asset('/assets/css/Pe-icon-7-stroke.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- PrettyPhoto -->
    <link href="{{ asset('/assets/css/prettyPhoto.css') }}" rel="stylesheet">
    <!-- Style -->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/animate.css') }}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet">
    @stack('agregar-css')
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>
	<![endif]-->
</head>

<body>
    <!-- PRELOADER -->
    <div class="spn_hol">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- END PRELOADER -->

    @include('templates.navbar')

    @yield('contenido')

    <!-- =========================
        SCROLL BUTTON 
    ============================== -->
    <a href="#" class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- END SCROLL -->

    @include('templates.footer')

    <!-- =========================
         SCRIPTS 
    ============================== -->
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.fitvids.js') }}"></script>
    <script src="{{ asset('/assets/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.parallax-1.1.3.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.ajaxchimp.langs.js') }}"></script>
    <script src="{{ asset('/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/assets/js/script.js') }}"></script>
    @stack('agregar-script')
</body>

</html>