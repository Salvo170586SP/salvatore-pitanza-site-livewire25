@props([
'skill'
])

<div wire:key="skill-[{{$skill->id}}]" {{ $attributes->class('rounded-xl border hover:shadow-lg transition
    border-zinc-300 bg-card-light p-5') }}>
    <div class="flex flex-col items-center justify-center">
        @if(!$skill->url_icon)
        <figure class="w-[30px] h-[30px] md:w-[40px] md:h-[40px]">
            <img src="{{asset('storage/'. $skill->url_icon)}}" alt="{{$skill->name}}" class="w-full h-full" />
        </figure>
        @else
        <div class="w-10 h-10 flex justify-center items-center font-medium text-[#B91C1C] bg-[#FEE2E2] rounded-lg">
            Lv
        </div>
        @endif
        <div class="w-full my-2 font-bold text-center text-sm md:text-md">
            {{$skill->name}}
        </div>
        {{$slot}}
    </div>
</div>