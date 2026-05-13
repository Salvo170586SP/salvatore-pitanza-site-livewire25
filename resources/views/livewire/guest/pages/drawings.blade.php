<div>
    <section class="container w-full h-full py-20">
        <div class="flex flex-wrap justify-between p-6">
            <div class="flex min-w-72 flex-col gap-1">
                <p class="text-[#212529] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">I miei
                    disegni</p>
                <p class="text-[#617589] dark:text-zinc-400 text-sm font-normal leading-normal">Per lavori su richiesta
                    consultare e contattarmi presso la pagina instagram sottostante</p>
            </div>
        </div>

        @if($drawings && count($drawings) == 0)
        <div class="w-full text-center text-zinc-500 text-xl my-5">
            Sezione in allestimento
        </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:px-5 w-full">
            @foreach($drawings as $draw)
            <x-card-project :item="$draw" />
            @endforeach
        </div>


        <div
            class="mt-8 flex flex-col items-center justify-center gap-4 rounded-xl bg-primary/10  dark:bg-zinc-800 dark:border dark:border-zinc-700  p-8 text-center">
            <h3 class="text-2xl font-bold text-[#212121] dark:text-white">Vuoi realizzare o regalare un ritratto?</h3>
            <p class="max-w-md text-gray-700 dark:text-zinc-300">Consulta il mio profilo Instagram dedicato.</p>
            <a class="dark:text-zinc-300 bg-light dark:bg-zinc-800 hover:bg-light/60 dark:hover:bg-zinc-900  transition-colors flex items-center gap-3 border border-zinc-400 dark:border-zinc-700 rounded-xl px-4 py-2"
                href="#">
                <svg viewBox="0 -0.5 25 25" fill="none" class="size-8" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" c stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.5 5H9.5C7.29086 5 5.5 6.79086 5.5 9V15C5.5 17.2091 7.29086 19 9.5 19H15.5C17.7091 19 19.5 17.2091 19.5 15V9C19.5 6.79086 17.7091 5 15.5 5Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.5 15C10.8431 15 9.5 13.6569 9.5 12C9.5 10.3431 10.8431 9 12.5 9C14.1569 9 15.5 10.3431 15.5 12C15.5 12.7956 15.1839 13.5587 14.6213 14.1213C14.0587 14.6839 13.2956 15 12.5 15Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <rect x="15.5" y="9" width="2" height="2" rx="1" transform="rotate(-90 15.5 9)"
                            fill="currentColor">
                        </rect>
                        <rect x="16" y="8.5" width="1" height="1" rx="0.5" transform="rotate(-90 16 8.5)"
                            stroke="currentColor" stroke-linecap="round"></rect>
                    </g>
                </svg>
                Contattami
            </a>
        </div>
    </section>
</div>