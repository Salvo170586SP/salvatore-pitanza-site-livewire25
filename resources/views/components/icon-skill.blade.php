@props([
'skill'
])

<div wire:key="skill-[{{$skill->id}}]" {{ $attributes->class('flex items-center justify-center rounded-xl border
    border-border-light dark:border-zinc-700 bg-card-light dark:bg-zinc-800 p-5') }}>
    <div class="flex flex-col items-center justify-center">
        @if($skill->url_icon)
        <figure class="w-[30px] h-[30px] md:w-[40px] md:h-[40px]">
            <img src="{{asset('storage/'. $skill->url_icon)}}" alt="{{$skill->name}}" class="w-full h-full" />
        </figure>
        @else
        <div class="text-xs font-medium">
            -
        </div>
        @endif
        <div class="w-full my-2 font-bold text-center text-sm md:text-md">
            {{$skill->name}}
        </div>
        {{$slot}}
    </div>
</div>