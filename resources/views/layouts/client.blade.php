<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token() }}">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset ('assets/clients/img/favicon.png')}}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{asset ('assets/clients/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset ('assets/clients/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset ('assets/clients/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset ('assets/clients/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    {{-- Custom css --}}
    <link rel="stylesheet" href="{{asset('assets/clients/css/custom.css')}}">
</head>

<body>
    <!-- Body main wrapper start -->
    <div class="wrapper">
        @include('clients.partials.header')

        @hasSection('breadcrumb')
            @include('clients.partials.breadcrumb')
        @endif
        
        <main>
            @yield('content')
        </main>

        @include('clients.partials.feature')

        @include('clients.partials.footer')
       
   </div>
    <!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->


    {{-- JQUERRY --}}

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"> </script>
    <!-- All JS Plugins -->
    <script src="{{asset ('assets/clients/js/plugins.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset ('assets/clients/js/main.js')}}"></script>

    {{-- toast notification --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"> </script>

    {{-- MY JS --}}

    <script src="{{asset ('assets/clients/js/custom.js')}}">  </script>

</body>

</html>