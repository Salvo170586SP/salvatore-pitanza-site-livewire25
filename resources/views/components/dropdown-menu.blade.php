<div x-data='{isOpen : false}' class="relative">
    <button @click="isOpen = !isOpen" @click.outside="isOpen = false" class="flex items-center text-sm font-medium leading-normal hover:text-primary transition-colors">
        Altro
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"
            class="size-3 ms-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>
    </button>
    <div x-show="isOpen" x-cloak class="w-auto absolute top-11 -left-24 py-2 px-8 shadow border bg-white dark:bg-zinc-800 dark:border-zinc-700  space-y-2 rounded-[7px] text-sm font-medium leading-normal hover:text-primary">
        {{$slot}}
    </div>
</div>