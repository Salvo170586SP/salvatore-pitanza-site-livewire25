<div>
    <section id="experience" class="w-full">
        <h2 class="font-bold text-2xl pb-10 {{-- border-b --}}">
            Esperienze
        </h2>

        @if($experiences->count() > 0)
        <ol class="relative ml-3 border-l border-zinc-300"
            aria-label="Esperienze in ordine cronologico, dalla più recente">
            <svg class="absolute -left-[7px] -top-1 size-3 text-zinc-700" viewBox="0 0 12 12" aria-hidden="true">
                <path d="M6 0 12 7H0L6 0Z" fill="currentColor" />
            </svg>

            @foreach($experiences as $item)
            <li class="relative flex w-full flex-col gap-5 border-b border-zinc-300 py-8 pl-8 sm:flex-row sm:gap-20">
                <span class="absolute -left-[7px] top-9 size-3 rounded-full bg-zinc-700 ring-2 ring-white"
                    aria-hidden="true"></span>
                <span class="whitespace-nowrap text-sm text-gray-600 w-50">
                    {{ $item->getDate($item->start_date) }}
                    –
                    {{ $item->getDate($item->end_date) ?? 'Ad oggi' }}
                </span>
                <div class="flex-1">
                    <span class="font-medium">{{ $item->title }}</span>
                    <div class="leading-relaxed text-left text-gray-700 sm:text-justify">
                        {!! $item->description !!}
                    </div>
                </div>
            </li>
            @endforeach
        </ol>
        @else
        <x-isset-placeholder />
        @endif

    </section>
</div>