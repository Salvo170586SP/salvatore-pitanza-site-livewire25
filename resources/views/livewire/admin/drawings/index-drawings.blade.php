<div>
    <div class="flex justify-between items-center border-b border-zinc-200 dark:border-zinc-600 py-3">
        <h2 class="text-lg font-bold uppercase text-zinc-700 dark:text-white">Disegni</h2>
        <div x-data="{ showMessage: true }">
            @if (session('message'))
            <x-alert title="{{ session('message') }}" positive class="bg-green-600 text-white"
                x-init="setTimeout(() => showMessage = false, 5000)" x-show="showMessage" />
            @endif
        </div>
    </div>

    <div class="w-full flex justify-end space-x-3  items-center mt-10">
        <flux:button icon="plus" wire:navigate href="/admin/drawings-home/create" variant="filled">
            Aggiungi
        </flux:button>
    </div>

    @if($drawings->isNotEmpty())
    <div class="border border-zinc-200 dark:border-0 my-5 rounded-lg overflow-hidden">
        <table class="min-w-full bg-zinc-200/20 dark:bg-zinc-500/20 divide-y dark:divide-zinc-500/50">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase   w-64">
                        Immagine
                    </th>
                    <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase   w-64">
                        Titolo
                    </th>
                    <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase   w-64">
                        Url
                    </th>
                    <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase  w-32">
                        Caricato il</th>
                    <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase w-32">
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y dark:divide-zinc-600/60 text-sm">
                @foreach($drawings as $draw)
                <tr wire:key="draw-{{$draw->id}}">
                    <td class="px-6 py-4">
                        @if($draw->img_url)
                        <figure class="w-15 h-15 overflow-hidden rounded-lg">
                            <img class="w-full h-full object-cover" src="{{ asset('/storage/'.$draw->img_url) }}"
                                alt="{{$draw->img_url}}" />
                        </figure>
                        @else
                        <div class="w-15 h-15 flex items-center justify-center bg-zinc-600 rounded-lg">
                            No Img
                        </div>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <div class="max-w-xs truncate">
                            {{$draw->title ?? 'n/d'}}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="max-w-xs truncate">
                            {{$draw->url_instagram ?? 'n/d'}}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="max-w-xs truncate">
                            {{$draw->getDate() ?? 'n/d'}}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <div class="flex justify-end gap-2">
                            <flux:button wire:navigate href="/admin/drawings-home/{{$draw->id}}/edit" download
                                class="-ms-2" variant="filled" icon="pencil">
                                Modifica
                            </flux:button>

                            <flux:modal.trigger name="delete-skill->[{{$draw->id}}]">
                                <flux:button variant="danger" class="cursor-pointer" icon="trash">Elimina</flux:button>
                            </flux:modal.trigger>
                            <flux:modal name="delete-skill->[{{$draw->id}}]" class="min-w-[22rem]">
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
                                        <flux:button wire:click="deleteDraw({{$draw->id}})" variant="danger">
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
    </div>
    @else
    <div class="w-full text-center py-10">
        <p class="text-zinc-400">Nessun disegno creato</p>
    </div>
    @endif
</div>