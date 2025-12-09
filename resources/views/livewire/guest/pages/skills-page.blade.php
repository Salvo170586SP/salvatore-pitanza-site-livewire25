<div>
   <sections id="skills" class="container   mx-auto  max-w-7xl border-b">
      <div class="w-full  flex flex-col py-10 md:py-20">
         <!-- PageHeading Component -->
         <div class="flex flex-wrap justify-between gap-3 p-4">
            <div class="flex min-w-72 flex-col gap-3">
               <p class="text-4xl font-black leading-tight tracking-[-0.033em] text-gray-900 dark:text-white">Competenze
               </p>
               <p class="text-base font-normal leading-normal text-gray-500 dark:text-zinc-400">Una vetrina delle mie
                  competenze professionali,
                  tecniche e personali.</p>
            </div>
         </div>
         <!-- SectionHeader Component -->
         <h2 class="text-2xl font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-8 text-gray-900 dark:text-white">
            Code</h2>
         <!-- TextGrid Component for code -->
         <div class="flex flex-wrap items-center gap-3 m-4">
            @foreach($skillsCode as $skill)
            <x-icon-skill :skill="$skill" class="w-50 h-30" />
            @endforeach
         </div>
         <!-- SectionHeader Component -->
         <h2 class="text-2xl font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-8 text-gray-900 dark:text-white">
            Database</h2>
         <!-- TextGrid Component for db -->
         <div class="flex flex-wrap items-center gap-3 m-4">
            @foreach($skillsDb as $skill)
            <x-icon-skill :skill="$skill" class="w-50 h-30" />
            @endforeach
         </div>
         <!-- SectionHeader Component -->
         <h2 class="text-2xl font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-8 text-gray-900 dark:text-white">
            Tools </h2>
         <!-- TextGrid Component for Tools -->
         <div class="flex flex-wrap items-center gap-3 m-4">
            @foreach($skillsTool as $skill)
            <x-icon-skill :skill="$skill" class="w-50 h-30" />
            @endforeach
         </div>
         <!-- New Section: Soft Skills -->
         <h2 class="text-2xl font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-8 text-gray-900 dark:text-white">
            Soft
            Skills</h2>
         <div class="grid grid-cols-[repeat(auto-fit,minmax(180px,1fr))] gap-4 p-4">
            <div
               class="flex flex-1 flex-col gap-3 rounded-xl border border-gray-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 p-4">
               <span class="material-symbols-outlined text-primary text-3xl"><svg xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                  </svg>
               </span>
               <div class="flex flex-col gap-1">
                  <h3 class="text-base font-bold leading-tight text-gray-900 dark:text-white">Teamwork</h3>
                  <p class="text-sm font-normal leading-normal text-gray-500 dark:text-zinc-400">Collaborare
                     efficacemente per raggiungere obiettivi comuni.</p>
               </div>
            </div>
            <div
               class="flex flex-1 flex-col gap-3 rounded-xl border border-gray-200 dark:border-zinc-700 bg-white dark:bg-zinc-800  p-4">
               <span class="material-symbols-outlined text-primary text-3xl"><svg xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.114 5.636a9 9 0 0 1 0 12.728M16.463 8.288a5.25 5.25 0 0 1 0 7.424M6.75 8.25l4.72-4.72a.75.75 0 0 1 1.28.53v15.88a.75.75 0 0 1-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.009 9.009 0 0 1 2.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75Z" />
                  </svg>
               </span>
               <div class="flex flex-col gap-1">
                  <h3 class="text-base font-bold leading-tight text-gray-900 dark:text-white">Communication</h3>
                  <p class="text-sm font-normal leading-normal text-gray-500 dark:text-zinc-400">Esprimere idee in modo chiaro e conciso.</p>
               </div>
            </div>
            <div
               class="flex flex-1 flex-col gap-3 rounded-xl border border-gray-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 p-4">
               <span class="material-symbols-outlined text-primary text-3xl"><svg xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                  </svg>
               </span>
               <div class="flex flex-col gap-1">
                  <h3 class="text-base font-bold leading-tight text-gray-900 dark:text-white">Problem Solving</h3>
                  <p class="text-sm font-normal leading-normal text-gray-500 dark:text-zinc-400">Trovare soluzioni in modo efficente e focalizzarsi su sfide complesse.</p>
               </div>
            </div>
            <div
               class="flex flex-1 flex-col gap-3 rounded-xl border border-gray-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 p-4">
               <span class="material-symbols-outlined text-primary text-3xl"><svg xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                     <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>
               </span>
               <div class="flex flex-col gap-1">
                  <h3 class="text-base font-bold leading-tight text-gray-900 dark:text-white">Project Management</h3>
                  <p class="text-sm font-normal leading-normal text-gray-500 dark:text-zinc-400">Organizzare tasks in base alle priorità, ed eseguire progetti in modo efficiente.</p>
               </div>
            </div>
         </div>
      </div>
   </sections>
</div>