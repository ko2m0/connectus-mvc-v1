<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<!--
    <link href="{{url('owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ url('owl.theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ url('swipebox.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ url('css/site.css') }}">
    <link href="styles/modals.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ url('css/framework.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/media-queries.css') }}">
-->    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials/header')

    @yield('content')

    @include('partials/footer')

</body>
</html>