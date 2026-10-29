@props([
    'training',
])

<div
    class="w-full md:min-h-50 flex flex-col hover:shadow-lg transition items-center border border-zinc-200 bg-white rounded-xl p-5">
    <div class="w-full">
        <div class="text-primary">
            {!! $training->icon ?? 'n/d' !!}
        </div>
    </div>
    <div class="w-full my-2">
        <div class="flex flex-col">
            <p class="text-lg font-medium mb-2">{{$training->title ?? 'n/d'}}</p>
            <p class="text-sm font-normal leading-normal">
                {{$training->description ?? 'n/d'}}
            </p>
        </div>
    </div>
</div>