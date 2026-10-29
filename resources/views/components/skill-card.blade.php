{{-- resources/views/components/skill-card.blade.php --}}
@props([
'name',
'description' => null,
'url' => null,
'badge' => null,
'level',
])

@php
// Le classi devono essere scritte per intero: Tailwind le trova leggendo il file.
// Se le costruissi con "bg-{{ $tone }}-100", Tailwind non le genererebbe.

$levelLabel = $level instanceof \App\Enums\SkillLevels
? $level->value
: \App\Enums\SkillLevels::Base->value;
$levelRank = $level instanceof \App\Enums\SkillLevels
? $level->rank()
: \App\Enums\SkillLevels::Base->rank();
@endphp

<div {{ $attributes->class(['w-full sm:w-80 flex flex-col gap-3.5 rounded-[14px] border border-zinc-200 bg-white p-5 hover:shadow-lg transition']) }}>

    <div class="flex items-center gap-3">
        @if($url)
        <figure class="flex h-11 w-11 items-center justify-center rounded-[10px] bg-slate-100">
            <img src="{{asset('storage/'. $url)}}" alt="{{$name}}" class="w-6 h-6" />
        </figure>
        @else
        <span aria-hidden="true"
            class="flex h-11 w-11 shrink-0 items-center uppercase justify-center rounded-[10px] text-gray-500 font-bold bg-slate-100">
            {{ str($name)->substr(0, 2) }}
        </span>
        @endif

        <div>
            <h3 class="text-[17px] font-semibold text-slate-900">{{ $name }}</h3>

            @if ($description)
            <p class="mt-0.5 text-sm text-slate-600">{{ $description }}</p>
            @else
            <p class="mt-0.5 text-sm text-slate-600"> n/d </p>
            @endif
        </div>
    </div>

    <div class="flex items-center gap-2.5 text-[13px] text-slate-600">
        <span class="flex gap-1" aria-hidden="true">
            @foreach (range(1, 3) as $step)
            <span
                class="block h-1.5 w-7 rounded-full {{ $step <= $levelRank ? 'bg-blue-700' : 'bg-slate-300' }}"></span>
            @endforeach
        </span>

        <span class="font-medium capitalize">{{ $levelLabel }}</span>
    </div>
</div>