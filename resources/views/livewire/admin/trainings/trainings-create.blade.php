<div>
    <div class="flex justify-between items-center border-b border-zinc-600 py-3">
        <h2 class="text-xl font-bold uppercase">Percorsi \ Crea</h2>
        <flux:button icon="arrow-left" wire:navigate href="/admin/trainings-home">
            Torna indietro
        </flux:button>
    </div>

    <form wire:submit.prevent="submit" class="mt-5 space-y-4">
        <flux:field>
            <flux:label>Icona</flux:label>
            <flux:input wire:model="icon" id="icon" placeholder="incolla codice icona" />
            <flux:error name="icon" />
        </flux:field>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <flux:field>
                <flux:label>Titolo</flux:label>
                <flux:input wire:model="title" id="title" />
                <flux:error name="title" />
            </flux:field>
            <flux:field>
                <flux:label>Sottotitolo</flux:label>
                <flux:input wire:model="subtitle" id="subtitle" />
                <flux:error name="subtitle" />
            </flux:field>
        </div>
        <flux:field>
            <flux:label>Descrizione</flux:label>
            <flux:textarea wire:model="description" id="description" />
            <flux:error name="description" />
        </flux:field>

        <div class="w-full flex justify-end">
            <flux:button type="submit" class="w-[150px]">Crea</flux:button>
        </div>
    </form>
</div>