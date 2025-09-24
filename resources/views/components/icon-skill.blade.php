@props([
'skill'
])

<div class="w-30 h-30 flex flex-col justify-center items-center md:hover:scale-110 transition">
    <figure class="w-[40px] h-[40px] md:w-[50px] md:h-[50px]">
        <img src="{{asset('storage/'. $skill->url_icon)}}" alt="{{$skill->name}}" class="w-full h-full" />
    </figure>
    <div class="w-full my-2 font-medium text-center text-sm md:text-md">
        {{$skill->name}}
    </div>
</div>