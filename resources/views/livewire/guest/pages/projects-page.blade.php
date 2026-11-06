<div>
    <section class="px-4 sm:px-6 w-full h-full mx-auto py-25">

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
        <div class="flex w-full flex-wrap justify-center gap-5 mt-10 mx-auto">
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
            </x-card-project>
            @endforeach
        </div>
        @else
        <x-isset-placeholder />
        @endif
        <p class="w-full mt-10 text-center">
            Altri lavori e sperimentazioni sono sul mio profilo GitHub.
            <a href="https://github.com/Salvo170586SP" target="_blank"
                class="text-blue-800 hover:text-blue-900 font-semibold">
                Vai a GitHub →
            </a>
        </p>
    </section>
</div>