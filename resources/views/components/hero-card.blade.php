@props(['href','img','alt','title' ,'class'=>''])

<a href="{{$href}}" class="flex flex-col justify-start items-center gap-6 group">
    <div class="rounded-lg overflow-hidden">

     

        <img src="{{$img}}" alt="{{$alt}}"
            class=" aspect-square sm:max-h-[450px] lg:max-h-[250px] 2xl:max-h-none  rounded-lg object-cover  group-hover:scale-105 duration-300">

    </div>
    <div class="flex flex-col gap-3">
        <h2 class="text-3xl sm:text-4xl uppercase font-heading ">{{$title}}</h2>
        <p>{{$slot}}</p>
    </div>
</a>