{{-- @props([
'experiences',
])

<div class="space-y-4 w-full" x-data="{ openItems: [] }">
    @foreach($experiences as $item)
    <div class="w-full rounded-xl bg-white border border-zinc-200 transition-all duration-100 hover:shadow-lg">

        <button @click="
                    openItems.includes({{ $item->id }})
                        ? openItems = openItems.filter(i => i !== {{ $item->id }})
                        : openItems.push({{ $item->id }})
                " class="w-full px-6 py-4 text-left flex justify-between items-center cursor-pointer">
            <span class="font-medium  ">{{ $item->title }}</span>

            <div class="flex items-center gap-5">
                <div class="font-medium hidden xs:block">
                    <span class="text-sm text-gray-600">{{ $item->getDate($item->start_date) }}</span>
                    -
                    <span class="text-sm text-gray-600"> {{ $item->getDate($item->end_date) ?? 'Ad oggi' }}</span>
                </div>

                <svg class="w-5 h-5 text-zinc-400 transition-transform duration-100"
                    :class="openItems.includes({{ $item->id }}) ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </button>

        <div x-show="openItems.includes({{ $item->id }})" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-2" class="px-6 py-4 border-t">
            <div class="font-medium xs:hidden mb-2 block">
                <span class="text-sm text-gray-600">{{ $item->getDate($item->start_date) }}</span>
                -
                <span class="text-sm text-gray-600"> {{ $item->getDate($item->end_date) }}</span>
            </div>
            <p class=" font-normal leading-normal text-justify">{!! $item->description !!}</p>
        </div>

    </div>
    @endforeach
</div> --}}

@props([
    'experiences',
])

<div class="w-full space-y-3 sm:space-y-4">
    @foreach($experiences as $item)
        <div
            x-data="{ open: false }"
            class="w-full rounded-xl border border-zinc-200 bg-white transition-shadow duration-150 hover:shadow-lg"
        >
            <h3>
                <button
                    type="button"
                    @click="open = !open"
                    :aria-expanded="open"
                    aria-controls="experience-panel-{{ $item->id }}"
                    class="flex w-full cursor-pointer items-start justify-between gap-3 rounded-xl px-4 py-4 text-left focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-900 sm:items-center sm:px-6"
                >
                    <span class="flex min-w-0 flex-1 flex-col gap-1 sm:flex-row sm:items-center sm:justify-between sm:gap-5">
                        <span class="break-words font-medium">{{ $item->title }}</span>

                        <span class="whitespace-nowrap text-sm text-gray-600">
                            {{ $item->getDate($item->start_date) }}
                            –
                            {{ $item->getDate($item->end_date) ?? 'Ad oggi' }}
                        </span>
                    </span>

                    <svg
                        class="mt-0.5 size-5 shrink-0 text-zinc-400 transition-transform duration-150 sm:mt-0"
                        :class="{ 'rotate-180': open }"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </h3>

            <div id="experience-panel-{{ $item->id }}" x-show="open" x-collapse x-cloak>
                <div class="border-t px-4 py-4 sm:px-6">
                    <div class="leading-relaxed text-left hyphens-auto sm:text-justify">
                        {!! $item->description !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>