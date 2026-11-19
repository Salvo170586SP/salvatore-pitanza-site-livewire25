<div>
    <div x-data="{
        isOpen: false,
        isDark: localStorage.getItem('guest.theme') === 'dark',
        toggleTheme() {
            this.isDark = !this.isDark;
            document.documentElement.classList.toggle('dark', this.isDark);
            localStorage.setItem('guest.theme', this.isDark ? 'dark' : 'light');
        }
    }">

        <!-- TopNavBar -->
        <header
            class="backdrop-blur-sm mx-auto bg-white/80 dark:bg-zinc-900/80 px-4 fixed top-0 left-0 right-0 w-full  h-[60px] z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-border-light dark:border-zinc-800  sm:px-6 py-4">
            <div class="w-full flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <figure class="md:w-[60px] md:h-[60px] h-[40px] w-[40px] invert-100 rounded-full overflow-hidden">
                        <img src="/assets/icon/code.png" class="object-cover w-full h-full dark:invert" />
                    </figure>
                    <div class="-space-y-2 sm:-space-y-1">
                        <p class="font-medium text-sm sm:text-base">Salvatore Pitanza</p>
                        <span class="font-light text-xs">Full-Stack Web Developer</span>
                    </div>
                </div>
                <div class="w-full flex-1 justify-end gap-8">
                    <nav class="hidden md:flex items-center justify-end gap-7">
                        <button wire:navigate href="/"
                            class="text-sm font-medium leading-normal underline underline-offset-4 @if(request()->is('/')) decoration-sky-700 text-sky-700 @else decoration-transparent @endif hover:decoration-sky-800 hover:text-sky-800 dark:text-zinc-300 transition-colors duration-300">
                            Home
                        </button>
                        <button wire:navigate href="/about-me"
                            class="text-sm font-medium leading-normal underline underline-offset-4 @if(request()->is('about-me')) decoration-sky-700 text-sky-700 @else decoration-transparent @endif hover:decoration-sky-800 hover:text-sky-800 dark:text-zinc-300 transition-colors duration-300">
                            Chi sono
                        </button>
                        <button wire:navigate href="/skills"
                            class="text-sm font-medium leading-normal underline underline-offset-4 @if(request()->is('skills')) decoration-sky-700 text-sky-700 @else decoration-transparent @endif hover:decoration-sky-800 hover:text-sky-800 dark:text-zinc-300 transition-colors duration-300">
                            CV
                        </button>
                        <button wire:navigate href="/projects"
                            class="text-sm font-medium leading-normal underline underline-offset-4 @if(request()->is('projects')) decoration-sky-700 text-sky-700 @else decoration-transparent @endif  hover:decoration-sky-800 hover:text-sky-800 dark:text-zinc-300 transition-colors duration-300">
                            Progetti
                        </button>
                        <button wire:navigate href="/drawings"
                            class="text-sm font-medium leading-normal underline underline-offset-4 hover:decoration-sky-800 @if(request()->is('drawings')) decoration-sky-700 text-sky-700 @else decoration-transparent @endif hover:text-sky-800 dark:text-zinc-300 transition-colors duration-300">
                            Oltre il codice
                        </button>
                        <button type="button" @click="toggleTheme()" :aria-pressed="isDark"
                            :aria-label="isDark ? 'Attiva modalità chiara' : 'Attiva modalità scura'"
                            class="inline-flex size-10 items-center justify-center rounded-full text-zinc-700 transition hover:bg-zinc-100 dark:text-zinc-200 dark:hover:bg-zinc-800"
                            title="Cambia tema">
                            <svg x-show="!isDark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-2.636-1.591 1.591M5.25 12H3m2.636-4.773L4.045 5.636M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Z" />
                            </svg>
                            <svg x-show="isDark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5" aria-hidden="true" x-cloak>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.752 15.002A9.718 9.718 0 0 1 18 15.75 9.75 9.75 0 0 1 8.25 6c0-1.326.264-2.59.742-3.742A9.752 9.752 0 1 0 21.752 15.002Z" />
                            </svg>
                        </button>
                    </nav>
                </div>

                <div class="flex items-center gap-2 md:hidden">
                    <button type="button" @click="toggleTheme()" :aria-pressed="isDark"
                        :aria-label="isDark ? 'Attiva modalità chiara' : 'Attiva modalità scura'"
                        class="inline-flex size-10 items-center justify-center rounded-full text-zinc-700 transition hover:bg-zinc-100 dark:text-zinc-200 dark:hover:bg-zinc-800"
                        title="Cambia tema">
                        <svg x-show="!isDark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-2.636-1.591 1.591M5.25 12H3m2.636-4.773L4.045 5.636M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Z" />
                        </svg>
                        <svg x-show="isDark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-5" aria-hidden="true" x-cloak>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.752 15.002A9.718 9.718 0 0 1 18 15.75 9.75 9.75 0 0 1 8.25 6c0-1.326.264-2.59.742-3.742A9.752 9.752 0 1 0 21.752 15.002Z" />
                        </svg>
                    </button>
                    <button @click="isOpen =! isOpen" class="block cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-7">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>

            </div>
        </header>

        <!-- MobileNavBar -->
        <div class="md:hidden" x-show="isOpen" x-cloak @click.outside="isOpen = false">
            <div class="w-full fixed left-0 right-0 top-15 border-b z-100 bg-white shadow-lg dark:border-zinc-800 dark:bg-zinc-900">
                <nav class="flex flex-col justify-center items-center w-full p-2">
                    <button wire:navigate href="/"
                        class="w-full py-4 text-center text-sm font-medium leading-normal rounded-xl @if(request()->is('/')) bg-gray-200  @else hover:bg-gray-100 hover:decoration-sky-800 hover:text-sky-800 transition-colors duration-300 @endif">
                        Home
                    </button>
                    <button wire:navigate href="/about-me"
                        class="w-full py-4 text-center text-sm font-medium leading-normal hover:bg-gray-100 rounded-xl @if(request()->is('about-me')) bg-gray-200  @else hover:bg-gray-100 hover:decoration-sky-800 hover:text-sky-800 transition-colors duration-300 @endif">
                        Chi sono
                    </button>
                    <button wire:navigate href="/skills"
                        class="w-full py-4 text-center text-sm font-medium leading-normal hover:bg-gray-100 rounded-xl @if(request()->is('skills')) bg-gray-200  @else hover:bg-gray-100 hover:decoration-sky-800 hover:text-sky-800 transition-colors duration-300 @endif">
                        CV
                    </button>
                    <button wire:navigate href="/projects"
                        class="w-full py-4 text-center text-sm font-medium leading-normal hover:bg-gray-100 rounded-xl @if(request()->is('projects')) bg-gray-200  @else hover:bg-gray-100 hover:decoration-sky-800 hover:text-sky-800 transition-colors duration-300 @endif">
                        Progetti
                    </button>
                    <button wire:navigate href="/drawings"
                        class="w-full py-4 text-center text-sm font-medium leading-normal hover:bg-gray-100 rounded-xl @if(request()->is('drawings')) bg-gray-200  @else hover:bg-gray-100 hover:decoration-sky-800 hover:text-sky-800 transition-colors duration-300 @endif">
                        Oltre il codice
                    </button>
                </nav>
            </div>
        </div>
    </div>
</div>