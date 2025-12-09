<div>
  <section id="jumbotron-about" class="container mx-auto w-full border-b dark:border-zinc-800 py-30">
    <div class="flex w-full mx-auto max-w-7xl flex-col gap-12 sm:gap-16">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 items-start">
        <div class="w-full h-full md:col-span-1">
          @if ($biography->img_url)
          <figure class="border dark:border-zinc-600 w-full overflow-hidden rounded-xl">
            <img src="{{ asset('storage/' . $biography->img_url) }}" alt="{{$biography->img_url}}"
              class="w-full h-full object-cover" />
          </figure>
          @else
          <div
            class="w-full h-full border dark:border-zinc-600 me-20 overflow-hidden rounded-xl bg-zinc-800 flex justify-center items-center font-bold">
            NO IMG
          </div>
          @endif
        </div>
        <div class="md:col-span-2">
          <h1
            class="font-serif-display text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight text-[#212121] dark:text-white">
            Chi sono</h1>
          <p class="mt-2 text-base font-normal leading-relaxed text-gray-700 dark:text-zinc-400">
            Mi chiamo Salvo, appassionato di tecnologia e di tutto ciò che può trasformare un’idea in
            qualcosa di concreto e funzionale. Lavoro principalmente con lo stack Laravel + Livewire, strumenti che mi
            permettono di creare soluzioni dinamiche, pulite e orientate. Mi piace unire logica,
            creatività e precisione per dare forma a prodotti digitali che abbiano un impatto reale.
          </p>
        </div>
      </div>


      <div class="space-y-12">
        <section>
          <h2
            class="font-serif-display text-3xl font-bold text-[#212121] dark:text-white pb-4 border-b border-gray-200 dark:border-zinc-800">
            Percorso Professionale</h2>
          <p class="mt-2 text-base font-normal leading-relaxed text-gray-700 dark:text-zinc-400">
            Il mio percorso è iniziato con una forte passione per l’informatica, che mi ha portato a formarmi attraverso
            il bootcamp intensivo di Boolean Careers, dove ho consolidato le basi dello sviluppo web e imparato a
            lavorare con metodo. Da allora ho continuato a crescere, specializzandomi nello sviluppo backend e
            full-stack con Laravel e nei flussi reattivi offerti da Livewire. Ogni progetto affrontato mi ha insegnato
            qualcosa: seguire un processo, risolvere problemi e costruire soluzioni solide e scalabili.
          </p>
        </section>
        <section>
          <h2
            class="font-serif-display text-3xl font-bold text-[#212121] dark:text-white pb-4 border-b border-gray-200 dark:border-zinc-800">
            Filosofia e Valori</h2>
          <p class="mt-2 text-base font-normal leading-relaxed text-gray-700 dark:text-zinc-400">
            Credo nei progressi costanti, nella cura dei dettagli e in un approccio che privilegia la qualità rispetto
            alla fretta. Per me lo sviluppo è un equilibrio tra tecnica e visione: ascoltare, comprendere e costruire
            con consapevolezza. Porto avanti i progetti con un mindset orientato alla chiarezza, alla collaborazione e
            alla crescita continua.
          </p>
        </section>
        <section>
          <h2
            class="font-serif-display text-3xl font-bold text-[#212121] dark:text-white pb-4 border-b border-gray-200 dark:border-zinc-800">
            Interessi Personali</h2>
          <p class="mt-2 text-base font-normal leading-relaxed text-gray-700 dark:text-zinc-400">
            Quando non sono davanti al computer, mi rigenero con le mie passioni: il workout e le arti marziali, che mi
            insegna disciplina
            e costanza; le camminate in montagna, dove riscopro il valore del procedere al proprio ritmo; e l’arte, che
            alimenta il mio senso estetico e la mia creatività. Tutto ciò mi ha aiutato a contribuisce al modo in cui
            affronto ogni sfida.
          </p>
        </section>
      </div>

      <livewire:guest.components.experiences />

      <section>
        <h2
          class="font-serif-display text-3xl font-bold text-[#212121] dark:text-white pb-4 border-b border-gray-200 dark:border-zinc-800">
          Competenze Chiave</h2>
        <div class="mt-6 grid grid-cols-2 sm:grid-cols-5 md:grid-cols-3 gap-4">
          <div
            class="flex items-center gap-3 p-4 bg-white dark:bg-zinc-800 rounded-lg border border-gray-200 dark:border-zinc-700">
            <span class="material-symbols-outlined text-primary text-2xl"><svg xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
              </svg>
            </span>
            <span class="text-sm font-medium text-gray-800 dark:text-gray-200">Design</span>
          </div>
          <div
            class="flex items-center gap-3 p-4 bg-white dark:bg-zinc-800 rounded-lg border border-gray-200 dark:border-zinc-700">
            <span class="material-symbols-outlined text-primary text-2xl"><svg xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
              </svg>
            </span>
            <span class="text-sm font-medium text-gray-800 dark:text-gray-200">Sviluppo Full Stack</span>
          </div>

          <div
            class="flex items-center gap-3 p-4 bg-white dark:bg-zinc-800 rounded-lg border border-gray-200 dark:border-zinc-700">
            <span class="material-symbols-outlined text-primary text-2xl"><svg xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4.5 12a7.5 7.5 0 0 0 15 0m-15 0a7.5 7.5 0 1 1 15 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077 1.41-.513m14.095-5.13 1.41-.513M5.106 17.785l1.15-.964m11.49-9.642 1.149-.964M7.501 19.795l.75-1.3m7.5-12.99.75-1.3m-6.063 16.658.26-1.477m2.605-14.772.26-1.477m0 17.726-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205 12 12m6.894 5.785-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
              </svg>
            </span>
            <span class="text-sm font-medium text-gray-800 dark:text-gray-200">Prototipazione</span>
          </div>

          <div
            class="flex items-center gap-3 p-4 bg-white dark:bg-zinc-800 rounded-lg border border-gray-200 dark:border-zinc-700">
            <span class="material-symbols-outlined text-primary text-2xl"><svg xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
              </svg>
            </span>
            <span class="text-sm font-medium text-gray-800 dark:text-gray-200">Lavorare in Team</span>
          </div>
          <div
            class="flex items-center gap-3 p-4 bg-white dark:bg-zinc-800 rounded-lg border border-gray-200 dark:border-zinc-700">
            <span class="material-symbols-outlined text-primary text-2xl"><svg xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
              </svg>
            </span>
            <span class="text-sm font-medium text-gray-800 dark:text-gray-200">Rispetto delle Scadenze</span>
          </div>
          <div
            class="flex items-center gap-3 p-4 bg-white dark:bg-zinc-800 rounded-lg border border-gray-200 dark:border-zinc-700">
            <span class="material-symbols-outlined text-primary text-2xl"><svg xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
              </svg>
            </span>
            <div class="text-sm font-medium text-gray-800 dark:text-gray-200">Comunicazione</div>
          </div>
        </div>
      </section>


      <div
        class="mt-8 flex flex-col items-center justify-center gap-4 rounded-xl bg-primary/10  dark:bg-zinc-800 dark:border dark:border-zinc-700  p-8 text-center">
        <h3 class="text-2xl font-bold text-[#212121] dark:text-white">Vuoi saperne di più?</h3>
        <p class="max-w-md text-gray-700 dark:text-zinc-300">Consulta il mio profilo Linkedin, scrivimi e parliamone
          insieme.</p>
        <a class="dark:text-zinc-300 bg-light dark:bg-zinc-800 hover:bg-light/60 dark:hover:bg-zinc-900  transition-colors flex items-center gap-3 border border-zinc-400 dark:border-zinc-700 rounded-xl px-4 py-2"
          href="#">
          <svg aria-hidden="true" class="size-6" fill="currentColor" viewbox="0 0 24 24">
            <path
              d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.25 6.5 1.75 1.75 0 016.5 8.25zM19 19h-3v-4.75c0-1.4-1.2-2.5-2.5-2.5S11 12.85 12 14.25V19h-3v-9h2.9v1.3a3.11 3.11 0 012.6-1.4c2.5 0 4.5 2 4.5 4.6V19z">
            </path>
          </svg>
          Contattami
        </a>
      </div>
    </div>
  </section>
</div>