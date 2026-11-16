<div>

  <div id="jumbotron-about" {{-- class="container mx-auto space-y-20 py-25 sm:py-25" --}}
    class="w-full max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16 space-y-15 py-25">

    <section class="w-full flex flex-col md:flex-row sm:items-between gap-5">
      <div class="w-full md:w-400">
        <p class="text-sky-800 font-bold text-sm">Palermo, Sicilia · Disponibile da remoto, in modalità ibrida o in sede in Sicilia e a Torino.
  {{-- Disponibile da remoto o in sede in Sicilia --}}</p>

        <div class="my-5">
          <h1 class="font-serif-display text-3xl sm:text-4xl font-bold leading-tight">
            Sviluppo gestionali e CRM su misura con Laravel e Livewire</h1>
          <p class="font-normal leading-normal text-justify mt-3 text-gray-700">
            Sono Salvo, full-stack developer. Parto dal problema del cliente e costruisco software che si usa davvero
            ogni giorno: chiaro, solido, consegnato nei tempi.
          </p>
        </div>

        <div class="gap-3 py-5 flex flex-col sm:flex-row">
          @if($document && $document->doc_url)
          <a href="{{ asset('storage/'.$document->doc_url)}}" download
            class="flex min-w-[184px] max-w-[480px] border border-zinc-200 cursor-pointer items-center justify-center hover:shadow-lg transition rounded-2xl h-12 px-5 bg-black text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-sky-900">
            <span class="truncate">Scarica il CV</span>
          </a>
          @endif
          <a href="https://www.linkedin.com/in/salvatore-pitanza-dev/" target="_blank"
            class="bg-white text-gray-800 flex min-w-[184px] max-w-[480px] hover:shadow-lg transition cursor-pointer items-center justify-center rounded-2xl h-12 px-5 border border-zinc-300 text-base font-bold leading-normal tracking-[0.015em]">
            <span class="truncate">Linkedin</span>
          </a>
        </div>
        <button wire:navigate href="/skills"
          class="w-full hover:text-sky-700 flex items-center justify-start cursor-pointer font-semibold">
          Vedi tutte le competenze →
        </button>
      </div>

      <div class="w-full flex justify-end">
        @if (isset($biography->img_url))
        <figure class="w-full sm:w-80 lg:w-80 h-80 overflow-hidden rounded-2xl">
          <img src="{{ asset('storage/' . $biography->img_url) }}" alt="{{$biography->img_url}}"
            class="w-full h-full object-cover" />
        </figure>
        @else
        <div
          class="w-full sm:w-80 lg:w-80 h-80 border border-sky-200 text-blue-800 rounded-2xl text-8xl bg-sky-50 flex justify-center items-center font-bold">
          SP
        </div>
        @endif
      </div>
    </section>

    <div
      class="w-full grid grid-cols-1 sm:grid-cols-4 gap-1 sm:gap-8 p-5 border border-zinc-300 rounded-2xl hover:shadow-lg bg-white space-y-5 transition">
      <div class="space-y-2">
        <p class="text-gray-500 text-sm">Stack</p>
        <p class="font-medium">
          Laravel · Livewire · MySQL · API REST
        </p>
      </div>
      <div class="space-y-2">
        <p class="text-gray-500 text-sm">Specializzazione</p>
        <p class="font-medium">Gestionali, CRM, piattaforme web</p>
      </div>
      <div class="space-y-2">
        <p class="text-gray-500 text-sm">Contesti</p>
        <p class="font-medium">Software house, consulenza, clienti diretti</p>
      </div>
      <div class="space-y-2">
        <p class="text-gray-500 text-sm">Disponibilità</p>
        <p class="font-medium">Remoto, ibrido o in sede. <br>
Sedi: Palermo e Sicilia, Torino</p>
        {{-- <p class="font-medium">Remoto, Torino o in sede in Sicilia</p> --}}
      </div>
    </div>


    <section>
      <h2 class="text-2xl font-bold my-5">Come Lavoro</h2>
      <div class="flex flex-col sm:flex-row gap-3 sm:gap-5">
        <div class="w-full  p-5 bg-white rounded-2xl border border-zinc-300 hover:shadow-lg transition">
          <h2 class="text-xl font-bold">Cura dei dettagli</h2>
          <p class="mt-3 text-gray-500">
            Validazioni, casi limite, interfaccia: il lavoro fatto bene si vede nelle cose che non rompono.
          </p>
        </div>

        <div class="w-full p-5 bg-white rounded-2xl border border-zinc-300 hover:shadow-lg transition">
          <h2 class="text-xl font-bold">Qualità prima della fretta</h2>
          <p class="mt-3 text-gray-500">
            Codice leggibile e manutenibile, con metodo, rispettando le scadenze concordate.
          </p>
        </div>

        <div class="w-full   p-5 bg-white rounded-2xl border border-zinc-300 hover:shadow-lg transition">
          <h2 class="text-xl font-bold">Ascolto e crescita continua</h2>
          <p class="mt-3 text-gray-500">
            Capire il bisogno prima di scrivere codice, e imparare da ogni progetto e da ogni team.
          </p>
        </div>
      </div>

    </section>

    <section class="w-full sm:flex sm:gap-5 {{-- space-y-5 space-y-0 --}}">
      <div class="w-full">
        <livewire:guest.components.experiences />
      </div>
    </section>

    <section>
      <h2 class="font-serif-display text-2xl font-bold">
        Cosa posso costruire per te
      </h2>
      <p class="mt-2 text-gray-700">Le tipologie di progetto che ho già realizzato</p>

      <div class="w-full mt-6 flex flex-col sm:flex-row gap-3">
        <div class="p-5 bg-white border border-zinc-300 rounded-2xl hover:shadow-lg transition">
          <p class="font-semibold">Gestionali su misura</p>
          <span class="text-sm text-gray-700">Strumenti interni per gestire appalti, fatturazione, cataloghi
            e anagrafiche.</span>
        </div>
        <div class="p-5 bg-white border border-zinc-300 rounded-2xl hover:shadow-lg transition">
          <p class="font-semibold">CRM e piattaforme web</p>
          <span class="text-sm text-gray-700">Applicazioni per seguire clienti, corsi, iscrizioni e
            comunicazioni tra utenti diversi.</span>
        </div>
        <div class="p-5 bg-white border border-zinc-300 rounded-2xl hover:shadow-lg transition">
          <p class="font-semibold">API REST e integrazioni</p>
          <span class="text-sm text-gray-700">Backend e servizi che collegano le applicazioni tra loro e con
            sistemi esterni.</span>
        </div>
      </div>
    </section>

  </div>
</div>