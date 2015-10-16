<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- jQuery -->
    <script src="{{ 'assets/js/jquery.min.js' }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ 'assets/js/bootstrap.min.js' }}"></script>

    <!-- Referencing Bootstrap CSS that is hosted locally -->
    <link rel="stylesheet" href="{{ 'assets/css/bootstrap.min.css' }}">
    <link rel="stylesheet" href="{{ 'assets/css/style.css' }}">
</head>
<body>
@include('layouts.navigation')

@yield('content')

@include('layouts.footer')
</body>
</html>