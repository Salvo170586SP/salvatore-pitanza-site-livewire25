@props([
'item',
])

<div class="w-full sm:w-90 bg-white rounded-xl border border-zinc-200 group overflow-hidden transition hover:shadow-lg">
    <div class="flex flex-col gap-4 overflow-hidden h-50">
        @if($item->img_url)
        <figure
            class="bg-center relative bg-no-repeat aspect-video bg-cover rounded-xl duration-300 group-hover:scale-110">
            <img class="w-full h-full object-cover object-center" src="{{asset('storage/'. $item->img_url)}}"
                alt="{{$item->img_url}}" />
        </figure>
        @else
        <div class="w-full aspect-video flex justify-center items-center bg-sky-50 text-sky-400 font-bold text-4xl">
            IMG
        </div>
        @endif
    </div>
    <div class="p-3 h-70 flex flex-col border-t">
        <div class="flex-1">
            <div class="flex justify-between items-center mt-2 mb-3">
                <p class="text-[#212529] text-base font-bold leading-normal">{{$item->title}}</p>
                {{ $badge ?? '' }}
            </div>
            <p class="text-gray-600 text-sm leading-normal">
                {{ $description ?? $item->description ?? '' }}
            </p>
            <div class="w-full flex flex-wrap gap-2 mt-3">
                @if($item->url_git)
                <span class="px-4 py-1 bg-blue-50 text-sm font-semibold text-blue-800 rounded-full">
                    Livewire
                </span>
                @endif
            </div>
        </div>


        <div class="w-full flex gap-2">
            @if($item->url_git)
            <a href="{{$item->url_git}}" target="_blank"
                class="px-4 py-3 text-sm font-semibold border border-zinc-200 hover:text-sky-600 text-zinc-800 rounded-xl">
                Repository
            </a>
            @endif
            @if($item->url_web)
            <a href="{{$item->url_web}}" target="_blank"
                class="px-4 py-3 text-sm font-semibold border border-blue-200 bg-blue-600 hover:text-blue-50 text-white rounded-xl">
                Demo live</a>
            @endif
        </div>
    </div>
</div>