<div>
    <div class="flex justify-between items-center border-b border-zinc-200 dark:border-zinc-600 py-3">
        <h2 class="text-lg font-bold uppercase text-zinc-700 dark:text-white">Progetti \ Modifica</h2>
        <flux:button icon="arrow-left" wire:navigate href="/admin/projects-home" variant="filled">
            Torna indietro
        </flux:button>
    </div>

    <form wire:submit.prevent="submit" class="mt-5 space-y-2">
        <flux:field class="my-5">
            <flux:label>Titolo</flux:label>
            <flux:input wire:model="title" id="title" />
            <flux:error name="title" />
        </flux:field>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-5">
            <flux:field>
                <flux:label>Url Web</flux:label>
                <flux:input wire:model="url_web" id="url_web" />
                <flux:error name="url_web" />
            </flux:field>
            <flux:field>
                <flux:label>Url Git</flux:label>
                <flux:input wire:model="url_git" id="url_git" />
                <flux:error name="url_git" />
            </flux:field>
        </div>

        <flux:field class="my-5">
            <flux:label>
                Skills
            </flux:label>
            <div class="flex gap-5">
                @foreach($skills as $skill)
                <flux:label class="flex gap-2">
                    <flux:checkbox wire:model="selectedSkills" wire:key="skill-{{ $skill->id }}"   label="{{ $skill->name }}" value="{{ $skill->id }}" />
               
                </flux:label>
                @endforeach
            </div>
        </flux:field>

        <flux:field class="my-5">
            <flux:label>Descrizione</flux:label>
            <flux:textarea wire:model="description" id="description" />
            <flux:error name="description" />
        </flux:field>

        <div>
            <flux:checkbox wire:model="is_available" id="is_available" label="Completato" />
        </div>

        <div class="mt-5 space-y-5">
            @if($project->img_url)
            <figure class="w-30 h-30 overflow-hidden rounded-lg">
                <img class="w-full h-full object-cover" src="{{ asset('/storage/'.$project->img_url) }}"
                    alt="{{$project->img_url}}" />
            </figure>
            @else
            <div
                class="w-30 h-30 border bg-gray-100 flex justify-center items-center text-gray-400 font-medium rounded-lg">
                IMG
            </div>
            @endif

            <flux:input type="file" wire:model="img_url" id="img_url" label="Allega immagine" />
        </div>


        <div class="w-full flex justify-end">
            <flux:button type="submit" class="w-[150px]" variant="filled">Modifica</flux:button>
        </div>
    </form>
</div>