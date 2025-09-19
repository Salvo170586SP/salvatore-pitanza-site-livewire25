<div>
    <section id="about"
        class="w-full container mx-auto flex flex-col py-10 md:py-20 items-center text-white border-b border-zinc-800">
        <div class="text-center w-full py-15 md:py-0 md:pb-10">
            <h2 class="font-bold text-xl md:text-2xl text-zinc-300">
                Un pò di me
            </h2>
        </div>
        <div class="flex justify-center items-center flex-col lg:flex-row text-center gap-5 px-4 md:px-0">
            @if (!$biography)
            <p class="font-medium text-zinc-400">Biografia al momento non disponibile.</p>
            @else
            @if ($biography->img_url)
            <figure class="w-[250px] h-[250px]  md:me-20  overflow-hidden rounded-[15px]">
                <img src="{{ asset('storage/' . $biography->img_url) }}" alt="{{$biography->img_url}}"
                    class="w-full h-full object-cover" />
            </figure>
            @else
            <div
                class="w-[250px] h-[250px] me-20 overflow-hidden rounded-[20px] bg-zinc-800 flex justify-center items-center font-bold">
                NO IMG
            </div>
            @endif
            <div
                class="w-full md:w-2/3 lg:w-1/3 flex flex-col justify-center items-center text-justify text-sm lg:text-base mt-5 lg:mt-0 px-10 md:px-0">
                <p class="font-semibold text-zinc-400">
                    {{$biography->description}}
                </p>
                <div class="w-full my-4 md:my-5 lg:mt-10">
                    <button wire:navigate href="/about-me"
                        class="bg-blue-600 hover:bg-blue-700 hover:scale-110 text-sm mt-5 flex items-center rounded-[7px] font-semibold transition-all  px-8 py-2 cursor-pointer">
                        Dettagli
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
            @endif
        </div>
    </section>
</div>