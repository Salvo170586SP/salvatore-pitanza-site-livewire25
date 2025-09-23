<div>
    <section id="experience" class="w-full flex flex-col py-10 md:py-25 items-center border-b border-zinc-800">
        <div class="container mx-auto">
            <div class="text-center w-full pb-10  md:p-0">
                <h2 class="font-bold text-xl md:text-2xl text-zinc-300">
                    Esperienze
                </h2>
                <p class="font-medium text-sm mt-2 text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Iure deleniti
                    nesciunt quia ad autem dicta nulla voluptas ullam similique
                </p>
            </div>
            <div class="mx-auto w-[400px] md:w-[900px] mt-5 md:mt-10 px-4 md:px-0">
                @if($experiences)
                <x-accordions :experiences="$experiences" />
                @else
                <div class="text-center font-semibold text-slate-300 mt-5 text-4xl">
                    Sezione in allestimento 🛠️
                </div>
                @endif
            </div>
        </div>
    </section>
</div>