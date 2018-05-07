<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('asset/css/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/adminlte.min.css') }}">
    @stack('style')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('components.admin.navbar')
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        @include('components.admin.sidebar')
    </aside>
    <div class="content-wrapper">
        @include('components.admin.content-header')
       
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>
   
    <aside class="control-sidebar control-sidebar-dark">
        @yield('control-sidebar')
    </aside>
    @include('components.admin.footer')
</div>
<script src="{{ asset('asset/js/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('asset/js/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('asset/js/adminlte.js') }}"></script>
<script src="{{ asset('asset/js/demo.js') }}"></script>
<script src="{{ asset('asset/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('asset/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('asset/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('asset/js/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('asset/js/plugins/chartjs-old/Chart.min.js') }}"></script>
<script src="{{ asset('asset/js/pages/dashboard2.js') }}"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script type="text/javascript">
    $(function () {
        $(".sidebar").niceScroll();
        $("body").niceScroll();
        $("html").niceScroll();
    });
</script>
@stack('script')
</body>
</html>
