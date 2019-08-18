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
    <div class="container mx-auto bg-white h-20 flex items-center justify-between px-5 lg:px-0 lg:h-16">
        <div class="text-2xl text-grey-400">shortly</div>
        <div>
            <svg class="fill-current h-8 w-8 text-grey-400 lg:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </div>
    </div>
    <div class="bg-lines">
        @yield('content')
    </div>
</body>

</html>
