<div>
    <!-- HeroSection -->
    <section id="jumbotron">
        <div class="flex flex-col gap-6 px-2 py-25 text-center sm:px-4 sm:py-28 md:py-24">
            <div class="flex flex-col gap-4 items-center">
                <h1 class="text-4xl font-black leading-tight tracking-[-0.033em] sm:text-5xl md:text-7xl max-w-2xl">
                    Salvatore Pitanza
                </h1>
                <h2 class="text-2xl font-black leading-tight tracking-[-0.033em] sm:text-5xl md:text-4xl max-w-2xl">
                    Full Stack Laravel & Livewire Developer
                </h2>
                <h2
                    class="text-base font-normal leading-normal text-subtle-light dark:text-zinc-400 sm:text-lg max-w-xl">
                    Scopri le mie competenze nel mondo dello sviluppo
                    web
                </h2>
            </div>
            <div class="flex-wrap gap-3 flex justify-center">
                <button wire:navigate href="/projects"
                    class="flex min-w-[184px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary dark:bg-indigo-900 text-white text-base font-bold leading-normal tracking-[0.015em] hover:opacity-90 transition-opacity">
                    <span class="truncate">Portfolio</span>
                </button>
                <button wire:navigate href="/skills"
                    class="flex min-w-[184px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-zinc-400/10 dark:bg-zinc-800 border border-zinc-300 dark:border-zinc-700 text-zinc-500 dark:text-text-dark text-base font-bold leading-normal tracking-[0.015em] hover:bg-zinc-200 dark:hover:bg-zinc-900 transition-colors">
                    <span class="truncate">Il mio CV</span>
                </button>
            </div>
        </div>
    </section>
</div>