<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Appearance')" :subheading="__('La modalità chiara è sempre attiva')">
        <p class="text-sm text-zinc-600">{{ __('L’applicazione usa sempre la modalità chiara, indipendentemente dal tema del sistema.') }}</p>
    </x-settings.layout>
</section>
