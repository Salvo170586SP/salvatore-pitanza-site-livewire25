<div>
    <section id="trainings"  
        class="w-full py-10 md:py-15 border-b dark:border-zinc-700">
        <h2 class="w-full text-center text-xl sm:text-3xl font-bold leading-tight mb-5">I Miei Percorsi</h2>

        <div class="{{-- w-full --}} max-w-7xl  mx-auto flex flex-col sm:flex-row justify-center items-center gap-5 mt-5 px-5 sm:px-0">
            @if(isset($trainings))
            @foreach ($trainings as $training)
            <x-card-training :training="$training" />
            @endforeach
            @else
            <x-isset-placeholder />
            @endif
        </div>
    </section>
</div>