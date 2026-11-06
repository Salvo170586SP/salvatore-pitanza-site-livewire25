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

        <div class="flex w-full flex-wrap justify-center gap-5 mt-10 mx-auto">
            @if(isset($drawings))
            @foreach($drawings as $draw)
            <x-card-draw :item="$draw" />
            @endforeach
            @else
            <x-isset-placeholder />
            @endif
            <p class="w-full mt-10 text-center">
                Altri lavori e sperimentazioni sono sul mio profilo GitHub.
                <a href="https://www.instagram.com/creative_store.pitanza/" target="_blank"
                    class="text-blue-800 hover:text-blue-900 font-semibold">
                    Vai nella pagina Instagram →
                </a>
            </p>
        </div>
    </section>
</div>