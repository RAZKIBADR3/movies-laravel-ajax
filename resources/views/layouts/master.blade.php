<!DOCTYPE html>
<html lang="en">
<head>
    {{-- meta --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('BS5/css/bootstrap.min.css') }}">
    {{-- title --}}
    <title>{{$title}}</title>
</head>
<body>
    <div class="container">
        @include('partials.header')
        @yield('content')
        <x-message />
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
