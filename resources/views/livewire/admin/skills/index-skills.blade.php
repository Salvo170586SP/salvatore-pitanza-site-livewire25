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

    <div class="w-full flex justify-between space-x-3  items-center mt-10">
        <h3 class="font-semibold">Descrizione Skills</h3>
        @if(!$skillInfo)
        <flux:button icon="plus" wire:navigate href="/admin/skills-home/create-general-description">
            Aggiungi Descrizione
        </flux:button>
        @endif
    </div>
    <div class="my-5 border border-zinc-600/10 bg-zinc-500/20 rounded-lg p-5">
        @if($skillInfo)
        <p class="font-medium text-sm  text-slate-200 whitespace-normal overflow-wrap break-words leading-relaxed">
            {{$skillInfo->general_description}}
        </p>
        <div class="flex justify-end gap-2 mt-5">
            <flux:button wire:navigate href="/admin/skills-home/{{$skillInfo->id}}/edit-general-description"
                class="-ms-2" variant="filled" icon="pencil">
                Modifica
            </flux:button>

            <flux:modal.trigger name="delete-skillInfo->[{{$skillInfo->id}}]">
                <flux:button variant="danger" class="cursor-pointer" icon="trash">Elimina</flux:button>
            </flux:modal.trigger>
            <flux:modal name="delete-skillInfo->[{{$skillInfo->id}}]" class="min-w-[22rem]">
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
                        <flux:button wire:click="deleteSkillInfo({{$skillInfo->id}})" variant="danger">
                            Elimina
                        </flux:button>
                    </div>
                </div>
            </flux:modal>
        </div>
        @else
        <p class="font-medium text-sm text-slate-300">
            Nessuna descrizione
        </p>
        @endif
    </div>

    <div class="w-full flex justify-between items-center space-x-3 mt-10">
        <h3 class="font-semibold">CV e Lettera di Presentazione</h3>
        <flux:modal.trigger name="add-document">
            <flux:button class="cursor-pointer" icon="plus">Aggiungi Documento</flux:button>
        </flux:modal.trigger>
    </div>

    <flux:modal name="add-document" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:text class="mt-8">
                    <div class="p-2 uppercase font-bold rounded-lg my-3">
                        Carica CV o Lettera di Presentazione
                    </div>
                </flux:text>
                <div class="mt-5">
                    <flux:input type="file" wire:model="doc_url" />
                </div>
            </div>
            <div class="flex gap-2">
                <flux:spacer />
                <flux:modal.close>
                    <flux:button variant="ghost">Annulla</flux:button>
                </flux:modal.close>
                <flux:button wire:click="addDocument">
                    Carica
                </flux:button>
            </div>
        </div>
    </flux:modal>

    @if($documents->isNotEmpty())
    <table
        class="min-w-full bg-zinc-500/20 divide-y my-5  divide-zinc-500/50 border border-slate-600 rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase   w-64">
                    Nome
                </th>
                <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase  w-32">
                    Caricato il</th>
                <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase w-32">
                </th>
            </tr>
        </thead>
        <tbody class="bg-zinc-400/10 divide-y divide-zinc-500/60 text-sm">
            @foreach($documents as $doc)
            <tr wire:key="doc-{{$doc->id}}">
                <td class="px-6 py-4">
                    <div class="max-w-xs truncate">
                        {{$doc->name_doc ?? 'n/d'}}
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="max-w-xs truncate">
                        {{$doc->getDate() ?? 'n/d'}}
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                    <div class="flex justify-end gap-2">
                        <flux:button href="{{asset('/storage/'.$doc->doc_url)}}" download class="-ms-2" variant="filled"
                            icon="arrow-down-tray">
                            Vedi
                        </flux:button>

                        <flux:modal.trigger name="delete-skill->[{{$doc->id}}]">
                            <flux:button variant="danger" class="cursor-pointer" icon="trash">Elimina</flux:button>
                        </flux:modal.trigger>
                        <flux:modal name="delete-skill->[{{$doc->id}}]" class="min-w-[22rem]">
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
                                    <flux:button wire:click="deleteDoc({{$doc->id}})" variant="danger">
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
        <p class="text-zinc-400">Nessun documento creato</p>
    </div>
    @endif

    <div class="w-full flex justify-between items-center space-x-3 mt-10">
        <h3 class="font-semibold">Icone Skills</h3>
        <flux:button icon="plus" wire:navigate href="/admin/skills-home/created">
            Aggiungi Skills
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
                    <div class="flex justify-end gap-2">
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