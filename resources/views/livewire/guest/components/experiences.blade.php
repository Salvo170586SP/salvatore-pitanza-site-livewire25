<div>
    <section id="experience" class="container w-full flex flex-col">
        <div class="w-full pb-8 md:p-0">
            <h2 class="font-bold text-4xl border-b dark:border-zinc-800 py-5">
                Esperienze
            </h2>
        </div>
        <div class="md:mt-8 md:px-0">
            @if($experiences->count() > 0)
            <x-accordions :experiences="$experiences" />
            @else
            <div class="w-full text-center font-semibold text-slate-300 dark:text-zinc-300 text-2xl mt-5">
                Sezione in allestimento 🛠️
            </div>
            @endif
        </div>
    </section>
</div>