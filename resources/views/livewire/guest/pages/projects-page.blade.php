<div>
    <section class="px-10 w-full h-full mx-auto py-25">

        <div class="flex flex-col gap-1">
            <h1 class="font-serif-display text-3xl sm:text-4xl font-bold leading-tight tracking-tight text-[#212121]">
                I miei
                progetti</h1>
            <p class="font-normal leading-normal">Una selezione dei miei lavori: cosa fanno e quali tecnologie
                utilizzano.
            </p>
        </div>

        <div class="pt-5 hidden sm:block flex flex-wrap gap-2">
            <button wire:click="$set('filter', 'all')"
                class="text-sm border border-zinc-300 {{ $filter === 'all' ? 'bg-[#0F172A] text-white' : 'bg-white' }}  cursor-pointer px-4 py-2 rounded-full font-medium leading-normal">Tutti</button>
            <button wire:click="$set('filter', 'completed')"
                class="text-sm border border-zinc-300  {{ $filter === 'completed' ? 'bg-[#0F172A] text-white' : 'bg-white' }} cursor-pointer px-4 py-2 rounded-full font-medium leading-normal">Completati</button>
            <button wire:click="$set('filter', 'development')"
                class="text-sm border border-zinc-300  {{ $filter === 'development' ? 'bg-[#0F172A] text-white' : 'bg-white' }}  cursor-pointer px-4 py-2 rounded-full font-medium leading-normal">In
                sviluppo</button>
        </div>

        @if(isset($projects))
        <div class="flex flex-wrap gap-5 my-10">
            @foreach($projects as $project)
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
           {{--      <x-slot name="actions">
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
                </x-slot> --}}
            </x-card-project>
            @endforeach

        </div>
        <p class="text-gray-500 mt-5">
            Altri lavori e sperimentazioni sono sul mio profilo GitHub.
            <a href="https://github.com/Salvo170586SP" target="_blank"
                class="text-blue-500 hover:text-blue-800 font-semibold">
                Vai a GitHub →
            </a>
        </p>
        @else
        <div
            class="w-full flex justify-center items-center text-gray-300 gap-5 text-center font-semibold dark:text-zinc-300 text-xl mt-5 py-30 border rounded-xl bg-white">
            Sezione in allestimento
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-10 text-gray-200">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
            </svg>
        </div>
        @endif

    </section>
</div>