<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SISGENOACA | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    {{--Bootstrap--}}

    <link rel="stylesheet" href="/vendor/AdminLTE/bootstrap/css/bootstrap.min.css" />
    {{--<link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css" />--}}
    {{--<link rel="stylesheet" href="/vendor/Ionicons/css/ionicons.min.css" />--}}
    <link rel="stylesheet" href="/vendor/AdminLTE/dist/css/AdminLTE.min.css" />
    <link rel="stylesheet" href="/vendor/AdminLTE/dist/css/skins/_all-skins.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/style_form.css">

    <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>


@yield('content')


    <meta name="csrf_token" content="{{ csrf_token() }}" />
<!--<script src="/vendor/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>-->
{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') !!}
<script src="/vendor/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendor/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="/vendor/AdminLTE/plugins/fastclick/fastclick.js"></script>
{{--<script src="/vendor/angular/angular.min.js"></script>--}}
<script src="/vendor/AdminLTE/dist/js/app.min.js"></script>
<script src="/vendor/AdminLTE/dist/js/demo.js"></script>
<script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="/vendor/jquery-validation/src/additional/lettersonly.js"></script>
<script src="/vendor/jQuery.serializeObject/jquery.serializeObject.js" ></script>
<script src="/assets/js/registro.js" ></script>
<script src="/assets/js/objetivos.js" ></script>
<script src="/assets/js/user_create.js"></script>

</body>
</html>