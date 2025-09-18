<div>
    <section id="experience" class="w-full container mx-auto flex flex-col py-10 md:py-25 items-center border-b border-zinc-800">
        <div class="text-center w-full pb-10  md:p-0">
            <h2 class="font-bold text-xl md:text-2xl text-zinc-300">
                Esperienze
            </h2>
            <p class="font-medium text-sm mt-2 text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Iure deleniti
                nesciunt quia ad autem dicta nulla voluptas ullam similique
            </p>
        </div>


        <div class="mx-auto w-[400px] md:w-[900px] mt-5 md:mt-10 px-4 md:px-0">

           {{--  @forelse($experiences->take(5) as $experience) --}}

            <div class="max-w-4xl  mx-auto">

                <!-- Accordion Container -->
                <div class="space-y-4" x-data="{ 
            accordions: [
                { 
                    id: 1,
                    titolo: 'Cos\'è Alpine.js?',
                    descrizione: 'Alpine.js è un framework JavaScript minimalista per comporre comportamenti direttamente nel markup HTML. È perfetto per aggiungere interattività senza la complessità di framework più grandi come Vue o React.'
                },
                { 
                    id: 2,
                    titolo: 'Perché usare Tailwind CSS?',
                    descrizione: 'Tailwind CSS è un framework CSS utility-first che ti permette di costruire rapidamente interfacce personalizzate senza dover scrivere CSS personalizzato. Offre classi pre-costruite per quasi ogni proprietà CSS.'
                },
                { 
                    id: 3,
                    titolo: 'Come funzionano insieme?',
                    descrizione: 'Alpine.js e Tailwind CSS sono una combinazione perfetta: Alpine gestisce la logica e l\'interattività, mentre Tailwind si occupa dello styling. Insieme permettono di creare componenti interattivi e belli direttamente nell\'HTML.'
                },
                { 
                    id: 4,
                    titolo: 'Quali sono i vantaggi?',
                    descrizione: 'I principali vantaggi includono: sviluppo rapido, codice mantenibile, nessuna build step necessaria, bundle size ridotto, e la possibilità di prototipare velocemente senza configurazioni complesse.'
                }
            ],
            openItem: null,
            toggle(id) {
                this.openItem = this.openItem === id ? null : id;
            }
        }">
                    <!-- Accordion Items -->
                    <template x-for="accordion in accordions" :key="accordion.id">
                        <div
                            class="rounded-lg bg-slate-600/20 border border-slate-500/30 overflow-hidden transition-all duration-300 hover:shadow-lg text-white">
                            <!-- Accordion Header -->
                            <button @click="toggle(accordion.id)"
                                class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-slate-600/30 transition-colors duration-200 focus:outline-none cursor-pointer"
                                :class="{ 'bg-slate-600/30': openItem === accordion.id }">
                                <span class="font-semibold" :class="{ 'text-blue-300': openItem === accordion.id }"
                                    x-text="accordion.titolo"></span>
                                <svg class="w-5 h-5 text-gray-300 transition-transform duration-300"
                                    :class="{ 'rotate-180 text-blue-600': openItem === accordion.id }" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <!-- Accordion Content -->
                            <div x-show="openItem === accordion.id"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform -translate-y-2"
                                x-transition:enter-end="opacity-100 transform translate-y-0"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform translate-y-0"
                                x-transition:leave-end="opacity-0 transform -translate-y-2"
                                class="px-6 py-4 bg-slate-600/20 border-t border-gray-700">
                                <p class="text-zinc-300 leading-relaxed" x-text="accordion.descrizione"></p>
                            </div>
                        </div>
                    </template>
                </div>

            </div>

          {{--   @else

            <div
                class="p-5 mt-5 md:mt-10 bg-slate-600/20 border-slate-500/30 text-white flex flex-col border md:flex-row justify-center items-center rounded-xl">
                <div class="w-full my-2 px-5">
                    <p class="text-xl font-bold">Non sono presenti esperienze</p>
                    <p class="font-medium text-sm md:text-md">
                        Non sono presenti esperienze lavorative o azioni dedite al sociale.
                    </p>
                </div>
            </div>
            @endforelse --}}

        </div>
    </section>
</div>