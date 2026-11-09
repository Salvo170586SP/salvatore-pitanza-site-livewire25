<div>
    <section id="experience" class="w-full">
        <h2 class="font-bold text-2xl mb-5">
            Esperienze
        </h2>

        <div>
            @if($experiences->count() > 0)
            <x-accordions :experiences="$experiences" />
            @else
            <x-isset-placeholder /> 
            @endif
        </div>
    </section>
</div>