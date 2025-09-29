<div>
    <div class="flex justify-between items-center border-b border-zinc-200 dark:border-zinc-600 py-3">
        <h2 class="text-lg font-bold uppercase text-zinc-700 dark:text-white">Progetti \ Crea</h2>
        <flux:button icon="arrow-left" wire:navigate href="/admin/projects-home" variant="filled">
            Torna indietro
        </flux:button>
    </div>

    <form wire:submit.prevent="submit" class="mt-5 space-y-2">
        <flux:field>
            <flux:label>Titolo</flux:label>
            <flux:input wire:model="title" id="title" />
            <flux:error name="title" />
        </flux:field>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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
        <flux:field>
            <flux:label>Descrizione</flux:label>
            <flux:textarea wire:model="description" id="description" />
            <flux:error name="description" />
        </flux:field>

        <div class="mt-5">
            <flux:checkbox  type="checkbox" wire:model="is_available" id="is_available"  label="Completato" />
        </div>
        <div class="mt-5">
            <flux:input type="file" wire:model="img_url" id="img_url" label="Allega immagine" />
        </div>


        <div class="w-full flex justify-end">
            <flux:button type="submit" class="w-[150px]" variant="filled">Crea</flux:button>
        </div>
    </form>
</div>