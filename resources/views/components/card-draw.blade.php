@props([
'item',
])

<div
    class="w-full sm:w-90 h-80 bg-white rounded-xl border border-zinc-200 group overflow-hidden transition hover:shadow-lg group relative">

    @if($item->img_url)
    <figure class="bg-center relative bg-no-repeat bg-cover rounded-xl duration-300 group-hover:scale-110">
        <img class="w-full h-full object-cover object-center" src="{{asset('storage/'. $item->img_url)}}"
            alt="{{$item->img_url}}" />
    </figure>
    @else
    <div class="w-full aspect-video flex justify-center items-center bg-sky-50 text-sky-400 font-bold  text-4xl">
        IMG
    </div>
    @endif

    <div
        class="backdrop-blur-lg bg-gray-800/30 flex flex-col items-center justify-center gap-5 text-white p-5 opacity-0  group-hover:opacity-[1] absolute top-0 left-0 right-0 bottom-0 duration-300">

        <div class="flex justify-center items-center">
            <p class="text-base font-bold leading-normal">{{$item->title}}</p>
            {{ $badge ?? '' }}
        </div>

        <div class="flex justify-center">
            @if($item->url_instagram)
            <a href="{{$item->url_instagram}}" target="_blank"
                class="px-4 py-3 text-sm font-semibold border border-blue-600 bg-blue-600 hover:text-blue-50 text-white rounded-xl">
                Dettagli
            </a>
            @endif
        </div>
    </div>
</div>