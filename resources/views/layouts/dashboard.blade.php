<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="sidebar-mini">
    <div class="wrapper">
        @include('layouts.dashboard-navigation')
        @include('layouts.dashboard-sidemenu')

        <!-- Page Content -->
        <main class="content-wrapper">

            <!-- Page Heading -->
            @if (isset($header))
                <header class="content-header bg-maroon" style="height: 120px;">
                    <div class="container-fluid">
                        {{ $header }}
                    </div>
                </header>
            @endif
            <div style="margin-top: -50px;" class="container">
                {{ $slot }}
            </div>
        </main>
        @include('layouts.dashboard-footer')
    </div>
</body>

</html>
