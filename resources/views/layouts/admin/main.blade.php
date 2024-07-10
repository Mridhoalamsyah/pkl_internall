<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" href="{{asset('assets/images/favicon-32x32.png" type="image/png">
    <!-- loader-->
    <link href="{{asset('assets/css/pace.min.css')}} rel="stylesheet">
    <script src="{{asset('assets/js/pace.min.js')}}></script>

    <!--plugins-->
    <link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}} rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/metismenu/metisMenu.min.css')}}>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/metismenu/mm-vertical.css')}}>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}>
    <!--bootstrap css-->
    <link href="{{asset('assets/css/bootstrap.min.css')}} rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{asset('assets/css/bootstrap-extended.css')}} rel="stylesheet">
    <link href="../sass/main.css')}} rel="stylesheet">
    <link href="../sass/dark-theme.css')}} rel="stylesheet">
    <link href="../sass/blue-theme.css')}} rel="stylesheet">
    <link href="../sass/semi-dark.css')}} rel="stylesheet">
    <link href="../sass/bordered-theme.css')}} rel="stylesheet">
    <link href="../sass/responsive.css')}} rel="stylesheet">

</head>
<body>
@include('layouts.admin.nav')
@include('layouts.admin.sidebar')
<main class="main-wrapper">
    <div class="main-content">
        @yield('content')
    </div>
</main>
@include('layouts.admin.footer')
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}></script>

<!--plugins-->
<script src="{{asset('assets/js/jquery.min.js')}}></script>
<!--plugins-->
<script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}></script>
<script src="{{asset('assets/plugins/metismenu/metisMenu.min.js')}}></script>
<script src="{{asset('assets/plugins/apexchart/apexcharts.min.js')}}></script>
<script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}></script>
<script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}></script>
<script>
    $(".data-attributes span").peity("donut")
</script>
<script src="{{asset('assets/js/main.js')}}></script>
<script src="{{asset('assets/js/dashboard1.js')}}></script>
<script>
    new PerfectScrollbar(".user-list")
</script>

</body>
</html>
