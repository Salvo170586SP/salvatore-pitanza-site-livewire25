<div>
    <section id="work"
        class="w-full mx-auto flex flex-col py-10 md:py-10 items-center bg-zinc-900 bg-gradient-to-br from-indigo-300/10 text-white border-b border-zinc-800">
        <div class="w-full flex justify-between items-center max-w-7xl p-8">
            <h2 class="font-bold text-xl md:text-2xl text-zinc-300">
                Anteprima progetti
            </h2>
            <button wire:navigate href="/projects"
                class="text-blue-400 hover:text-blue-500 px-4 py-2 mt-5 flex items-center justify-between font-semibold transition-all cursor-pointer">
                Tutti i progetti
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                    stroke="currentColor" class="size-4 ms-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>

        @if($projects->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 p-8 w-full max-w-7xl mx-auto">
            @foreach($projects->take(3) as $project)
            <x-card-project :project="$project" />
            @endforeach
        </div>
        @else
        <div class="w-full text-center font-semibold text-slate-300 text-2xl mt-5">
            Sezione in allestimento 🛠️
        </div>
        @endif
    </section>
</div>