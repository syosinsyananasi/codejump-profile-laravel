<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    @vite(['resources/css/app.css'])
</head>

<body>
    <main class="max-w-[960px] mx-auto p-4%">
        @include('components.header')
        @yield('content')
        @include('components.footer')
    </main>
</body>

</html>
