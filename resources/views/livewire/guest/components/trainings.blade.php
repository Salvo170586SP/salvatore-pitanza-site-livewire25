<div>
    <section id="trainings" class="flex flex-col justify-center items-start px-10 py-10 md:py-15 border-y">
        <div class="text-center w-full py-10 md:py-0">
            <h2 class="text-xl sm:text-3xl font-bold leading-tight mb-5">I miei percorsi</h2>
        </div>
        <div class="w-full flex flex-col sm:flex-row justify-center items-center gap-5 mt-5">
            @if(isset($trainings))
            @foreach ($trainings as $training)
            <x-card-training :training="$training" />
            @endforeach
            @else
            <div
                class="w-full text-center flex justify-center items-center gap-5 font-semibold text-gray-200 text-xl mt-5 py-5 border rounded-xl bg-white">
                Sezione in allestimento
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-10 text-gray-200">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                </svg>
            </div>
            @endif
        </div>
    </section>
</div>