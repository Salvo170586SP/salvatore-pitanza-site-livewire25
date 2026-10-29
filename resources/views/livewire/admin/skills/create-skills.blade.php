<div>
    <div class="flex justify-between items-center border-b border-zinc-200 dark:border-zinc-600 py-3">
        <h2 class="text-lg font-bold uppercase text-zinc-700 dark:text-white">Skills \ Crea</h2>
        <flux:button icon="arrow-left" wire:navigate href="/admin/skills-home" variant="filled">
            Torna indietro
        </flux:button>
    </div>

    <form wire:submit.prevent="submit" class="w-full mt-10 space-y-5">
        <div class="flex flex-col  justify-center items-center gap-5">
            <flux:field class="w-80">
                <flux:label>Nome</flux:label>
                <flux:input wire:model="name" id="name" />
                <flux:error name="name" />
            </flux:field>

            <flux:field class="w-80">
                <flux:label>Tipo</flux:label>
                <flux:select wire:model="type" id="type">
                    <flux:select.option value="">-</flux:select.option>
                    @foreach($types as $index => $item)
                    <flux:select.option wire:key="types-{{$item['id']}}" value="{{$item['id']}}">
                        {{$item['label']}}
                    </flux:select.option>
                    @endforeach
                </flux:select>
            </flux:field>

            <flux:field class="w-80">
                <flux:label>Livello</flux:label>
                <flux:select wire:model="level" id="level">
                    <flux:select.option value="">-</flux:select.option>
                    @foreach(\App\Enums\SkillLevels::cases() as $item)
                    <flux:select.option wire:key="levels-{{ $item->value }}" value="{{ $item->value }}">
                        {{ $item->value }}
                    </flux:select.option>
                    @endforeach
                </flux:select>
            </flux:field>

            <flux:field class="w-80">
                <flux:label>Descrizione</flux:label>
                <flux:textarea id="description" wire:model="description"></flux:textarea>
            </flux:field>

            <div class="w-80">
                <flux:input type="file" wire:model="url_icon" label="Allega icona" />
            </div>
        </div>


        <div class="w-full flex justify-end">
            <flux:button type="submit" class="w-[150px]" variant="filled">Crea</flux:button>
        </div>
    </form>
</div>