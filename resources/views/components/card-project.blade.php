@props([
'item',
])


<div class="w-full my-5">
    <div class="flex flex-col gap-4 group cursor-pointer">
        <div class="overflow-hidden rounded-xl border border-zinc-300 dark:border-zinc-700">
            @if($item->img_url)
            <figure
                class="bg-center relative bg-no-repeat aspect-video bg-cover shadow-inner-lg rounded-xl transition-transform duration-300 group-hover:scale-105">
                <img class="w-full h-full object-cover object-center shadow-inner-lg"
                    src="{{asset('storage/'. $item->img_url)}}" alt="{{$item->img_url}}" />
                <!-- overlay per l'ombra interna -->
                <div class="absolute inset-0 pointer-events-none rounded-xl shadow-inner-lg"></div>
            </figure>
            @else
            <div class="w-full bg-no-repeat aspect-video rounded-xl bg-zinc-800 flex justify-center items-center font-bold">
                No Img
            </div>
            @endif
        </div>
    </div>
    <div class="flex justify-between items-center my-2">
        <p class="text-[#212529] dark:text-white text-base font-bold leading-normal">{{$item->title}}</p>
        {{ $badge ?? '' }}
    </div>
    <p class="text-[#617589] dark:text-zinc-400 text-sm font-normal leading-normal">
        {{ $description ?? $item->description ?? '' }}
    </p>
    <div class="w-full flex gap-2 mt-2">
        {{-- slot variavile description --}}
        {{ $actions ?? '' }}
    </div>
</div>