<div>
  <section id="jumbotron-about"
    class="relative overflow-hidden w-full text-white bg-gradient-to-br from-indigo-400/10 to-transparent border-b border-zinc-800 py-40">
    <div class="absolute inset-0 z-0
         bg-[linear-gradient(to_right,#4f46e520_1px,transparent_1px),linear-gradient(to_bottom,#4f46e520_1px,transparent_1px)]
         bg-[size:6rem_6rem] [mask-image:radial-gradient(ellipse_70%_80%_at_50%_0%,#000_80%,transparent_100%)]">
    </div>
    <div class="absolute inset-0 z-0 bg-gradient-to-br from-indigo-900/10 to-transparent"></div>
    <div class="flex justify-center items-center">
      <div class="flex flex-col items-center">
        <div class="px-10 md:px-32 ">
          <p class="text-6xl font-bold mt-5">
            Chi <span class="text-blue-600">Sono</span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="w-full flex flex-col py-10 md:py-20 items-center text-white border-b border-zinc-800">
    <div class="container mx-auto  w-full flex justify-center gap-20">
      <div class="w-700">
        @isset($biography)
        <div class="text-gray-600 font-medium">
          <div class="text-sm font-medium text-justify mt-5 lg:mt-0 px-10 md:px-0">
            {!!$biography->description!!}
          </div>
        </div>
        @else
        <div class="w-full text-center font-semibold text-slate-300 text-2xl mt-5">
          Sezione in allestimento 🛠️
        </div>
        @endisset
      </div>

      <div class="w-300 space-y-5">
        <div class="rounded-2xl border border-zinc-700/90 bg-zinc-900/50 overflow-hidden">
          <div class="bg-gradient-to-r bg-zinc-800/50 px-6 py-4">
            <h3 class="text-lg font-semibold text-zinc-100">Le mie passioni</h3>
          </div>
          <div class="flex flex-wrap gap-2 p-6 ">
            <span
              class="inline-block px-3 py-1.5 rounded-full text-xs font-medium bg-zinc-700 text-zinc-300 hover:bg-zinc-600 transition-colors mb-2">Sviluppo
              UI</span><span
              class="inline-block px-3 py-1.5 rounded-full text-xs font-medium bg-zinc-700 text-zinc-300 hover:bg-zinc-600 transition-colors mb-2">Arte</span><span
              class="inline-block px-3 py-1.5 rounded-full text-xs font-medium bg-zinc-700 text-zinc-300 hover:bg-zinc-600 transition-colors mb-2">Disegno</span><span
              class="inline-block px-3 py-1.5 rounded-full text-xs font-medium bg-zinc-700 text-zinc-300 hover:bg-zinc-600 transition-colors mb-2">Montagna</span><span
              class="inline-block px-3 py-1.5 rounded-full text-xs font-medium bg-zinc-700 text-zinc-300 hover:bg-zinc-600 transition-colors mb-2">Escursionismo</span><span
              class="inline-block px-3 py-1.5 rounded-full text-xs font-medium bg-zinc-700 text-zinc-300 hover:bg-zinc-600 transition-colors mb-2">Natura</span><span
              class="inline-block px-3 py-1.5 rounded-full text-xs font-medium bg-zinc-700 text-zinc-300 hover:bg-zinc-600 transition-colors mb-2">Sport</span><span
              class="inline-block px-3 py-1.5 rounded-full text-xs font-medium bg-zinc-700 text-zinc-300 hover:bg-zinc-600 transition-colors mb-2">Arti
              Marziali</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>