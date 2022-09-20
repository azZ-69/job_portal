<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="" href="{{asset('css/style.css')}}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body class="antialiased">
    <h1>{{$name}}, {{$age}}</h1>
{{--       <h1 style="color: blue">HELLO</h1>--}}
{{--    <p>Hello I am the world last taco bender</p>--}}
    </body>
</html>

