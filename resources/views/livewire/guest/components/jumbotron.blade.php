<div>
    <section id="jumbotron"
        class="relative overflow-hidden w-full text-white bg-gradient-to-br from-indigo-400/10 to-transparent border-b border-zinc-800 py-55">
        <div class="absolute inset-0 z-0
            bg-[linear-gradient(to_right,#4f46e520_1px,transparent_1px),linear-gradient(to_bottom,#4f46e520_1px,transparent_1px)]
            bg-[size:6rem_6rem] [mask-image:radial-gradient(ellipse_70%_80%_at_50%_0%,#000_80%,transparent_100%)]">
        </div>
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-indigo-900/10 to-transparent"></div>
        <div class="flex justify-center items-center">
            <div class="flex flex-col items-center">
                <div class="px-10 md:px-32 ">
                    <div class="flex justify-between">
                        <div class="flex items-center jus gap-3">
                            @if($biography->img_url)
                            <figure
                                class="w-[70px] h-[70px]  border-3 border-indigo-100/50 rounded-full overflow-hidden">
                                <img src="{{ asset('/storage/'.$biography->img_url) }}"
                                    class="object-cover w-full h-full" />
                            </figure>
                            @endif
                            <div>
                                <h1 class="text-2xl font-medium uppercase">Salvatore Pitanza</h1>
                                <h4 class="text-[14px] font-semibold text-zinc-400">Web Developer FullStack - Art
                                    Creator - Walker</h4>
                            </div>
                        </div>
                    </div>
                    <p class="text-6xl font-bold mt-5">
                        Benvenuto nel mio <span class="text-blue-600">portfolio</span>
                    </p>
                    <p class="text-zinc-400 text-center font-semibold mt-2">
                        Le competenze, le passioni e la mia vita oltre il coding.
                    </p>
                </div>
                <div class="flex flex-col items-center mt-15">
                    <small class="text-lg font-semibold text-center mb-4 text-zinc-400">
                        Scopri le mie competenze nel mondo dello sviluppo
                        web
                    </small>
                    <button
                        class="bg-blue-600 hover:bg-blue-700 inline-flex items-center cursor-pointer py-3 px-5 hover:scale-110 transition-all rounded-[8px] font-medium z-10"
                        wire:navigate href="/skills">
                        Guarda le mie competenze
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>