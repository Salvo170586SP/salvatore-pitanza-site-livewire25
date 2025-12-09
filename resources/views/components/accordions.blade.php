@props([
'experiences',
])

<div class="space-y-4" x-data="{ openItems: [] }">
    @foreach($experiences as $item)
    <div class="rounded-xl bg-white dark:bg-zinc-800 border dark:border-zinc-700 transition-all duration-100 hover:shadow">

        <button @click="
                    openItems.includes({{ $item->id }})
                        ? openItems = openItems.filter(i => i !== {{ $item->id }})
                        : openItems.push({{ $item->id }})
                " class="w-full px-6 py-4 text-left flex justify-between items-center cursor-pointer">
            <span class="font-semibold">{{ $item->title }}</span>

            <svg class="w-5 h-5 text-zinc-400 transition-transform duration-100"
                :class="openItems.includes({{ $item->id }}) ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div x-show="openItems.includes({{ $item->id }})" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-2" class="px-6 py-4 border-t dark:border-zinc-700">
            <p class="leading-relaxed dark:text-zinc-400 text-sm">{!! $item->description !!}</p>
        </div>

    </div>
    @endforeach
</div>