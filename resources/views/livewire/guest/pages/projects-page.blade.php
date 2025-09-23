<div>
    <section id="work"
        class="w-full mx-auto flex flex-col py-10 md:py-20 items-center bg-zinc-900 bg-gradient-to-br from-indigo-300/10 text-white border-b border-zinc-800">
        <div class="w-full py-12 text-center">
            <h2 class="font-bold text-xl md:text-2xl text-zinc-300">
                I miei progetti
            </h2>
        </div>
        @if($projects)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 p-8 w-full max-w-7xl mx-auto">
            @foreach($projects as $project)
            <x-card-project :project="$project" />
            @endforeach
        </div>
        @else
        <div class="w-full text-center font-semibold text-slate-300 text-4xl mt-5">
            Sezione in allestimento 🛠️
        </div>
        @endif
    </section>
</div>
