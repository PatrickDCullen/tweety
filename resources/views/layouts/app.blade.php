<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <section class="px-8 py-4 mb-6">
            <header class="container mx-auto">
                <h1>
                    <img src="https://raw.githubusercontent.com/laracasts/Tweety/master/public/images/logo.svg" alt="Tweety">
                </h1>
            </header>
        </section>

        <section class="px-8">
            <main class="container mx-auto">
                <div class="lg:flex lg:justify-between">
                    <div class="lg:w-32">
                        @include ('_sidebar-links')
                    </div>

                    <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                        @yield('content')
                    </div>

                    <div class="lg:w-1/6">
                        @include ('_friends-list')
                    </div>
                </div>
            </main>
        </section>
    </div>
</body>
</html>
