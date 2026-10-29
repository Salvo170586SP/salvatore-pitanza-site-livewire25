<div>
    <div x-data="{isOpen: false}">

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
                        <span class="font-light text-xs">Full-Stack Developer</span>
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
                    </nav>
                </div>

                <button @click="isOpen =! isOpen"
                    class="md:hidden block text-black font-bold border rounded p-2 cursor-pointer"><svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>

            </div>
        </header>

        <!-- MobileNavBar -->
        <div class="md:hidden" x-show="isOpen" x-cloak @click.outside="isOpen = false" x-transition>
            <div class="w-full fixed left-0 right-0 top-15 border-b z-100 backdrop-blur-sm bg-light/80 shadow-lg">
                <nav class="flex flex-col justify-center items-center divide-y divide-zinc-300 w-full">
                    <button wire:navigate href="/"
                        class="w-full py-4 text-center text-sm font-medium leading-normal hover:bg-gray-200 hover:decoration-sky-800   hover:text-sky-800 transition-colors duration-300">
                        Home
                    </button>
                    <button wire:navigate href="/about-me"
                        class="w-full py-4 text-center text-sm font-medium leading-normal hover:bg-gray-200 hover:decoration-sky-800 hover:text-sky-800 transition-colors duration-300">
                        Chi sono
                    </button>
                    <button wire:navigate href="/skills"
                        class="w-full py-4 text-center text-sm font-medium leading-normal hover:bg-gray-200 hover:decoration-sky-800 hover:text-sky-800 transition-colors duration-300">
                        CV
                    </button>
                    <button wire:navigate href="/projects"
                        class="w-full py-4 text-center text-sm font-medium leading-normal hover:bg-gray-200 hover:decoration-sky-800 hover:text-sky-800 transition-colors duration-300">
                        Progetti
                    </button>
                    <button wire:navigate href="/drawings"
                        class="w-full py-4 text-center text-sm font-medium leading-normal hover:bg-gray-200 hover:decoration-sky-800 hover:text-sky-800 transition-colors duration-300">
                        Oltre il codice
                    </button>
                </nav>
            </div>
        </div>
    </div>
</div>