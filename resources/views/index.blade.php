<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Template that use Bootstrap</title>

    <!-- Referencing Bootstrap CSS that is hosted locally -->
    {{--{{!! Html::style('assets/css/bootstrap.min.css') !!}}--}}
    <link rel="stylesheet" href="{{ 'assets/css/bootstrap.min.css' }}">
</head>
<body>
@section('sidebar')
    @show
<h1>Testing!</h1>
<div class="container">
    @yield('content')
</div>
</body>
</html>