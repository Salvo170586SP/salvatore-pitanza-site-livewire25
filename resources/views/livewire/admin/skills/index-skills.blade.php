<div>
    <div class="flex justify-between items-center border-b border-zinc-600 py-3">
        <h2 class="text-xl font-bold uppercase">Skills</h2>

        <div x-data="{ showMessage: true }">
            @if (session('message'))
            <x-alert title="{{ session('message') }}" positive class="bg-green-600 text-white"
                x-init="setTimeout(() => showMessage = false, 5000)" x-show="showMessage" />
            @endif
        </div>
    </div>

    <div class="w-full flex justify-end mt-12">
        <flux:button icon="plus" wire:navigate href="/admin/skills-home/created">
            Aggiungi
        </flux:button>
    </div>
    @if($skills->isNotEmpty())
    <table
        class="min-w-full bg-zinc-500/20 divide-y my-5  divide-zinc-500/50 border border-slate-600 rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase   w-64">
                    Immagine
                </th>
                <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase   w-64">
                    Nome
                </th>
                <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase  w-32">
                    Ultima modifica</th>
                <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase w-32">
                </th>
            </tr>
        </thead>
        <tbody class="bg-zinc-400/10 divide-y divide-zinc-500/60 text-sm">
            @foreach($skills as $skill)
            <tr wire:key="skill-{{$skill->id}}">
                <td class="px-6 py-4">
                    @if($skill->url_icon)
                    <figure class="w-10 h-10 overflow-hidden rounded-lg">
                        <img class="w-full h-full object-cover" src="{{ asset('/storage/'.$skill->url_icon) }}"
                            alt="{{$skill->url_icon}}" />
                    </figure>
                    @else
                    <div class="w-20 h-20 flex items-center justify-center bg-zinc-600 rounded-lg">
                        No Img
                    </div>
                    @endif
                </td>
                <td class="px-6 py-4">
                    <div class="max-w-xs truncate">
                        {{$skill->name ?? 'n/d'}}
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="max-w-xs truncate">
                        {{$skill->getDate() ?? 'n/d'}}
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                    <div class="flex justify-center gap-2">
                        <flux:button wire:navigate href="/admin/skills-home/{{$skill->id}}/edit" class="-ms-2"
                            variant="filled" icon="pencil">
                            Modifica
                        </flux:button>

                        <flux:modal.trigger name="delete-skill->[{{$skill->id}}]">
                            <flux:button variant="danger" class="cursor-pointer" icon="trash">Elimina</flux:button>
                        </flux:modal.trigger>
                        <flux:modal name="delete-skill->[{{$skill->id}}]" class="min-w-[22rem]">
                            <div class="space-y-6">
                                <div>
                                    <flux:text class="mt-8">
                                        <div class="bg-red-500 p-2 uppercase font-bold rounded-lg my-3">
                                            Attenzione!!
                                        </div>
                                    </flux:text>
                                    <flux:text class="mt-2">
                                        <div>
                                            Sei sicuro di eliminare definitivamente l'elemento?
                                        </div>
                                    </flux:text>
                                </div>
                                <div class="flex gap-2">
                                    <flux:spacer />
                                    <flux:modal.close>
                                        <flux:button variant="ghost">Annulla</flux:button>
                                    </flux:modal.close>
                                    <flux:button wire:click="deleteSkill({{$skill->id}})" variant="danger">
                                        Elimina
                                    </flux:button>
                                </div>
                            </div>
                        </flux:modal>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="w-full text-center py-10">
        <p class="text-zinc-400">Nessun elemento creato</p>
    </div>
    @endif
</div>