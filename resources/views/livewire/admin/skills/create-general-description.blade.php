<div>
    <div class="flex justify-between items-center border-b border-zinc-200 dark:border-zinc-600 py-3">
        <h2 class="text-lg font-bold uppercase text-zinc-700 dark:text-white">Skills \ Crea Descrione</h2>
        <flux:button icon="arrow-left" wire:navigate href="/admin/skills-home" variant="filled">
            Torna indietro
        </flux:button>
    </div>

    <form wire:submit.prevent="submit" class="mt-5 space-y-5">
        <flux:field>
            <flux:label>Descrizione</flux:label>
            <flux:textarea rows="15" id="general_description" wire:model="general_description" /> 
            <flux:error name="general_description" />
        </flux:field>

        <div class="w-full flex justify-end">
            <flux:button type="submit" class="w-[150px]" variant="filled">Crea</flux:button>
        </div>
    </form>
</div>

 