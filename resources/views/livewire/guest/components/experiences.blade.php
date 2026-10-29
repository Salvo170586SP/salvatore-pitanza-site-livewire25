<div>
    <section id="experience" class="w-full">
        <h2 class="font-bold text-2xl mb-5">
            Esperienze
        </h2>

        <div>
            @if($experiences->count() > 0)
            <x-accordions :experiences="$experiences" />
            @else
            <div class="w-full text-center font-semibold text-slate-700 text-2xl mt-5">
                Sezione in allestimento 🛠️
            </div>
            @endif
        </div>
    </section>
</div>