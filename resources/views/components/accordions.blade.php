@props([
    'experiences',
])
 
<div class="max-w-4xl  mx-auto">
    <div class="space-y-4" x-data="{ 
                        items: {{json_encode($experiences)}},
                        openItem: null,
                        toggle(id) {
                            this.openItem = this.openItem === id ? null : id;
                        }
                    }">
        <template x-for="item in items" :key="item.id">
            <div
                class="rounded-lg bg-slate-600/20 border border-slate-500/30 overflow-hidden transition-all duration-100 hover:shadow-lg text-white">
                <button @click="toggle(item.id)"
                    class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-slate-600/30 transition-colors duration-100 focus:outline-none cursor-pointer"
                    :class="{ 'bg-slate-600/30': openItem === item.id }">
                    <span class="font-semibold" :class="{ 'text-blue-300': openItem === item.id }"
                        x-text="item.title"></span>
                    <svg class="w-5 h-5 text-gray-300 transition-transform duration-100"
                        :class="{ 'rotate-180 text-blue-600': openItem === item.id }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openItem === item.id" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="px-6 py-4 bg-slate-600/20 border-t border-gray-700">
                    <p class="text-zinc-300 leading-relaxed" x-text="item.description"></p>
                </div>
            </div>
        </template>
    </div>
</div>