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

<body class="relative flex flex-col justify-between min-h-screen bg-[#18181B] text-white">
  <livewire:guest.components.header-nav />
  {{ $slot }}
  <livewire:guest.components.footer />
  @livewireScripts
  @fluxScripts
</body>

</html>