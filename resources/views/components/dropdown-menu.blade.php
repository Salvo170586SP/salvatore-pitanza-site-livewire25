<div x-data='{isOpen : false}' class="relative">
    <button @click="isOpen = !isOpen" @click.outside="isOpen = false"
        class="text-sm font-medium text-zinc-400 hover:text-zinc-100 transition-colors cursor-pointer flex items-center">
        Altro
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"
            class="size-4 ms-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>
    </button>
    <div x-show="isOpen"
        class="w-[200px] absolute top-6 left-0 p-2 rounded-[7px] bg-zinc-900/80 border border-zinc-800 space-y-2">
        {{$slot}}
    </div>
</div>