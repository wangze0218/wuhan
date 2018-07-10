<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>武汉科技大学</title>
    @include('front.public.style')
    <style>
        html,body{
            height:100%;
        }

    </style>
    @yield('style')
    @include('front.public.script')
</head>
<body>
    @include('front.public.header')
    @yield('content')
    {{--@include('front.public.footer')--}}
    @yield('script')
</body>
</html>