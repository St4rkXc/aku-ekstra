<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyExtra</title>
    @vite('resources/css/app.css')
    @vite('resources/css/iconify.css')
    <style>
        html{
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@vite('resources/js/app.js')
</html>