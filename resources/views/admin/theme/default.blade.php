<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Rapid Car </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./theme/images/favicon.png">
    <link href="./theme/css/style.css" rel="stylesheet">
    <link href="./theme/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="./theme/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    @yield('css')

</head>

<body class="h-100">

    @extends('admin.theme.sidebar')

    <script src="./theme/vendor/global/global.min.js"></script>
    <script src="./theme/js/quixnav-init.js"></script>
    <script src="./theme/js/custom.min.js"></script>


    <script src="./theme/vendor/moment/moment.min.js"></script>
    <script src="./theme/vendor/pg-calendar/js/pignose.calendar.min.js"></script>

    <script src="./theme/js/dashboard/dashboard-2.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>

    @yield('js')
</body>

</html>