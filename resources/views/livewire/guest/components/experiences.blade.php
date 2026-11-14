<div>
    <section id="experience" class="w-full">
        <h2 class="font-bold text-2xl pb-8 border-b">
            Esperienze
        </h2>

        @if($experiences->count() > 0)
        @foreach($experiences as $item)
        <div class="w-full flex flex-col sm:flex-row gap-5 sm:gap-20 border-b py-8">
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
        </div>
        @endforeach
        @else
        <x-isset-placeholder />
        @endif

    </section>
</div>