<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('image/logo.png')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('resources/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('resources/plugins/summernote/summernote-bs4.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

@yield('header')

<!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('resources/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        .breadcrumb {
            background-color: transparent;
            margin-bottom: 0;
        }

        .color-red {
            color: red
        }

        .has-error {
            color: red;
        }

        .has-error input {
            border-color: red;
        }
    </style>
</head>

<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- BEGIN HEADER -->
@include('layout.top_nav')
<!-- BEGIN SIDEBAR -->
@include('layout.sidebar')
<!-- END SIDEBAR -->
    <div class="content-wrapper">
        @if(Session::has('success'))

            <div class="summary-errors alert alert-success alert-dismissible" style="display: block;">
                <button data-dismiss="alert" aria-label="Close" class="close" type="button">
                    <span aria-hidden="true">×</span>
                </button>
                <p>{{Session::get('success')}}</p>
            </div>


        @endif

        @if(Session::has('error'))

            <div class="summary-errors alert alert-danger alert-dismissible" style="display: block;">
                <button data-dismiss="alert" aria-label="Close" class="close" type="button">
                    <span aria-hidden="true">×</span>
                </button>
                <p>{{Session::get('error')}}</p>
            </div>


        @endif

    <!-- BEGIN CONTENT -->
        @yield('content')

    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@include('layout.footer')
<!-- jQuery -->
<script src="{{asset('resources/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('resources/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
@yield('footer')
<!-- AdminLTE App -->
<script src="{{asset('resources/dist/js/adminlte.min.js')}}"></script>

<script src="{{asset('resources/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script type="text/javascript" src="{{asset('resources/js/script.js')}}"></script>
<script>
    $(function () {
        $('#description').summernote();
    })
</script>
</body>
<!-- END BODY -->
</html>
