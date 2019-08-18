<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shortly</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">

    {{-- CSS Assets --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="font-sans">
    <div class="bg-white absolute top-0 right-0 left-0">
        <div class="container mx-auto flex items-center h-20 lg:h-16 px-5 lg:px-0">
            <div class="text-2xl text-grey-400">shortly</div>
        </div>
    </div>
    <div class="bg-lines h-screen bg-grey-100">
        @yield('content')
    </div>
</body>

</html>
