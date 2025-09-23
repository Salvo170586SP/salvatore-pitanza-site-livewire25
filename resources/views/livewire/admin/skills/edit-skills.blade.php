<div>
    <div class="flex justify-between items-center border-b border-zinc-600 py-3">
        <h2 class="text-xl font-bold uppercase">Skills \ Modifica</h2>
        <flux:button icon="arrow-left" wire:navigate href="/admin/skills-home">
            Torna indietro
        </flux:button>
    </div>

    <form wire:submit.prevent="submit" class="mt-5">
        <flux:field>
            <flux:label>Nome</flux:label>
            <flux:input wire:model="name" id="name" />
            <flux:error name="name" />
        </flux:field>

        <div class="mt-5">
            <flux:input type="file" wire:model="url_icon" label="Allega icona" />
        </div>

        <div class="w-full flex justify-end">
            <flux:button type="submit" class="w-[150px]">Modifica</flux:button>
        </div>
    </form>
</div>