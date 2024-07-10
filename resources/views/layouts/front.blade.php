<!DOCTYPE html>
<html lang="en">
<head>
<title>Colo Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('front/assets/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('front/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('front/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/assets/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/assets/styles/responsive.css')}}">
</head>

<body>

@include('layouts.front.nav')

<main>
    @yield('content')
</main>

@include('layouts.front.footer')

<script src="{{asset('front/assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('front/assets/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('front/assets/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/aIsotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('front/assets/plugins/easing/easing.js')}}"></script>
<script src="{{asset('front/assets/js/custom.js')}}"></script>
</body>

</html>
