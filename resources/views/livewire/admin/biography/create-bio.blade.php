<div>
    <div class="flex justify-between items-center border-b border-zinc-600 py-3">
        <h2 class="text-xl font-bold uppercase">Biografia \ Crea</h2>
         <flux:button wire:navigate href="\admin\biography-home" class="w-[150px]">Torna indietro</flux:button>
    </div>

    <form wire:submit.prevent="submit" class="mt-5">
        <flux:field>
            <flux:label>Descrizione</flux:label>
            <flux:textarea wire:model="description" id="description" />
            <flux:error name="description" />
        </flux:field>

        <div class="mt-5">
            <flux:input type="file" wire:model="img_url" label="Allega immagine" />
        </div>


        <div class="w-full flex justify-end">
            <flux:button type="submit" class="w-[150px]">Crea</flux:button>
        </div>
    </form>
</div>