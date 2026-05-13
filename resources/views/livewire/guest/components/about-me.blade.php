<div>
    <!-- FeatureSection -->
    <section id="about">
        <div class="flex flex-col gap-10 px-2 mb-10 sm:px-4">
            <div class="flex flex-col md:flex-row gap-4 text-center items-center justify-center">

                @if ($biography && $biography->img_url)
                <figure
                    class="border dark:border-zinc-600 md:w-[250px] md:h-[250px]  w-[150px]  h-[150px] md:me-20  overflow-hidden rounded-xl">
                    <img src="{{ asset('storage/' . $biography->img_url) }}" alt="{{$biography->img_url}}"
                        class="w-full h-full object-cover" />
                </figure>
                @else
                <div
                    class="border text-white dark:border-zinc-600 md:w-[250px] md:h-[250px]  w-[150px]  h-[150px] me-20 overflow-hidden rounded-[20px] bg-zinc-800 flex justify-center items-center font-bold">
                    NO IMG
                </div>
                @endif

                <div class="text-center md:text-start">
                    <h1 class="text-3xl font-bold leading-tight tracking-tight sm:text-3xl max-w-3xl">
                        A volte il passo lento è quello che porta più lontano.
                    </h1>
                    <p class="text-sm mt-2 font-normal leading-normal text-subtle-light dark:text-zinc-400 max-w-2xl">
                        Scelgo di dare priorità alla precisione e alla cura dei dettagli. Credo che ogni
                        progetto abbia bisogno del suo ritmo: avanzare con consapevolezza permette di costruire
                        soluzioni solide, durature e davvero utili. Non si tratta di correre, ma di arrivare con
                        qualità.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-0">
                <div
                    class="flex flex-1 gap-4 rounded-xl border border-border-light dark:border-zinc-700 bg-card-light dark:bg-zinc-800 p-6 flex-col">
                    <div class="text-primary dark:text-zinc-500">
                        <span class="material-symbols-outlined text-3xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-15">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                            </svg>
                        </span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="text-lg font-bold leading-tight">Introduzione Professionale</h2>
                        <p class="text-xs font-normal leading-normal text-subtle-light/80 dark:text-zinc-400">
                            Specializzato nella creazione di applicazioni gestionali performanti, sfruttando
                            l'architettura
                            Laravel e l'interfaccia dinamica offerta da Livewire.
                        </p>
                    </div>
                </div>
                <div
                    class="flex flex-1 gap-4 rounded-xl border border-border-light dark:border-zinc-700 bg-card-light dark:bg-zinc-800 p-6 flex-col">
                    <div class="text-primary dark:text-zinc-500">
                        <span class="material-symbols-outlined text-3xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-15">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>

                        </span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="text-lg font-bold leading-tight">Profilo Personale</h2>
                        <p class="text-xs font-normal leading-normal  text-subtle-light/80 dark:text-zinc-400">
                            Oltre all'informatica, la mia passione è la natura: sono un assiduo praticante di walking e
                            amo
                            la montagna. Questi luoghi mi insegnano l'importanza della chiarezza e della tenacia nel
                            raggiungere qualsiasi obiettivo.
                        </p>
                    </div>
                </div>
                <div
                    class="flex flex-1 gap-4 rounded-xl border border-border-light dark:border-zinc-700 bg-card-light dark:bg-zinc-800 p-6 flex-col">
                    <div class="text-primary dark:text-zinc-500">
                        <span class="material-symbols-outlined text-3xl"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-15">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                            </svg>
                        </span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="text-lg font-bold leading-tight">Le mie Competenze</h2>
                        <p class="text-xs font-normal leading-normal text-subtle-light/80 dark:text-zinc-400">
                            Specializzato nello sviluppo web con lo stack Laravel, Livewire, Tailwind, MySQL e
                            AlpineJS. La mia professionalità si basa su un forte problem-solving e un approccio metodico
                            ed efficiente.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>