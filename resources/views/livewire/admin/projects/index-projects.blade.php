<div>
    <style>
        .table-container::-webkit-scrollbar {
            display: none;
        }

        .table-container {
            scrollbar-width: none;
            -ms-overflow-style: none;
            user-select: none;
        }
    </style>
    <div class="flex justify-between items-center border-b border-zinc-200 dark:border-zinc-600 py-3">
        <h2 class="text-lg font-bold uppercase text-zinc-700 dark:text-white">Progetti</h2>

        <div x-data="{ showMessage: true }">
            @if (session('message'))
            <x-alert title="{{ session('message') }}" positive class="bg-green-600 text-white"
                x-init="setTimeout(() => showMessage = false, 5000)" x-show="showMessage" />
            @endif
        </div>
    </div>

    <div class="w-full flex justify-end mt-12">
        <flux:button icon="plus" wire:navigate href="/admin/projects-home/created" variant="filled">
            Aggiungi
        </flux:button>
    </div>
    @if($projects->isNotEmpty())
    <div class="min-w-full bg-zinc-200/20 dark:bg-zinc-500/20  my-5 dark:border-0 border  border-zinc-200 relative rounded-lg  table-container overflow-x-auto">
        <div class="inline-block min-w-full">
            <table class="w-full  divide-y dark:divide-zinc-500/50">
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-5 text-left text-xs font-medium   uppercase w-48">
                            Immagine</th>
                        <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase   w-64">
                            Titolo
                        </th>
                        <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase   w-64">
                            Descrizione
                        </th>
                        <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase   w-64">
                            Url Web
                        </th>
                        <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase   w-64">
                            Url Git
                        </th>
                        <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase   w-64">
                            Completamento
                        </th>
                        <th scope="col" class="px-6 py-5 text-left text-xs font-medium uppercase  w-32 ">
                            Ultima modifica</th>
                        <th scope="col"
                            class="px-6 py-5 text-left text-xs font-medium uppercase  w-32  whitespace-nowrap sticky right-0">
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y dark:divide-zinc-600/60 text-sm">
                    @foreach($projects as $project)
                    <tr wire:key="project-{{$project->id}}">
                        <td class="px-6 py-4 font-bold whitespace-nowrap">
                            @if($project->img_url)
                            <figure class="w-20 h-20 overflow-hidden rounded-lg">
                                <img class="w-full h-full object-cover" src="{{ asset('/storage/'.$project->img_url) }}"
                                    alt="{{$project->img_url}}" />
                            </figure>
                            @else
                            <div class="w-20 h-20 flex items-center justify-center bg-zinc-600 rounded-lg">
                               No Img
                            </div>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="max-w-xs truncate">
                                {{$project->title ?? 'n/d'}}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="max-w-xs truncate">
                                {{$project->description ?? 'n/d'}}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="max-w-xs truncate">
                                {{$project->url_web ?? 'n/d'}}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="max-w-xs truncate">
                                {{$project->url_git ?? 'n/d'}}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="max-w-xs truncate">
                                <flux:badge color="{{$project->is_available ? 'blue' : 'red' }}">
                                    {{$project->is_available ? 'Completato' : 'Non Completato'}}</flux:badge>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="max-w-xs truncate">
                                {{$project->getDate() ?? 'n/d'}}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm sticky right-0 backdrop-blur-xl">
                            <div class="flex justify-end items-center gap-2">
                                <flux:modal.trigger name="delete-project-[{{$project->id}}]">
                                    <flux:button class="cursor-pointer" variant="filled" icon="eye">Vedi</flux:button>
                                </flux:modal.trigger>
                                <flux:modal name="delete-project-[{{$project->id}}]"
                                    class="min-w-[500px] max-w-[700px]">
                                    <div class="space-y-6">
                                        <flux:text class="mt-2 max-w-full">
                                            <h2 class="font-semibold text-lg">{{$project->title ?? 'n/d'}}</h2>
                                            <p
                                                class="max-w-full whitespace-normal overflow-wrap break-words text-sm leading-relaxed">
                                                {{$project->description ?? 'n/d'}}
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

                                <flux:button wire:navigate href="/admin/projects-home/{{$project->id}}/edit"
                                    variant="filled" icon="pencil" class="-ms-2">
                                    Modifica
                                </flux:button>

                                <flux:modal.trigger name="delete-profile->[{{$project->id}}]">
                                    <flux:button variant="danger" class="cursor-pointer" icon="trash">Elimina
                                    </flux:button>
                                </flux:modal.trigger>
                                <flux:modal name="delete-profile->[{{$project->id}}]" class="min-w-[22rem]">
                                    <div class="space-y-6">
                                        <div>
                                            <flux:text class="mt-8">
                                                <div class="bg-red-500 text-white p-2 uppercase font-bold rounded-lg my-3">
                                                    Attenzione!!
                                                </div>
                                            </flux:text>
                                            <flux:text class="mt-2">
                                                <div>
                                                    Sei sicuro di eliminare definitivamente il progetto?
                                                </div>
                                            </flux:text>
                                        </div>
                                        <div class="flex gap-2">
                                            <flux:spacer />
                                            <flux:modal.close>
                                                <flux:button variant="ghost">Annulla</flux:button>
                                            </flux:modal.close>
                                            <flux:button wire:click="deleteProject({{$project->id}})" variant="danger">
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
    </div>
</div>
@else
<div class="w-full text-center py-10">
    <p class="text-zinc-400">Nessun progetto creato</p>
</div>
@endif
</div>


@script
<script>
    const tableContainer = document.querySelector('.table-container');
    let isDown = false;
    let startX;
    let scrollLeft;

    tableContainer.addEventListener('mousedown', (e) => {
        isDown = true;
        tableContainer.style.cursor = 'grabbing';
        startX = e.pageX - tableContainer.offsetLeft;
        scrollLeft = tableContainer.scrollLeft;
    });

    tableContainer.addEventListener('mouseleave', () => {
        isDown = false;
        tableContainer.style.cursor = 'grab';
    });

    tableContainer.addEventListener('mouseup', () => {
        isDown = false;
        tableContainer.style.cursor = 'grab';
    });

    tableContainer.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - tableContainer.offsetLeft;
        const walk = (x - startX) * 2;
        tableContainer.scrollLeft = scrollLeft - walk;
    });

    // Imposta il cursore iniziale
    tableContainer.style.cursor = 'grab';
      
</script>
@endscript