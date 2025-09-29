<div>
    <div class="flex justify-between items-center border-b border-zinc-200 dark:border-zinc-600 py-3">
        <h2 class="text-lg font-bold uppercase text-zinc-700 dark:text-white">Biografia \ Modifica</h2>
         <flux:button icon="arrow-left" variant="filled" wire:navigate href="/admin/biography-home">
            Torna indietro
        </flux:button>
    </div>

    <form wire:submit.prevent="submit" class="mt-5">
        <flux:field>
            <flux:label>Descrizione</flux:label>
            <flux:textarea rows="10" wire:model="description" id="description" />
            <flux:error name="description" />
        </flux:field>

        <div class="mt-5 mb-10 flex justify-between">
            <flux:input type="file" wire:model="img_url"  label="Allega nuova immagine" />
            <figure class="w-30 h-30 overflow-hidden rounded-lg">
                <img class="w-full h-full object-cover" src="{{ asset('/storage/'.$biography->img_url) }}"
                    alt="{{$biography->img_url}}" />
            </figure>
        </div>
        <div class="w-full flex justify-end">
            <flux:button type="submit" class="w-[150px]" variant="filled">Modifica</flux:button>
        </div>
    </form>
</div>