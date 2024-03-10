<!doctype html>
<html class=" scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">



    {{-- ckeditor5 --}}
    <script src="\assets\ckeditor5-build-classic\ckeditor.js"></script>
    <title>{{ $title }}</title>




    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-primary ">
    @include('layouts.navbar')


    <main>
        {{ $slot }}
    </main>



    @include('layouts.footer')


    @stack('scripts')


    <script src="https://cdn.ckbox.io/ckbox/latest/ckbox.js"></script>

</body>

</html>
