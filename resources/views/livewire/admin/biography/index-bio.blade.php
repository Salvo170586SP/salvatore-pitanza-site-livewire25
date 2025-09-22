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
        <div class="w-full flex justify-end mb-5">
            <flux:button icon="plus" wire:navigate href="/admin/biography-home/created">
                Aggiungi
            </flux:button>
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
                    modifica il {{$biography->getDate()}}</span>
                <div class="w-full flex justify-end items-center gap-2">
                    <flux:button wire:navigate href="/admin/biography-home/{{$biography->id}}/edit" variant="filled"
                        icon="pencil">Modifica
                    </flux:button>
                    <flux:modal.trigger name="delete-profile-[{{$biography->id}}]">
                        <flux:button variant="danger" icon="trash" class="cursor-pointer">Elimina</flux:button>
                    </flux:modal.trigger>
                    <flux:modal name="delete-profile-[{{$biography->id}}]" class="min-w-[22rem]">
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
        @else
        <div class="text-center italic font-medium">
            Nessuna biografia
        </div>
        @endif
    </div>

</div>