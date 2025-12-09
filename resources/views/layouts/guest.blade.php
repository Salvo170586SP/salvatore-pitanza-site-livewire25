<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Salvatore Pitanza' }}</title>

  <link rel="icon" type="image/png" href="{{ asset('assets/icon/code.png') }}">


  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles
  @fluxAppearance
</head>

<body class="container mx-auto w-full h-full px-15 font-display text-black font-display bg-light dark:bg-zinc-900 text-text-light dark:text-text-dark">
  <livewire:guest.components.header-nav />
  {{ $slot }}
  <livewire:guest.components.footer />
  @livewireScripts
  @fluxScripts
</body>



</html>