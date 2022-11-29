<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>


    <link href="{{ url('css/framework.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/owl.theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/swipebox.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/modals.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/media-queries.css') }}" rel="stylesheet" type="text/css">

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</head>
<body>

    

    <div class="mainWrapper">

        @include('partials/cardheader')

        @yield('content')

        @include('partials/cardfooter')

    </div>


    @include('partials/meetingModal')
    @include('partials/referModal')
    @include('partials/infoModal')

</body>
</html>

<script type="text/javascript" src="{{ url('js/custom.js') }}"></script>