<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marking System | @yield('page_title')</title>

    <link rel="stylesheet" href="{{ asset('plugins/Bootstrap/Css/bootstrap.min.css') }}">

    @stack('styles')
</head>
<body>

    {{-- @include('layouts.partials.nav') --}}

    <div class="">
        <div class="mt-4">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('plugins/Bootstrap/Js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/Jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>

    @stack('scripts')
</body>
</html>