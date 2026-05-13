<div>
    <section id="work" class="container mx-auto w-full flex flex-col text-black py-10 md:py-10 items-center">
        <div class="w-full flex flex-col justify-between items-center">
            <h2 class="font-bold text-xl md:text-4xl dark:text-white mb-5">
                Ultimi progetti
            </h2>
            <button wire:navigate href="/projects"
                class="inline-flex items-center capitalize my-5 px-4 py-2 text-sm font-medium border border-zinc-300 dark:border-zinc-700 bg-zinc-400/10 hover:bg-zinc-200 dark:hover:bg-zinc-900 text-zinc-500 dark:text-zinc-400 rounded-lg cursor-pointer">
                Tutti I Progetti
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                    stroke="currentColor" class="size-4 ms-2 text-zinc-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>

        @if($projects && count($projects) == 0)
        <div class="w-full text-center text-zinc-500 text-xl my-5">
            Sezione in allestimento
        </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 sm:gap-5  md:gap-10 w-full mx-auto">
            @foreach($projects->take(3) as $project)
            <x-card-project :item="$project">
                <x-slot name="badge">
                    @if($project->is_available)
                    <div
                        class="text-xs font-medium flex items-center bg-primary/10 text-primary px-2 py-1 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 text-primary me-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Completato
                    </div>
                    @else
                    <div
                        class="text-xs font-medium flex items-center bg-red-200/20 text-red-500 px-2 py-1 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 text-red-500 me-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Non Completato
                    </div>
                    @endif
                </x-slot>
                <x-slot name="actions">
                    @if($project->url_git)
                    <a href="{{$project->url_git}}" target="_blank"
                        class="inline-flex items-center px-2 py-1 text-xs font-medium bg-zinc-400/10 hover:bg-zinc-200 dark:hover:bg-zinc-900 dark:border border-zinc-700 text-zinc-500 dark:text-zinc-400 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 me-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                        </svg>
                        GitHub
                    </a>
                    @endif
                    @if($project->url_web)
                    <a href="{{$project->url_web}}" target="_blank"
                        class="inline-flex items-center px-2 py-1 text-xs font-medium bg-primary/10 hover:bg-primary/20 text-primary rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 me-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        Vedi</a>
                    @endif
                </x-slot>
            </x-card-project>
            @endforeach
        </div>

    </section>
</div>