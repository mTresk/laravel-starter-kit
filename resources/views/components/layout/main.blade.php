<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@props([
    'title' => 'Название сайта',
    'description' => 'Описание сайта',
])

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" href="{{ asset('/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('/site.webmanifest') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['src/app.ts', 'src/vue.ts'])
</head>

<body>
<div class="wrapper">
    <x-layout.header />
    <main class="main">
        {{ $slot }}
    </main>
    <x-layout.footer />
    @stack('script')
</div>
</body>

</html>
