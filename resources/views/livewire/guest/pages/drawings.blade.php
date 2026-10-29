<div>
    <section class="mx-auto px-10 w-full h-full py-25 sm:py-25">
        <div class="flex flex-wrap justify-between mb-6">
            <div class="flex flex-col gap-1">
                <h1
                    class="font-serif-display text-3xl sm:text-4xl font-bold leading-tight tracking-tight text-[#212121]">
                    I miei
                    disegni</h1>
                <p class="font-normal leading-normal">Per lavori su richiesta
                    consultare e contattarmi presso la pagina instagram sottostante</p>
            </div>
        </div>

        <div class="flex flex-wrap gap-6">
            @if(isset($drawings))
            @foreach($drawings as $draw)
            <x-card-draw :item="$draw" />
            @endforeach
            @else
            <div
                class="w-full flex justify-center items-center text-gray-300 gap-5 text-center font-semibold text-xl mt-5 py-30 border rounded-xl bg-white">
                Sezione in allestimento
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-10 text-gray-200">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                </svg>
            </div>
            @endif

        </div>
        <p class="text-gray-500 mt-5">
            Altri lavori e sperimentazioni sono sul mio profilo GitHub.
            <a href="https://www.instagram.com/creative_store.pitanza/" target="_blank"
                class="text-blue-500 hover:text-blue-800 font-semibold">
                Vai nella pagina Instagram →
            </a>
        </p>
    </section>
</div>