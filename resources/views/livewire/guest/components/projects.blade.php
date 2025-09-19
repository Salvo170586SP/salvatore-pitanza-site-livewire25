<div>
    <section id="work"
        class="w-full mx-auto flex flex-col py-10 md:py-20 items-center bg-zinc-900 bg-gradient-to-br from-indigo-300/10 text-white border-b border-zinc-800">
        <div class="w-full pb-12 text-center">
            <h2 class="font-bold text-xl md:text-2xl text-zinc-300">
                Anteprima progetti
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 p-8 w-full max-w-7xl mx-auto">

            <div
                class="w-full  flex flex-col justify-center items-center bg-[#171717]  border-zinc-800 overflow-hidden rounded-xl transition duration-300 ease-in-out hover:-translate-y-1">
               
                {{-- <div
                    class="border-b border-zinc-800 w-full h-full flex items-center justify-center text-sm font-bold overflow-hidden">
                    Immagine assente
                </div> --}}
                <figure class="w-full h-[250px]">
                    <img class="w-full h-full object-cover" src="assets/imgs/unnamed.png" alt="sdfsdf" />
                </figure>
                <div class="flex justify-center items-center">
                    <div class="w-full font-bold text-lg p-4 text-center">
                        <h3 class="mb-2">dsfdsfgsadfasdf</h3>
                        <div class="w-full flex justify-center items-center">
                            <div class="flex text-sm items-center text-green-600">
                                Completato
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 text-green-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
                            {{-- <div class="flex text-sm items-center text-green-600">
                                Non Completato
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 text-red-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div> --}}
                        </div>
                        <div class="w-full">
                            <div class="text-sm text-zinc-400 mb-2 border-b border-zinc-800 py-3">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga quam, voluptatum voluptas
                                repellat reiciendis facere dolores ratione officia quod maxime cupiditate totam itaque,
                                quibusdam vitae a praesentium eius? Debitis, earum. lor
                            </div>
                            <div class="w-full flex justify-center gap-2">

                                <a href="" target="_blank"
                                    class="cursor-pointer flex items-center bg-blue-600 hover:bg-blue-700 px-5 py-2 text-xs text-white font-medium rounded-lg"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5 me-1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                                    </svg>
                                    Code
                                </a>


                                <a href="" target="_blank"
                                    class="cursor-pointer flex items-center bg-blue-600 hover:bg-blue-700 px-5 py-2 text-xs text-white font-medium rounded-lg"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5 me-1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    Vedi</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- @foreach ($projects->take(5) as $project)

        <div
            class="w-full border border-gray-400  aspect-[3/2] flex flex-col justify-center items-center overflow-hidden bg-white hover:shadow-xl rounded-xl text-base relative transition duration-300 ease-in-out hover:-translate-y-1">
            @if ($project->img_url)
            <figure class="w-full h-full">
                <img class="w-full h-full object-cover" src="{{ asset('/storage/' . $project->img_url) }}"
                    alt="{{ $project->img_name }}" />
            </figure>
            @else
            <div
                class="aspect-[3/2] border border-gray-400 w-full h-full flex items-center justify-center text-lg font-bold text-gray-50 rounded-lg overflow-hidden border bg-gray-300">
                IMG
            </div>
            @endif
            <div
                class="absolute top-0 left-0 w-full h-full bg-gray-100/80 backdrop-blur-md text-black opacity-0 hover:opacity-100 transition duration-300 ease-in-out rounded-xl flex justify-center items-center">
                <div class="w-full font-bold text-lg p-4 text-center">
                    <h3 class="text-blue-800 block mb-2">{{ $project->title }}</h3>
                    <div class="w-full flex justify-center items-center">
                        @if ($project->is_aviable)
                        <div class="flex text-sm items-center text-green-600">
                            @if (session('locale') == 'en')
                            Completed
                            @else
                            Completato
                            @endif
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-5 text-green-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        @else
                        <div class="flex text-sm items-center text-green-600">
                            @if (session('locale') == 'en')
                            Not Completed
                            @else
                            Non Completato
                            @endif
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-5 text-red-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        @endif
                    </div>
                    <div class="w-full">
                        <div class="text-sm text-gray-600 mb-2">
                            {{ $project->description }}
                        </div>
                        <div class="w-full flex justify-center gap-2">
                            @if ($project->url_git)
                            <a href="{{ $project->url_git }}" target="_blank"
                                class="cursor-pointer flex items-center bg-black hover:bg-gray-700 px-5 py-2 text-xs text-white font-medium rounded-lg"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 me-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                                </svg>
                                Code
                            </a>
                            @endif
                            @if ($project->url_web)
                            <a href="{{ $project->url_web }}" target="_blank"
                                class="cursor-pointer flex items-center bg-black hover:bg-gray-700 px-5 py-2 text-xs text-white font-medium rounded-lg"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 me-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                Vedi</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach --}}

        <button wire:navigate href="/projects"
            class="bg-blue-600 hover:bg-blue-700 hover:scale-110 text-sm mt-5 flex items-center justify-between  rounded-[7px] font-semibold transition-all  px-8 py-2 cursor-pointer">
            Tutti i progetti
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </button>
    </section>
</div>