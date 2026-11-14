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