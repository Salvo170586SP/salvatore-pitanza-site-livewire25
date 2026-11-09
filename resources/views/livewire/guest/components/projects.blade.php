<div>
    @if($projects && $projects->count() > 0)
    <section id="work" class="mx-auto w-full flex flex-col text-black px-10 py-10 md:py-10 items-center">
        <h2 class="w-full text-center text-xl sm:text-3xl font-bold leading-tight mb-5">
            Ultimi Progetti
        </h2>

        <div class="w-full flex flex-col flex-wrap sm:flex-row justify-center items-center gap-5 mt-5">
            @foreach($projects->take(3) as $project)
            <x-card-project :item="$project">
                <x-slot name="badge">
                    @if($project->is_available)
                    <div
                        class="text-xs font-medium flex items-center bg-green-50 text-green-600 px-4 py-2 rounded-full">
                        Completato
                    </div>
                    @else
                    <div
                        class="text-xs font-medium flex items-center bg-orange-50 text-orange-600 px-4 py-2 rounded-full">
                        In sviluppo
                    </div>
                    @endif
                </x-slot>
                <x-slot name="actions">
                    @if($project->url_git)
                    <a href="{{$project->url_git}}" target="_blank"
                        class="px-4 py-3 text-sm font-semibold border border-zinc-400 hover:text-sky-600 text-zinc-800 rounded-xl">
                        Repository
                    </a>
                    @endif
                    @if($project->url_web)
                    <a href="{{$project->url_web}}" target="_blank"
                        class="px-4 py-3 text-sm font-semibold border border-blue-600 bg-blue-600 hover:text-blue-50 text-white rounded-xl">
                        Demo live</a>
                    @endif
                </x-slot>
            </x-card-project>
            @endforeach
        </div>
        <button wire:navigate href="/projects"
            class="inline-flex items-center capitalize my-5 px-4 py-2 font-medium border border-zinc-200 bg-white hover:shadow-lg transition rounded-xl cursor-pointer">
            Tutti I Progetti
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                stroke="currentColor" class="size-4 ms-2 text-zinc-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </button>
    </section>
    @endif
</div>