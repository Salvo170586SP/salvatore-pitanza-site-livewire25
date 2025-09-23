@props([
    'training',
])

<div
    class="w-100 md:w-150 lg:w-250 overflow-hidden md:h-full flex flex-col md:flex-row justify-center items-center border bg-gray-600/20  border-zinc-800 transition rounded-xl bg-zinc-00">
    <div class="w-full h-[60px] md:w-[150px] md:h-[150px] bg-gray-500/20 flex justify-center items-center text-white">
        {!! $training->icon ?? 'n/d' !!}
    </div>
    <div class="w-full my-2 px-5 ">
        <p class="text-xl font-bold">{{$training->title ?? 'n/d'}}</p>
        <p class="text-sm font-bold">{{$training->subtitle ?? 'n/d'}}</p>
        <p class="font-medium text-xs">
            {{$training->description ?? 'n/d'}}
        </p>
    </div>
</div>