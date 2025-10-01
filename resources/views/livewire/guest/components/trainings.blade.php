<div>
    <section id="trainings"
        class="w-full  mx-auto flex flex-col py-10 md:py-20 items-center bg-zinc-900   text-white border-b border-zinc-800">
        <div class="text-center w-full py-15 md:py-0">
            <h2 class="font-bold text-xl md:text-2xl text-zinc-300">
                I miei percorsi
            </h2>

        </div>
        <div class="flex justify-center items-center flex-col flex-wrap lg:flex-row gap-5 mt-5 px-4 md:px-0 ">
            @if($trainings->count() > 0)
            @foreach ($trainings as $training)
            <x-card-training :training="$training" />
            @endforeach
            @else
            <div class="w-full text-center font-semibold text-slate-300 text-2xl mt-5">
                Sezione in allestimento 🛠️
            </div>
            @endif
        </div>
    </section>
</div>