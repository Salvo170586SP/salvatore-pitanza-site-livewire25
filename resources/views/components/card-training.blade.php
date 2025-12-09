@props([
    'training',
])

<div
    class="w-100 overflow-hidden md:h-full flex flex-col  justify-center items-center border dark:border-zinc-700 bg-white dark:bg-zinc-800 rounded-lg dark:text-zinc-300 p-5">
    <div class="w-full">
        {!! $training->icon ?? 'n/d' !!}
    </div>
    <div class="w-full my-2  ">
        <p class="text-xl font-bold dark:text-white">{{$training->title ?? 'n/d'}}</p>
        <p class="text-sm font-bold">{{$training->subtitle ?? 'n/d'}}</p>
        <p class="font-medium text-xs">
            {{$training->description ?? 'n/d'}}
        </p>
    </div>
</div>