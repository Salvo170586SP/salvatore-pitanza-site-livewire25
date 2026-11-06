@props([
'item',
])

<div
    class="w-full h-[30rem] sm:w-full md:w-90 bg-white rounded-xl border border-zinc-200 group flex flex-col overflow-hidden transition hover:shadow-lg">
    
    <div class="h-50 shrink-0 flex flex-col gap-4 overflow-hidden">
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

    <div class="p-3 flex flex-1 min-h-0 flex-col border-t">
        <div class="flex-1 min-h-0 overflow-hidden">
            <div class="flex justify-between items-center mt-2 mb-3">
                <p class="text-[#212529] text-base font-bold leading-normal line-clamp-2">{{$item->title}}</p>
                {{ $badge ?? '' }}
            </div>
            <p class="text-gray-600 text-sm leading-normal line-clamp-3">
                {{ $description ?? $item->description ?? '' }}
            </p>
            <div class="w-full max-h-16 flex flex-wrap gap-2 mt-3 overflow-hidden">
                @forelse($item->skills as $skill)
                <span class="px-3 py-1 bg-blue-50 text-xs font-semibold text-blue-800 rounded-full">
                    {{$skill->name}}
                </span>
                @empty
                -
                @endforelse
            </div>
        </div>

        <div class="w-full flex shrink-0 gap-2 mt-3">
            @if($item->url_git)
            <a href="{{$item->url_git}}" target="_blank"
                class="px-4 py-3 text-sm font-semibold border border-zinc-200 hover:text-sky-600 text-zinc-800 rounded-xl">
                Repository
            </a>
            @endif
            @if($item->url_web)
            <a href="{{$item->url_web}}" target="_blank"
                class="px-4 py-3 text-sm font-semibold border bg-black hover:text-blue-50 text-white rounded-xl">
                Demo live</a>
            @endif
        </div>
    </div>

</div>