<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow flex">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
                @if (isset($modalButton))
                    <div class="justify-center flex items-center mr-5">
                        {{ $modalButton }}
                    </div>
                @endif
            </header>
        @endif

        <!-- Page Content -->
        <main class="relative mx-auto grid gap-10 pt-50 grid-cols-2 ">
            <div class="grid gap-10 min-w-[400px]">
                <ul class="grid grid-cols-3 gap-6 h-[160px]">
                    {{ $slot }}
                </ul>
                @if(isset($barChart))
                    <div class="h-[400px]  p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                        {{ $barChart }}
                    </div>
                @endif
            </div>
            @if(isset($paiChart))
                <div class="grid gap-10 min-w-[400px] grid-cols-2">
                    {{ $paiChart }}
                </div>
            @endif
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>
