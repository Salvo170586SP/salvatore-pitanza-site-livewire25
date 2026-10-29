<div>
    <div class="relative isolate">
        <!-- Sfondo esteso a tutta la sezione -->
        <div aria-hidden="true" class="absolute inset-0 -z-10 bg-cover bg-center bg-no-repeat opacity-80"
            style="background-image: url('{{ asset('assets/icon/sfondo.jpg') }}');">
        </div>
        <div aria-hidden="true"
            class="pointer-events-none absolute inset-x-0 bottom-0 z-0 h-1/2 bg-gradient-to-b from-transparent via-white/80 to-white">
        </div>

        <!-- HeroSection -->
        <div
            class="relative z-10 backdrop-blur-xs flex min-h-screen w-full flex-col items-center gap-12 pt-18 sm:gap-16 px-5 pt-30 sm:pt-24 lg:pt-50">
            <section id="jum-left">
                <div class="flex flex-col gap-1 items-center">
                    <h1 class="text-4xl font-black leading-tight tracking-[-0.033em] sm:text-5xl md:text-6xl max-w-2xl">
                        Salvatore Pitanza
                    </h1>
                    <h2
                        class="text-lg font-medium leading-tight text-gray-600 tracking-[-0.033em] sm:text-sm md:text-xl max-w-2xl">
                        Full-Stack Developer · Laravel & Livewire
                    </h2>
                </div>

            </section>

            <section id="jum-right" class="flex flex-col gap-10 mb-10">
                <p class="leading-normal text-sm px-4 sm:px-10 sm:text-lg font-normal max-w-2xl text-center">
                    Sviluppatore Full-Stack con 3 anni di esperienza. Progetto applicazioni web
                    con Laravel e Livewire, dal gestionale all'interfaccia.
                    <br>
                    <br>
                    Disponibile a collaborazioni e inserimento in azienda, da remoto o in Sicilia.
                </p>
                <div class="flex-wrap gap-3 flex justify-center">
                    <button wire:navigate href="/projects"
                        class="flex min-w-[184px] max-w-[480px] border border-sky-600 cursor-pointer items-center justify-center hover:shadow-lg transition rounded-xl h-12 px-5 bg-sky-600 text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-sky-800">
                        <span class="truncate">Portfolio</span>
                    </button>
                    <button wire:navigate href="/skills"
                        class="bg-white text-gray-800 flex min-w-[184px] max-w-[480px] hover:shadow-lg transition cursor-pointer items-center justify-center rounded-xl h-12 px-5 border border-zinc-200 text-base font-bold leading-normal tracking-[0.015em]">
                        <span class="truncate">Il mio CV</span>
                    </button>
                </div>
            </section>

            <section id="about" class="w-full pb-5 sm:pb-0">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div
                        class="max-w-7xl px-6 flex flex-1 gap-4 rounded-xl border border-zinc-200 p-6 flex-col bg-white hover:shadow-lg transition">
                        <div class="text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-15">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h2 class="text-lg font-bold leading-tight">Introduzione Professionale</h2>
                            <p class="text-sm font-normal leading-normal text-gray-800">
                                Progetto e sviluppo applicazioni gestionali su misura, veloci e semplici da usare.
                            </p>
                        </div>
                    </div>
                    <div
                        class="max-w-7xl px-6 flex flex-1 gap-4 rounded-xl border border-zinc-200 p-6 flex-col bg-white hover:shadow-lg transition">
                        <div class="text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-15">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h2 class="text-lg font-bold leading-tight">Profilo Personale</h2>
                            <p class="text-sm font-normal leading-normal">
                                Lavoro con metodo e curo i dettagli. Mi piace capire a fondo un problema prima di
                                scrivere codice e costruire soluzioni semplici da mantenere nel tempo.
                            </p>
                        </div>
                    </div>
                    <div
                        class="max-w-7xl px-6 flex flex-1 gap-4 rounded-xl border border-zinc-200 p-6 flex-col bg-white hover:shadow-lg transition">
                        <div class="text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-15">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                            </svg>

                        </div>
                        <div class="flex flex-col gap-2">
                            <h2 class="text-lg font-bold leading-tight">Le mie Competenze</h2>
                            <p class="text-sm font-normal leading-normal">
                                Sviluppo con Laravel, Livewire, Tailwind CSS, Alpine.js e MySQL, dal database
                                all’interfaccia.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</div>