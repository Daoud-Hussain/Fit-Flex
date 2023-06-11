<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Blog Site</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
    </head>
    <style>
        .card {
            color: black;
			margin: 0 auto;
			margin-left: 5%;
			margin-right: 5%;
			margin-top: 25px; /* adjust as needed */
		}
        .theme {
            /* background-color: #311b92; */
            color: #fff;
            background: linear-gradient(to right, #870000, #190a05); 
        }
        
        .form-wrapper {
            max-width: 500px;
            margin: 100px auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            color: #000;
        }
        .form-control, .form-wrapper{
            border: 1px solid #870000;
        }
    #button{
        background-color: #1565c0;
        color: #fff;
    }
    </style>

    <body class="font-sans antialiased">
        <div class="min-h-screen theme">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
