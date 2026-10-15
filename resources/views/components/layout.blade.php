<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            {{ config('app.name') }}
        </title>

        @vite('resources/css/app.css')
    </head>
    <body class="bg-[#FFEDD6]">

        {{-- Include the header component --}}
        {{--@include('components.header')--}}
        <x-header />

        {{-- Display the content of the page that uses this layout --}}
        {{ $slot }}

        {{-- Include the footer component --}}
        {{--@include('components.footer')--}}
        <x-footer />

    </body>
</html>