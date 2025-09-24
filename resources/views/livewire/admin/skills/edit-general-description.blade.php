<div>
    <div class="flex justify-between items-center border-b border-zinc-600 py-3">
        <h2 class="text-xl font-bold uppercase">Skills \ Modifica Descrione</h2>
        <flux:button icon="arrow-left" wire:navigate href="/admin/skills-home">
            Torna indietro
        </flux:button>
    </div>

    <form wire:submit.prevent="submit" class="mt-5 space-y-5">
        <flux:field>
            <flux:label>Descrizione</flux:label>
            <flux:textarea rows="15" wire:model="general_description" id="general_description" />
            <flux:error name="general_description" />
        </flux:field>
        
        <div class="w-full flex justify-end">
            <flux:button type="submit" class="w-[150px]">Modifica</flux:button>
        </div>
    </form>
</div>