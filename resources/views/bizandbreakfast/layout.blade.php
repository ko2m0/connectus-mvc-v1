<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full overflow-hidden">
        
        @include('partials/biznbreakfast/header')
    

    <main class="w-full max-w-screen-xl mx-auto lg:my-20">
        @yield('content')
    </main>
    

    @include('partials/biznbreakfast/footer')

    </div>
</body>
</html>