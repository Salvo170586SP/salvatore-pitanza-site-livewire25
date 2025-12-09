<div>
    <section class="container w-full h-full py-20">
        <div class="flex flex-wrap justify-between p-6">
            <div class="flex min-w-72 flex-col gap-1">
                <p class="text-[#212529] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">I miei
                    progetti</p>
                <p class="text-[#617589] dark:text-zinc-400 text-sm font-normal leading-normal">Una selezione curata
                    dei
                    miei lavori, dove esploro soluzioni creative tra design e tecnologia.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:px-5">
            @foreach($projects as $project)
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
                        class="inline-flex items-center px-2 py-1 text-xs font-medium bg-primary/10 hover:bg-primary/20 text-primary dark:border dark:border-blue-800  rounded-full">
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
        <div
            class="mt-8 flex flex-col items-center justify-center gap-4 rounded-xl bg-primary/10  dark:bg-zinc-800 dark:border dark:border-zinc-700  p-8 text-center">
            <h3 class="text-2xl font-bold text-[#212121] dark:text-white">Vuoi saperne di più?</h3>
            <p class="max-w-md text-gray-700 dark:text-gray-300">Consulta il mio profilo GitHub.</p>
            <a class="dark:text-zinc-300 bg-light dark:bg-zinc-800 hover:bg-light/60 dark:hover:bg-zinc-900  transition-colors flex items-center gap-3 border border-zinc-400 dark:border-zinc-700 rounded-xl px-4 py-2"
                href="https://github.com/Salvo170586SP" target="_blank">
                <img src="./assets/imgs/github.png" class="w-5 h-5 dark:invert-80" alt="ig">
                GitHub
            </a>
        </div>
    </section>
</div>