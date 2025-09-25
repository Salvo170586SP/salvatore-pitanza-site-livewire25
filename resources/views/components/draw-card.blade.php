@props([
'item',
])

<div {{ $attributes->merge(['class' => 'relative flex flex-col justify-between items-center bg-[#171717] border
    border-zinc-600/30 overflow-hidden group rounded-xl transition duration-300 ease-in-out']) }}>
    <figure class="w-full h-[250px] group-hover:scale-110 transition-all duration-300 overflow-hidden">
        <img class="w-full h-full object-cover object-center inset-5 shadow-2xl"
            src="{{asset('storage/'. $item->img_url)}}" alt="{{$item->img_url}}" />
    </figure>
    <div class="h-full absolute top-0 left-0 right-0 bottom-0 opacity-0 hover:opacity-100 transition-all">
        <div
            class="w-full h-full font-bold p-4 text-center flex justify-between items-end bg-gradient-to-t from-black/60 via-black/10 to-transparent">
            <h3 class="mb-2 text-white">{{$item->title}}</h3>
            <div class="w-full flex justify-end">
                @if($item->url_instagram)
                <a href="{{$item->url_instagram}}" target="_blank"
                    class="cursor-pointer flex items-center bg-blue-600 hover:bg-blue-700 px-5 py-2 text-xs text-white font-medium rounded-lg">
                    Guarda
                </a>
                @endif
            </div>
        </div>
    </div>
</div>