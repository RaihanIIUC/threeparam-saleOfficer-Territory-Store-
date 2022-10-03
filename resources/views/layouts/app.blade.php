<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- add icon link -->
    <link rel="icon" href="https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png" type="image/x-icon">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    {{--  <link rel="stylesheet" href="resources/css/app.css">  --}}
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/js/app.js','resources/css/app.css']);




</head>

<body class="font-serif  antialiased ">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
@livewireScripts
<script>
    function alert_remover() {
        let x = document.getElementById("alert_remover");
        let y = document.getElementById("alert_remover_2");
        x.style.display = 'none';
        y.style.display = 'none';

    }

</script>

</html>
