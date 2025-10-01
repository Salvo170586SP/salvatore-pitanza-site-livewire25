<div>
    <section id="skills"
        class="w-full  mx-auto flex flex-col py-10 md:py-20 items-center bg-zinc-900 bg-gradient-to-br from-indigo-300/10 text-white border-b border-zinc-800">
        <div class="text-center w-full py-15 md:py-0 md:pb-10">
            <h2 class="font-bold text-xl md:text-2xl text-zinc-300">
                Le tecnologie che uso
            </h2>
        </div>
        @if($skills->count() > 0)
        <div
            class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-6 text-center gap-3 md:gap-5 p-5 md:p-10 rounded-2xl md:rounded-3xl overflow-auto">
            @foreach($skills as $skill)
            <div wire:key="skill-[{{$skill->id}}]">
                <x-icon-skill :skill="$skill" />
            </div>
            @endforeach
        </div>
        @else
        <div class="w-full text-center font-semibold text-slate-300 text-2xl mt-5">
            Sezione in allestimento 🛠️
        </div>
        @endif
    </section>
</div>