<div>

  <div id="jumbotron-about" class="px-10 space-y-20 w-full py-25 sm:py-25">

    <section class="w-full flex flex-col md:flex-row sm:items-between gap-5 sm:gap-5">
      <div class="w-full md:w-700">
        <p class="text-sky-800 font-bold">Palermo, Sicilia · Disponibile da remoto o in sede in Sicilia</p>

        <div class="my-5">
          <h1 class="font-serif-display text-3xl sm:text-4xl font-bold leading-tight">
            Chi sono</h1>
          <p class="font-normal leading-normal">
            Mi chiamo Salvo e lavoro soprattutto con Laravel e Livewire. Mi piace unire logica, creatività e precisione
            per costruire prodotti digitali che abbiano un impatto reale.
          </p>
        </div>

        <div class="gap-3 py-1 flex">
          <a href="{{ asset('storage/'.$document->doc_url)}}" download
            class="flex min-w-[184px] max-w-[480px] border border-zinc-200 cursor-pointer items-center justify-center hover:shadow-lg transition rounded-xl h-12 px-5 bg-black text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-sky-900">
            <span class="truncate">Scarica il CV</span>
          </a>
          <a href="https://www.linkedin.com/in/salvatore-pitanza-dev/" target="_blank"
            class="bg-white text-gray-800 flex min-w-[184px] max-w-[480px] hover:shadow-lg transition cursor-pointer items-center justify-center rounded-xl h-12 px-5 border border-zinc-200 text-base font-bold leading-normal tracking-[0.015em]">
            <span class="truncate">Linkedin</span>
          </a>
        </div>
      </div>

      <div class="w-full flex justify-end">
        @if (isset($biography->img_url))
        <figure class="border w-full md:w-50 lg:w-100 h-80 overflow-hidden rounded-4xl">
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
    </section>

    <section class="w-full flex flex-col md:flex-row gap-5 sm:gap-20">
      <div class="md:w-400">
        <h2 class="font-serif-display text-3xl font-bold pb-4">
          Percorso Professionale</h2>
        <p class="mt-2 font-normal leading-normal text-justify">
          {{$biography->description}}
        </p>
      </div>

      @if (isset($biography->img_wide_url))
      <figure class="border w-full h-80 overflow-hidden rounded-4xl">
        <img src="{{ asset('storage/' . $biography->img_wide_url) }}" alt="{{$biography->img_wide_url}}"
          class="w-full h-full object-cover" />
      </figure>
      @else
      <div
        class="w-full h-80 border border-sky-200 text-blue-800 rounded-4xl text-8xl bg-sky-50 flex justify-center items-center font-bold">
        SP
      </div>
      @endif
    </section>

    <section class="my-15 sm:flex sm:gap-5 space-y-5 space-y-0">
      <div
        class="w-full sm:h-90 md:h-75 lg:h-35 p-5 bg-white rounded-xl border border-zinc-200 hover:shadow-lg transition">
        <h2 class="text-2xl font-bold">
          Filosofia e Valori</h2>
        <p class="mt-3 font-normal leading-normal">
          Cura dei dettagli, qualità prima della fretta, ascolto e crescita continua.
        </p>
      </div>

      <div
        class="sm:w-full sm:h-90 md:h-75 lg:h-35 p-5 bg-white rounded-xl border border-zinc-200 hover:shadow-lg transition">
        <h2 class="text-2xl font-bold">
          Interessi Personali</h2>
        <p class="mt-3 font-normal leading-normal">
          Workout, arti marziali, montagna e arte: disciplina e costanza anche nel lavoro.
        </p>
      </div>
    </section>

    <section class="w-full sm:flex sm:gap-5 space-y-5 space-y-0">
      <div class="{{-- sm:w-250 md:w-full --}} w-full">
        <livewire:guest.components.experiences />
      </div>

      <div class="w-full sm:w-150 sm:flex-col">
        <h2 class="font-serif-display text-2xl font-bold">
          Competenze Chiave</h2>

        <div class="mt-6 sm:grid sm:grid-cols-2 gap-4 space-y-3 sm:space-y-0">
          <div
            class="px-5 py-1 bg-white border border-sky-200 rounded-full text-sm font-medium text-sky-800 text-center">
            <span class="font-medium text-sm text-sky-800">Laravel & Livewire</span>
          </div>

          <div
            class="px-5 py-1 bg-white border border-sky-200 rounded-full text-sm font-medium text-sky-800 text-center">
            <span class="text-sm font-medium text-sky-800">API REST</span>
          </div>

          <div
            class="px-5 py-1 bg-white border border-sky-200 rounded-full text-sm font-medium text-sky-800 text-center">
            <span class="text-sm font-medium text-sky-800">Gestionali su misura</span>
          </div>

          <div
            class="px-5 py-1 bg-white border border-sky-200 rounded-full text-sm font-medium text-sky-800 text-center">
            <span class="text-sm font-medium text-sky-800">MySQL</span>
          </div>

          <div
            class="px-5 py-1 bg-white border border-sky-200 rounded-full text-sm font-medium text-sky-800 text-center">
            <span class="text-sm font-medium text-sky-800">Lavorare in team</span>
          </div>

          <div
            class="px-5 py-1 bg-white border border-sky-200 rounded-full text-sm font-medium text-sky-800 text-center">
            <div class="text-sm font-medium text-sky-800">Rispetto delle scadenze</div>
          </div>
        </div>

        <button wire:navigate href="/skills"
          class="w-full mt-5 hover:text-sky-700  flex items-center justify-center gap-2 cursor-pointer font-medium leading-normal tracking-[0.015em]">
          Vedi tutte le competenze →
        </button>
      </div>
    </section>

  </div>
</div>