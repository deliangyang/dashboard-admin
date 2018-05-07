<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script type="text/javascript">
    $(function () {
        $(".sidebar").niceScroll();
        $("body").niceScroll();
        $("html").niceScroll();
    });
</script>
<script src="{{ asset('asset/js/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('asset/js/adminlte.js') }}"></script>
<script src="{{ asset('asset/js/demo.js') }}"></script>
<script src="https://cdn.bootcss.com/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
<script src="https://cdn.bootcss.com/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
<script src="https://cdn.bootcss.com/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
@stack('script')
</body>
</html>
