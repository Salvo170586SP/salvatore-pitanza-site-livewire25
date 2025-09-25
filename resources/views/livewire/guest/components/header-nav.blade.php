<div>
    <header
        class="fixed  backdrop-blur-sm top-0 left-0 right-0 w-full h-[60px] z-50 bg-zinc-900/80 border-b border-zinc-800 text-sm">

        <div class="container mx-auto h-full w-full flex items-center justify-between {{-- gap-4 --}}">
            <figure class="w-[60px] h-[60px] rounded-full overflow-hidden">
                <img src="/assets/icon/code.png" class="object-cover w-full h-full" />
            </figure>
            <nav class="flex items-center justify-around gap-4">
                <button wire:navigate href="/"
                    class="text-sm font-medium text-zinc-400 hover:text-zinc-100 transition-colors cursor-pointer">
                    Home
                </button>
                <button wire:navigate href="/about-me"
                    class="text-sm font-medium text-zinc-400 hover:text-zinc-100 transition-colors cursor-pointer">
                    Chi sono
                </button>
                <button wire:navigate href="/skills"
                    class="text-sm font-medium text-zinc-400 hover:text-zinc-100 transition-colors cursor-pointer">
                    CV
                </button>
                <button wire:navigate href="/projects"
                    class="text-sm font-medium text-zinc-400 hover:text-zinc-100 transition-colors cursor-pointer">
                    Progetti
                </button>
                <x-dropdown-menu>
                    <button wire:navigate href="/drawings"
                        class="text-zinc-400 hover:text-zinc-100 w-full text-start font-semibold rounded-[7px] p-1 cursor-pointer">Galleria
                        d'Arte
                    </button>
                </x-dropdown-menu>
            </nav>

            @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                <a href="{{ url('/dashboard') }}"
                    class="inline-block rounded-[7px] bg-blue-600 hover:bg-blue-700 px-5 py-1.5 text-sm text-white font-medium transition-colors leading-normal">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}"
                    class="inline-block px-5 py-1.5 border text-white border-[#3E3E3A] hover:border-[#62605b] rounded-sm text-sm leading-normal">
                    Log in
                </a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="inline-block px-5 py-1.5 border text-white border-[#3E3E3A] hover:border-[#62605b] rounded-sm text-sm leading-normal">
                    Register
                </a>
                @endif
                @endauth
            </nav>
            @endif
        </div>
    </header>
</div>