<div>

  <section id="jumbotron-about" class="px-10 space-y-20 w-full border-b py-25 sm:py-25">
    <div class="w-full flex flex-col sm:flex-row sm:items-between gap-5 sm:gap-5">
      <div class="w-full sm:w-700">
        <p class="text-sky-600 font-bold">Palermo, Sicilia · Disponibile da remoto o in sede in Sicilia</p>
        <h1 class="font-serif-display text-3xl sm:text-4xl font-bold leading-tight">
          Chi sono</h1>
        <p class="font-normal leading-normal">
          Mi chiamo Salvo e lavoro soprattutto con Laravel e Livewire. Mi piace unire logica, creatività e precisione
          per costruire prodotti digitali che abbiano un impatto reale.
        </p>
        <div class="my-5">
          <span class="px-5 py-1 bg-sky-100 rounded-full text-sm font-medium text-sky-800">Laravel</span>
          <span class="px-5 py-1 bg-sky-100 rounded-full text-sm font-medium text-sky-800">Livewire</span>
          <span class="px-5 py-1 bg-sky-100 rounded-full text-sm font-medium text-sky-800">Vue.js</span>
        </div>
        <div class="gap-3 py-1 flex mt-5">
          <button wire:navigate href="/projects"
            class="flex min-w-[184px] max-w-[480px] border border-zinc-200 cursor-pointer items-center justify-center hover:shadow-lg transition rounded-xl h-12 px-5 bg-sky-900 text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-sky-800">
            <span class="truncate">Scarica il CV</span>
          </button>
          <button wire:navigate href="/skills"
            class="bg-white text-gray-800 flex min-w-[184px] max-w-[480px] hover:shadow-lg transition cursor-pointer items-center justify-center rounded-xl h-12 px-5 border border-zinc-200 text-base font-bold leading-normal tracking-[0.015em]">
            <span class="truncate">Linkedin</span>
          </button>
        </div>
      </div>

      <div class="w-full flex justify-end">
        @if (isset($biography->img_url))
        <figure class="border sm:w-80 h-80 overflow-hidden rounded-4xl">
          <img src="{{ asset('storage/' . $biography->img_url) }}" alt="{{$biography->img_url}}"
            class="w-full h-full object-cover" />
        </figure>
        @else
        <div
          class="w-full sm:w-80 h-80 border border-sky-200 text-blue-800 rounded-4xl text-8xl bg-sky-50 flex justify-center items-center font-bold">
          SP
        </div>
        @endif
      </div>
    </div>



    <div class="w-full flex flex-col sm:flex-row gap-5 sm:gap-20">
      <div class="sm:w-400">
        <h2 class="font-serif-display text-3xl font-bold pb-4">
          Percorso Professionale</h2>
        <p class="mt-2 font-normal leading-normal text-justify">
          Il mio percorso è iniziato con una forte passione per l’informatica, che mi ha portato al bootcamp intensivo
          di Boolean Careers, dove ho consolidato le basi dello sviluppo web e imparato a lavorare con metodo.

          Da allora mi sono specializzato nello sviluppo backend e full-stack con Laravel e nei flussi reattivi di
          Livewire. Ogni progetto mi ha insegnato qualcosa: seguire un processo, risolvere problemi e costruire
          soluzioni solide e scalabili.
        </p>
      </div>

      @if (isset($biography->img_url))
      <figure class="border w-full h-80 overflow-hidden rounded-4xl">
        <img src="{{ asset('storage/' . $biography->img_url) }}" alt="{{$biography->img_url}}"
          class="w-full h-full object-cover" />
      </figure>
      @else
      <div
        class="w-full h-80 border border-sky-200 text-blue-800 rounded-4xl text-8xl bg-sky-50 flex justify-center items-center font-bold">
        SP
      </div>
      @endif

    </div>



    <section class="my-15 sm:flex sm:gap-5 space-y-5  space-y-0">
      <div
        class="sm:w-130 sm:h-90 md:h-75 lg:h-60 p-5 bg-white rounded-xl border border-zinc-200 hover:shadow-lg transition">
        <h2 class="text-2xl font-bold">
          Filosofia e Valori</h2>
        <p class="mt-2 font-normal leading-normal">
          Credo nei progressi costanti, nella cura dei dettagli e in un approccio che privilegia la qualità rispetto
          alla fretta. Per me lo sviluppo è un equilibrio tra tecnica e visione: ascoltare, comprendere e costruire
          con consapevolezza, portando avanti i progetti con un mindset orientato alla chiarezza, alla collaborazione
          e
          alla crescita continua.
        </p>
      </div>

      <div
        class="sm:w-130 sm:h-90 md:h-75 lg:h-60 p-5 bg-white rounded-xl border border-zinc-200 hover:shadow-lg transition">
        <h2 class="text-2xl font-bold">
          Interessi Personali</h2>
        <p class="mt-2 font-normal leading-normal">
          Quando non sono davanti al computer mi rigenero con workout e arti marziali, che mi insegnano disciplina e
          costanza, con le camminate in montagna e con l’arte, che alimenta creatività e senso estetico. Tutto questo
          contribuisce al modo in cui affronto ogni sfida.
        </p>
      </div>
    </section>

    <section class="w-full sm:flex sm:gap-5 space-y-5 space-y-0">
      <div class="sm:w-250">
        <livewire:guest.components.experiences />
      </div>

      <div class="w-full sm:w-150 sm:flex-col">
        <h2 class="font-serif-display text-2xl font-bold">
          Competenze Chiave</h2>

        <div class="mt-6 sm:grid sm:grid-cols-2 gap-4 space-y-3 sm:space-y-0">
          <div
            class="px-5 py-1 bg-white border border-sky-200 rounded-full text-sm font-medium text-sky-800 text-center">
            <span class="font-medium text-sm text-sky-800">Design</span>
          </div>

          <div
            class="px-5 py-1 bg-white border border-sky-200 rounded-full text-sm font-medium text-sky-800 text-center">
            <span class="text-sm font-medium text-sky-800">Sviluppo Full Stack</span>
          </div>

          <div
            class="px-5 py-1 bg-white border border-sky-200 rounded-full text-sm font-medium text-sky-800 text-center">
            <span class="text-sm font-medium text-sky-800">Prototipazione</span>
          </div>

          <div
            class="px-5 py-1 bg-white border border-sky-200 rounded-full text-sm font-medium text-sky-800 text-center">
            <span class="text-sm font-medium text-sky-800">Lavorare in Team</span>
          </div>

          <div
            class="px-5 py-1 bg-white border border-sky-200 rounded-full text-sm font-medium text-sky-800 text-center">
            <span class="text-sm font-medium text-sky-800">Rispetto delle Scadenze</span>
          </div>

          <div
            class="px-5 py-1 bg-white border border-sky-200 rounded-full text-sm font-medium text-sky-800 text-center">
            <div class="text-sm font-medium text-sky-800">Comunicazione</div>
          </div>
        </div>

        <button wire:navigate href="/skills"
          class="w-full mt-5 hover:text-sky-700 text-sky-800 flex items-center gap-2 cursor-pointer font-bold leading-normal tracking-[0.015em]">
          Vedi tutte le competenze
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
            stroke="currentColor" class="size-4 text-zinc-500">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
          </svg>
        </button>
      </div>
    </section>

  </section>
</div>