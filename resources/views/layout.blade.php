<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
   @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full overflow-hidden">
    @include('partials/header')

    <main class="w-full max-w-screen-xl mx-auto p-4">
        @yield('content')
    </main>
    

    @include('partials/footer')

    </div>
</body>
</html>