<div>
    <div class="flex justify-between items-center border-b border-zinc-200 dark:border-zinc-600 py-3">
        <h2 class="text-lg font-bold uppercase text-zinc-700 dark:text-white">Esperienze</h2>

        <div x-data="{ showMessage: true }">
            @if (session('message'))
            <x-alert title="{{ session('message') }}" positive class="bg-green-600 text-white"
                x-init="setTimeout(() => showMessage = false, 5000)" x-show="showMessage" />
            @endif
        </div>
    </div>

    <div class="w-full flex justify-end mt-12">
        <flux:button icon="plus" wire:navigate href="/admin/experiences-home/created" variant="filled">
            Aggiungi
        </flux:button>
    </div>
    @if($experiences->isNotEmpty())
    <div class="border border-zinc-200 dark:border-0 my-5 rounded-lg overflow-hidden">
        <table class="min-w-full bg-zinc-200/20 dark:bg-zinc-500/20 divide-y dark:divide-zinc-500/50">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase   w-64">
                        Titolo
                    </th>
                    <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase   w-64">
                        Descrizione
                    </th>
                    <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase  w-32">
                        Ultima modifica</th>
                    <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase w-32">
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y dark:divide-zinc-600/60 text-sm">
                @foreach($experiences as $experience)
                <tr wire:key="experience-{{$experience->id}}">
                    <td class="px-6 py-4">
                        <div class="max-w-xs truncate">
                            {{$experience->title ?? 'n/d'}}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="max-w-xs truncate">
                            {{$experience->description ?? 'n/d'}}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="max-w-xs truncate">
                            {{$experience->getDate() ?? 'n/d'}}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <div class="flex justify-end gap-2">
                            <flux:modal.trigger name="view-experience-[{{$experience->id}}]">
                                <flux:button class="cursor-pointer" variant="filled" icon="eye">Vedi</flux:button>
                            </flux:modal.trigger>
                            <flux:modal name="view-experience-[{{$experience->id}}]"
                                class="min-w-[500px] max-w-[700px]">
                                <div class="space-y-6">
                                    <flux:text class="mt-2 max-w-full">
                                        <h2 class="font-semibold text-lg">{{$experience->title ?? 'n/d'}}</h2>
                                        <p
                                            class="max-w-full whitespace-normal overflow-wrap break-words text-sm leading-relaxed">
                                            {{$experience->description ?? 'n/d'}}
                                        </p>
                                    </flux:text>
                                    <div class="flex gap-2">
                                        <flux:spacer />
                                        <flux:modal.close>
                                            <flux:button variant="ghost">Chiudi</flux:button>
                                        </flux:modal.close>
                                    </div>
                                </div>
                            </flux:modal>

                            <flux:button wire:navigate href="/admin/experiences-home/{{$experience->id}}/edit"
                                class="-ms-2" variant="filled" icon="pencil">
                                Modifica
                            </flux:button>

                            <flux:modal.trigger name="delete-experience->[{{$experience->id}}]">
                                <flux:button variant="danger" class="cursor-pointer" icon="trash">Elimina</flux:button>
                            </flux:modal.trigger>
                            <flux:modal name="delete-experience->[{{$experience->id}}]" class="min-w-[22rem]">
                                <div class="space-y-6">
                                    <div>
                                        <flux:text class="mt-8">
                                            <div class="bg-red-500 text-white p-2 uppercase font-bold rounded-lg my-3">
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
                                        <flux:button wire:click="deleteExperience({{$experience->id}})"
                                            variant="danger">Elimina
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
    </div>
    @else
    <div class="w-full text-center py-10">
        <p class="text-zinc-400">Nessuna esperienza creata</p>
    </div>
    @endif
</div>