<div>
    <!-- TopNavBar -->
    <header
        class="container backdrop-blur-sm mx-auto bg-light/80 dark:bg-zinc-900/80 px-4 fixed top-0 left-0 right-0 w-full h-[40px] md:h-[60px] z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-border-light dark:border-zinc-800  sm:px-6 py-4">
        <div class="flex items-center gap-4">
            <figure class="md:w-[60px] md:h-[60px] h-[40px] w-[40px] invert-100 rounded-full overflow-hidden">
                <img src="/assets/icon/code.png" class="object-cover w-full h-full dark:invert" />
            </figure>
        </div>
        <div class="hidden md:flex flex-1 justify-end gap-8">
            <nav class="flex items-center justify-around gap-7">
                <button wire:navigate href="/"
                    class="text-sm font-medium leading-normal hover:text-primary dark:text-zinc-300 transition-colors">
                    Home
                </button>
                <button wire:navigate href="/about-me"
                    class="text-sm font-medium leading-normal hover:text-primary dark:text-zinc-300 transition-colors">
                    Chi sono
                </button>
                <button wire:navigate href="/skills"
                    class="text-sm font-medium leading-normal hover:text-primary dark:text-zinc-300 transition-colors">
                    CV
                </button>
                <button wire:navigate href="/projects"
                    class="text-sm font-medium leading-normal hover:text-primary dark:text-zinc-300 transition-colors">
                    Progetti
                </button>
                <x-dropdown-menu>
                    <button wire:navigate href="/drawings"
                        class="text-sm font-medium leading-normal hover:text-primary dark:text-zinc-300 transition-colors">Galleria
                        d'Arte
                    </button>
                </x-dropdown-menu>
            </nav>
            @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                <a href="{{ url('/admin/dashboard') }}"
                    class="text-sm font-medium leading-normal hover:text-primary dark:text-zinc-300 transition-colors">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}"
                    class="text-sm font-medium leading-normal hover:text-primary dark:text-zinc-300 transition-colors">
                    Log in
                </a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="text-sm font-medium leading-normal hover:text-primary dark:text-zinc-300 transition-colors">
                    Register
                </a>
                @endif
                @endauth
            </nav>
            @endif
        </div>
    </header>

    <div class="md:hidden">
        <div
            class="w-full fixed left-0 right-0 top-10 border-b dark:border-zinc-800 h-[40px] flex  justify-center items-center  backdrop-blur-sm bg-light/80 dark:bg-zinc-900/80">
            <nav class="flex items-center justify-around space-x-8">
                <button wire:navigate href="/"
                    class="text-sm font-medium leading-normal dark:text-zinc-300 hover:text-primary transition-colors">
                    Home
                </button>
                <button wire:navigate href="/about-me"
                    class="text-sm font-medium leading-normal dark:text-zinc-300 hover:text-primary transition-colors">
                    Chi sono
                </button>
                <button wire:navigate href="/skills"
                    class="text-sm font-medium leading-normal dark:text-zinc-300 hover:text-primary transition-colors">
                    CV
                </button>
                <button wire:navigate href="/projects"
                    class="text-sm font-medium leading-normal dark:text-zinc-300 hover:text-primary transition-colors">
                    Progetti
                </button>
               <!--  <x-dropdown-menu> -->
                    <button wire:navigate href="/drawings"
                        class="text-sm font-medium leading-normal dark:text-zinc-300 hover:text-primary transition-colors">Galleria
                        d'Arte
                    </button>
               <!--  </x-dropdown-menu> -->
            </nav>
        </div>
    </div>
</div>