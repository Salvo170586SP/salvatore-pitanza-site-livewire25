<div>
    <section id="work" class="mx-auto w-full flex flex-col text-black px-10 py-10 md:py-10 items-center">
        <h2 class="text-xl sm:text-3xl font-bold leading-tight mb-5">
            Ultimi progetti
        </h2>

        @if(isset($projects))
        <div class="flex flex-wrap justify-center gap-5 w-full">
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
        @else
        <div
            class="w-full flex justify-center items-center text-gray-300 gap-5 text-center font-semibold dark:text-zinc-300 text-xl mt-5 py-5 border rounded-xl bg-white">
            Sezione in allestimento
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-10 text-gray-200">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
            </svg>
        </div>
        @endif

        <button wire:navigate href="/projects"
            class="inline-flex items-center capitalize my-5 px-4 py-2 font-medium border border-zinc-200 bg-white hover:shadow-lg transition rounded-xl cursor-pointer">
            Tutti I Progetti
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                stroke="currentColor" class="size-4 ms-2 text-zinc-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </button>
    </section>
</div>