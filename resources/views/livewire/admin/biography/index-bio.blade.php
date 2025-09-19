<div>

    <div class="flex justify-between items-center border-b border-zinc-600 py-3">
        <h2 class="text-xl font-bold uppercase">Biografia</h2>

        <div x-data="{ showMessage: true }">
            @if (session('message'))
            <x-alert title="{{ session('message') }}" positive class="bg-green-600 text-white"
                x-init="setTimeout(() => showMessage = false, 5000)" x-show="showMessage" />
            @endif
        </div>
    </div>

    <div class="py-5">

        @if(!$biography)
        <div class="w-full flex justify-end">
            <button
                class="bg-gray-500 hover:bg-gray-600 px-3 py-2 flex rounded-[7px] text-sm font-medium mb-5 cursor-pointer"
                wire:navigate href="/admin/biography-home/created">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4 me-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                Aggiungi
            </button>
        </div>
        @endif

        @if($biography)
        <div class="w-full rounded-2xl border border-zinc-700/90 bg-zinc-900/50 overflow-hidden p-5">
            <div class="flex justify-between gap-5">
                <figure class="w-50 h-50 overflow-hidden rounded-lg">
                    <img class="w-full h-full object-cover" src="{{ asset('/storage/'.$biography->img_url) }}"
                        alt="{{$biography->img_url}}" />
                </figure>
                <div
                    class="w-full p-3 rounded-lg text-xs font-medium bg-zinc-700 text-zinc-300 hover:bg-zinc-600 transition-colors ">
                    {{$biography->description}}</div>
            </div>
            <div class="w-full flex justify-between items-center mt-3">
                <span class="w-full inline-block  mt-5 text-xs font-medium text-zinc-300">Ultima
                    modifica il {{$biography->updated_at}}</span>
                <div class="w-full flex justify-end items-center gap-2">
                    <flux:button wire:navigate href="/admin/biography-home/{{$biography->id}}/edit">Modifica
                    </flux:button>
                    <flux:modal.trigger name="delete-profile">
                        <flux:button variant="danger">Elimina</flux:button>
                    </flux:modal.trigger>
                    <flux:modal name="delete-profile" class="min-w-[22rem]">
                        <div class="space-y-6">
                            <div>
                                <flux:text class="mt-8">
                                    <div class="bg-red-500 p-2 uppercase font-bold rounded-lg my-3">
                                        Attenzione!!
                                    </div>
                                </flux:text>

                                <flux:text class="mt-2">
                                    <div>
                                        Sei sicuro di eliminare definitivamente la biografia?
                                    </div>
                                </flux:text>
                            </div>

                            <div class="flex gap-2">
                                <flux:spacer />

                                <flux:modal.close>
                                    <flux:button variant="ghost">Annulla</flux:button>
                                </flux:modal.close>

                                <flux:button wire:click="deleteBio({{$biography->id}})" variant="danger">Elimina
                                </flux:button>
                            </div>
                        </div>
                    </flux:modal>
                </div>
            </div>
        </div>

        {{-- <table
            class="min-w-full bg-zinc-500/20 divide-y  divide-zinc-400/50 border border-slate-600 rounded-lg overflow-hidden">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-5 text-left text-xs font-medium   uppercase w-48">
                        Immagine</th>
                    <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase   w-64">
                        Descrizione
                    </th>
                    <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase  w-32">
                        Data
                        Creazione</th>
                    <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase w-32">
                    </th>
                </tr>
            </thead>
            <tbody class="bg-zinc-400/10 divide-y divide-gray-50 text-sm">
                <tr>
                    <td class="px-6 py-4 font-bold whitespace-nowrap">
                        <figure class="w-15 h-15 overflow-hidden rounded-lg">
                            <img class="w-full h-full object-cover" src="{{ asset('/storage/'.$biography->img_url) }}"
                                alt="{{$biography->img_url}}" />
                        </figure>
                    </td>
                    <td class="px-6 py-4">
                        <div class="max-w-xs truncate">
                            {{$biography->description}}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="max-w-xs truncate">
                            {{$biography->created_at}}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <div class="flex justify-center gap-2">
                            <flux:modal.trigger name="delete-profile-[{{$biography->id}}]">
                                <flux:button>Vedi</flux:button>
                            </flux:modal.trigger>

                            <flux:modal name="delete-profile-[{{$biography->id}}]" class="max-w-[700px]">
                                <div class="space-y-6">
                                    <flux:text class="mt-2 max-w-full">
                                        <p class="max-w-full break-words">
                                            {{$biography->description}}
                                        </p>
                                    </flux:text>
                                    <div class="flex gap-2">
                                        <flux:spacer />
                                        <flux:modal.close>
                                            <flux:button variant="ghost">Annulla</flux:button>
                                        </flux:modal.close>
                                    </div>
                                </div>
                            </flux:modal>

                            <flux:button wire:navigate href="/admin/biography-home/{{$biography->id}}/edit">Modifica
                            </flux:button>

                            <flux:modal.trigger name="delete-profile">
                                <flux:button variant="danger">Elimina</flux:button>
                            </flux:modal.trigger>

                            <flux:modal name="delete-profile" class="min-w-[22rem]">
                                <div class="space-y-6">
                                    <div>
                                        <flux:text class="mt-8">
                                            <div class="bg-red-500 p-2 uppercase font-bold rounded-lg my-3">
                                                Attenzione!!
                                            </div>
                                        </flux:text>

                                        <flux:text class="mt-2">
                                            <div>
                                                Sei sicuro di eliminare definitivamente la biografia?
                                            </div>
                                        </flux:text>
                                    </div>

                                    <div class="flex gap-2">
                                        <flux:spacer />

                                        <flux:modal.close>
                                            <flux:button variant="ghost">Annulla</flux:button>
                                        </flux:modal.close>

                                        <flux:button wire:click="deleteBio({{$biography->id}})" variant="danger">Elimina
                                        </flux:button>
                                    </div>
                                </div>
                            </flux:modal>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table> --}}
        @else
        <div class="text-center italic font-medium">
            Nessuna biografia
        </div>
        @endif
    </div>

</div>