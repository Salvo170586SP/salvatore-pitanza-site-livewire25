<div>

    <div class="flex justify-between items-center border-b border-zinc-200 dark:border-zinc-600 py-3">
        <h2 class="text-lg font-bold uppercase text-zinc-700 dark:text-white">Dashboard</h2>
    </div>

    <div class="py-5 flex flex-wrap gap-5">
        <button wire:navigate href="/admin/biography-home"
            class="bg-zinc-100/70 hover:bg-zinc-200/70 border border-zinc-200 dark:border-0 text-zinc-700 dark:bg-zinc-300/20 dark:hover:bg-zinc-600/70 px-4 py-3 rounded-lg dark:text-white cursor-pointer  w-[290px] h-[60px] text-lg font-semibold flex justify-between items-center">
            Biografia
        </button>
        <button wire:navigate href="/admin/trainings-home"
            class="bg-zinc-100/70 hover:bg-zinc-200/70 border border-zinc-200 dark:border-0 text-zinc-700 dark:bg-zinc-300/20 dark:hover:bg-zinc-600/70 px-4 py-3 rounded-lg dark:text-white cursor-pointer  w-[290px] h-[60px] text-lg font-semibold flex justify-between items-center">
            Percorsi
        </button>
        <button wire:navigate href="/admin/projects-home"
            class="bg-zinc-100/70 hover:bg-zinc-200/70 border border-zinc-200 dark:border-0 text-zinc-700 dark:bg-zinc-300/20 dark:hover:bg-zinc-600/70 px-4 py-3 rounded-lg dark:text-white cursor-pointer  w-[290px] h-[60px] text-lg font-semibold flex justify-between items-center">
            Progetti <span class="inline-flex items-center justify-center text-white h-7 w-7 rounded-full bg-slate-800">{{ $projectsCount }}</span> 
        </button>
        <button wire:navigate href="/admin/experiences-home"
            class="bg-zinc-100/70 hover:bg-zinc-200/70 border border-zinc-200 dark:border-0 text-zinc-700 dark:bg-zinc-300/20 dark:hover:bg-zinc-600/70 px-4 py-3 rounded-lg dark:text-white cursor-pointer  w-[290px] h-[60px] text-lg font-semibold flex justify-between items-center">
            Esperienze <span class="inline-flex items-center justify-center text-white h-7 w-7 rounded-full bg-slate-800">{{ $experiencesCount }}</span> 
        </button>
        <button wire:navigate href="/admin/skills-home"
            class="bg-zinc-100/70 hover:bg-zinc-200/70 border border-zinc-200 dark:border-0 text-zinc-700 dark:bg-zinc-300/20 dark:hover:bg-zinc-600/70 px-4 py-3 rounded-lg dark:text-white cursor-pointer  w-[290px] h-[60px] text-lg font-semibold flex justify-between items-center">
            Skills <span class="inline-flex items-center justify-center text-white h-7 w-7 rounded-full bg-slate-800">{{ $skillsCount }}</span> 
        </button>
        <button wire:navigate href="/admin/drawings-home"
            class="bg-zinc-100/70 hover:bg-zinc-200/70 border border-zinc-200 dark:border-0 text-zinc-700 dark:bg-zinc-300/20 dark:hover:bg-zinc-600/70 px-4 py-3 rounded-lg dark:text-white cursor-pointer  w-[290px] h-[60px] text-lg font-semibold flex justify-between items-center">
            Disegni <span class="inline-flex items-center justify-center text-white h-7 w-7 rounded-full bg-slate-800">{{ $drawingsCount }}</span> 
        </button>
        <button wire:navigate href="/admin/documents-home"
            class="bg-zinc-100/70 hover:bg-zinc-200/70 border border-zinc-200 dark:border-0 text-zinc-700 dark:bg-zinc-300/20 dark:hover:bg-zinc-600/70 px-4 py-3 rounded-lg dark:text-white cursor-pointer  w-[290px] h-[60px] text-lg font-semibold flex justify-between items-center">
            Documenti <span class="inline-flex items-center justify-center text-white h-7 w-7 rounded-full bg-slate-800">{{ $documentsCount }}</span> 
        </button>
    </div>

</div>