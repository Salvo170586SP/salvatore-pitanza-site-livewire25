<div>
    <div class="flex justify-between items-center border-b border-zinc-600 py-3">
        <h2 class="text-xl font-bold uppercase">Disegni \ Modifica</h2>
        <flux:button icon="arrow-left" wire:navigate href="/admin/drawings-home">
            Torna indietro
        </flux:button>
    </div>

    <form wire:submit.prevent="submit" class="mt-5 space-y-3">
        <flux:field>
            <flux:label>Titolo</flux:label>
            <flux:input wire:model="title" id="title" />
            <flux:error name="title" />
        </flux:field>

        <flux:field>
            <flux:label>Url Instagram</flux:label>
            <flux:input wire:model="url_instagram" id="url_instagram" />
            <flux:error name="url_instagram" />
        </flux:field>

        <div class="mt-5">
            <flux:input type="file" wire:model="img_url" id="img_url" label="Allega immagine" />
        </div>

        <div class="w-full flex justify-end">
            <flux:button type="submit" class="w-[150px]">Modifica</flux:button>
        </div>
    </form>
</div>