<div>
   <section id="skills">
      <div class="w-full px-10 flex flex-col pt-25 pb-25 sm:pb-20">
         <div
            class="w-full backdrop-blur-sm bg-light/80 relative sm:sticky top-none fixed sm:top-15 left-0 right-0 z-40 border-b">
            <div class="flex min-w-72 flex-col gap-1">
               <h1 class="font-serif-display text-4xl font-bold leading-tight tracking-tight">
                  Competenze
               </h1>
               <p class="font-normal leading-normal">Gli strumenti con cui costruisco applicazioni web, dal backend
                  all’interfaccia, e il modo in cui lavoro.</p>
            </div>

            <div class="py-3 hidden sm:block">
               <nav class="flex flex-wrap gap-2">
                  <a href="#ling"
                     class="text-sm border border-zinc-200 hover:text-sky-700 bg-white px-4 py-2 rounded-full font-medium leading-normal">Linguaggi
                     & Framework</a>
                  <a href="#db"
                     class="text-sm border border-zinc-200 hover:text-sky-700 bg-white px-4 py-2 rounded-full font-medium leading-normal">Database</a>
                  <a href="#tools"
                     class="text-sm border border-zinc-200 hover:text-sky-700 bg-white px-4 py-2 rounded-full font-medium leading-normal">Tools</a>
                  <a href="#softskills"
                     class="text-sm border border-zinc-200 hover:text-sky-700 bg-white px-4 py-2 rounded-full font-medium leading-normal">Soft
                     Skills</a>
               </nav>
            </div>
         </div>

         <div id="ling" class="scroll-mt-32 pt-8">
            <h2 class="text-2xl font-bold leading-tight tracking-[-0.015em] pb-6 pt-8">
               Linguaggi & Framework</h2>
            @if(isset($skillsCode))
            <div class="flex flex-wrap gap-3">
               @foreach($skillsCode as $skill)
               <x-skill-card :name="$skill->name" :url="$skill->url_icon" :description="$skill->description"
                  :level="$skill->level" />
               @endforeach
            </div>
            @else
            <div
               class="w-full flex justify-center items-center text-gray-800 gap-5 text-center font-semibold text-xl mt-5 py-5 border rounded-xl bg-white">
               Sezione in allestimento
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="size-8 text-gray-800">
                  <path stroke-linecap="round" stroke-linejoin="round"
                     d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
               </svg>
            </div>
            @endif
         </div>

         <div id="db" class="scroll-mt-32 pt-8">
            <h2 class="text-2xl font-bold leading-tight tracking-[-0.015em] pb-3 pt-8">
               Database</h2>
            @if(isset($skillsDb))
            <div class="flex flex-wrap gap-3">
               @foreach($skillsDb as $skill)
               <x-skill-card :name="$skill->name" :url="$skill->url_icon" :description="$skill->description"
                  :level="$skill->level" />
               @endforeach
            </div>
            @else
            <div
               class="w-full flex justify-center items-center text-gray-800 gap-5 text-center font-semibold dark:text-zinc-300 text-xl mt-5 py-5 border rounded-xl bg-white">
               Sezione in allestimento
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="size-8 text-gray-800">
                  <path stroke-linecap="round" stroke-linejoin="round"
                     d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
               </svg>
            </div>
            @endif
         </div>

         <div id="tools" class="scroll-mt-32 pt-8">
            <h2 class="text-2xl font-bold leading-tight tracking-[-0.015em] pb-3 pt-8">
               Tools</h2>
            @if(isset($skillsTool))
            <div class="flex flex-wrap gap-3">
               @foreach($skillsTool as $skill)
               <x-skill-card :name="$skill->name" :url="$skill->url_icon" :description="$skill->description"
                  :level="$skill->level" />
               @endforeach
            </div>
            @else
            <div
               class="w-full flex justify-center items-center text-gray-800 gap-5 text-center font-semibold text-xl mt-5 py-5 border rounded-xl bg-white">
               Sezione in allestimento
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="size-8 text-gray-800">
                  <path stroke-linecap="round" stroke-linejoin="round"
                     d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
               </svg>
            </div>
            @endif
         </div>

         <div id="softskills" class="scroll-mt-32 pt-8">
            <h2 class="text-2xl font-bold leading-tight tracking-[-0.015em] pb-3 pt-8">
               Soft
               Skills</h2>
            <div class="flex items-center flex-wrap gap-3">
               <div
                  class="w-full sm:w-80 h-40 flex flex-col gap-3 rounded-xl border border-zinc-200 bg-white p-4 hover:shadow-lg transition">
                  <span class="material-symbols-outlined text-primary text-3xl"><svg xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="2.0" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                           d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                     </svg>
                  </span>
                  <div class="flex flex-col gap-1">
                     <h3 class="text-base font-bold leading-tight mb-2">Teamwork</h3>
                     <p class="text-sm font-normal leading-normal text-gray-800">Collaborare
                        efficacemente per raggiungere obiettivi comuni.</p>
                  </div>
               </div>
               <div
                  class="w-full sm:w-80 h-40 flex flex-col gap-3 rounded-xl border border-zinc-200 bg-white p-4 hover:shadow-lg transition">
                  <span class="material-symbols-outlined text-primary text-3xl">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.0"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                           d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 0 1 1.037-.443 48.282 48.282 0 0 0 5.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                     </svg>

                  </span>
                  <div class="flex flex-col gap-1">
                     <h3 class="text-base font-bold leading-tight mb-2">Communication</h3>
                     <p class="text-sm font-normal leading-normal text-gray-800">Esprimere idee in modo
                        chiaro e conciso.</p>
                  </div>
               </div>
               <div
                  class="w-full sm:w-80 h-40 flex flex-col gap-3 rounded-xl border border-zinc-200 bg-white p-4 hover:shadow-lg transition">
                  <span class="material-symbols-outlined text-primary text-3xl"><svg xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="2.0" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                           d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                     </svg>
                  </span>
                  <div class="flex flex-col gap-1">
                     <h3 class="text-base font-bold leading-tight mb-2">Problem Solving</h3>
                     <p class="text-sm font-normal leading-normal text-gray-800">Trovare soluzioni efficienti e
                        focalizzarsi su sfide complesse.
                     </p>
                  </div>
               </div>
               <div
                  class="w-full sm:w-80 h-40 flex flex-col gap-3 rounded-xl border border-zinc-200 p-4 bg-white hover:shadow-lg transition">
                  <span class="material-symbols-outlined text-primary text-3xl">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.0"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                           d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                     </svg>
                  </span>
                  <div class="flex flex-col gap-1">
                     <h3 class="text-base font-bold leading-tight mb-2">Project Management</h3>
                     <p class="text-sm font-normal leading-normal text-gray-800">Organizzare i task in base alle
                        priorità ed eseguire i progetti in modo efficiente.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>