<div>
   <section id="jumbotron-skills"
      class="relative overflow-hidden w-full text-white bg-gradient-to-br from-indigo-400/10 to-transparent border-b border-zinc-800 py-40">
      <div class="absolute inset-0 z-0
         bg-[linear-gradient(to_right,#4f46e520_1px,transparent_1px),linear-gradient(to_bottom,#4f46e520_1px,transparent_1px)]
         bg-[size:6rem_6rem] [mask-image:radial-gradient(ellipse_70%_80%_at_50%_0%,#000_80%,transparent_100%)]">
      </div>
      <div class="absolute inset-0 z-0 bg-gradient-to-br from-indigo-900/10 to-transparent"></div>
      <div class="flex justify-center items-center">
         <div class="flex flex-col items-center">
            <div class="px-10 md:px-32 ">
               <p class="text-6xl font-bold mt-5">
                  Curriculum <span class="text-blue-600">Vitae</span>
               </p>
            </div>
         </div>
      </div>
   </section>

   <section id="skills"
      class="w-full  mx-auto flex flex-col py-10 md:py-20 items-center text-white border-b border-zinc-800">
      <div
         class="w-full flex flex-col md:flex-row justify-around items-start gap-4 space-y-10 {{-- md:space-y-5 p-15 --}}">
         <div class="md:w-[900px]">
            @isset($skillInfo)
            <p
               class="max-w-full font-medium text-sm text-slate-200 whitespace-normal overflow-wrap break-words leading-relaxed">
               {!!$skillInfo->general_description!!}
            </p>
            @else
            <div class="w-full text-center font-semibold text-slate-300 text-2xl mt-5">
               Sezione in allestimento 🛠️
            </div>
            @endisset
         </div>

         <div class="md:w-[500px] space-y-5">
            <div class="rounded-2xl border border-zinc-700/90 bg-zinc-900/50 w-full overflow-hidden">
               <div class="bg-gradient-to-r bg-zinc-800/50 px-6 py-4">
                  <h3 class="text-lg font-semibold text-zinc-100">Documenti</h3>
               </div>
               <div class="w-full space-y-5 p-5">
                  @forelse($documents as $document)
                  <div wire:key="document-[{{$document->id}}]">
                     <a href="{{asset('storage/'. $document->doc_url)}}" download
                        class="text-sm font-semibold flex justify-start items-center">
                        📄
                        {{$document->name_doc}}</a>
                  </div>
                  @empty
                  <div class="w-full text-center font-semibold text-slate-300 text-lg mt-5">
                     Sezione in allestimento 🛠️
                  </div>
                  @endforelse
               </div>
            </div>

            <div class="rounded-2xl border border-zinc-700/90 bg-zinc-900/50 w-full">

               <div class="bg-gradient-to-r bg-zinc-800/50 px-6 py-4">
                  <h3 class="text-lg font-semibold text-zinc-100">Tecnologie che uso</h3>
               </div>
               <div class="flex flex-wrap justify-start items-center p-2">
                  <div class="w-full space-y-5 p-5">
                     @forelse($skills as $skill)
                     <div wire:key="skill-[{{$skill->id}}]">
                        <x-icon-skill :skill="$skill" />
                     </div>
                     @empty
                     <div class="w-full text-center font-semibold text-slate-300 text-lg mt-5">
                        Sezione in allestimento 🛠️
                     </div>
                     @endforelse
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>