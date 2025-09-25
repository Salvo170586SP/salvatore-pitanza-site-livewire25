<div>
    <section id="jumbotron-skills"
        class="relative overflow-hidden w-full text-white bg-gradient-to-br from-indigo-400/10 to-transparent border-b border-zinc-800 py-40">
        <div class="absolute inset-0 z-0
         bg-[linear-gradient(to_right,#4f46e520_2px,transparent_2px),linear-gradient(to_bottom,#4f46e520_2px,transparent_2px)]
         bg-[size:6rem_6rem] [mask-image:radial-gradient(ellipse_70%_80%_at_50%_0%,#000_80%,transparent_100%)]">
        </div>
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-indigo-500/10 to-transparent"></div>
        <div class="flex justify-center items-center">
            <div class="flex flex-col items-center">
                <div class="px-10 md:px-32 ">
                    <p class="text-6xl font-bold mt-5">
                        I miei <span class="text-blue-600">Disegni</span>
                    </p>
                    <p class="mt-3 text-slate-300">Una raccolta di illustrazioni che raccontano il mio modo di vedere il
                        mondo
                        <br>
                        <span class="text-sm inline pt-5">
                            Per lavori su richiesta consultare e contattarmi presso la pagina instagram sottostante 
                        </span>
                    </p>

                    <div class="mt-10 w-full flex justify-center">

                        <a href="#" title="Instagram" class="transform hover:scale-110 transition-transform ">
                            <img class="w-6 h-6 md:w-9 md:h-9 invert" src="assets/icon/instagram.svg" alt="Instagram">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="work"
        class="w-full mx-auto flex flex-col py-10 md:py-20 items-center bg-zinc-900 bg-gradient-to-br from-indigo-300/10 text-white border-b border-zinc-800">
        @if($drawings)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 p-8 w-full max-w-7xl mx-auto">
            @foreach($drawings as $draw)
            <x-draw-card :item="$draw" />
            @endforeach
        </div>
        @else
        <div class="w-full text-center font-semibold text-slate-300 text-4xl mt-5">
            Sezione in allestimento 🛠️
        </div>
        @endif
    </section>
</div>