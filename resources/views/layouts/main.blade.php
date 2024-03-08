<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volet Administrateur</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
@include('includes.header')

@yield('content')

@include('includes.footer')
</body>
</html>
