<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/kate.png')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href='{{asset("assets/bootstrap/css/bootstrap.min.css")}}'/>

</head>
<body>  
    <!-- Navbar Start -->
    @include('include.nav')
    <!-- Navbar End -->

    <!-- <div class="container"> -->
   <!-- Page content -->
    @yield('content')
    <!-- End Page Content -->
    </div>

    <!-- Script -->
    <script src="{{ asset('assets/bootstrap/js/vendor/jquery-slim.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>