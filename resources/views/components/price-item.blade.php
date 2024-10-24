@props(['title','price'])

<li class="flex flex-col md:flex-row gap-3 justify-around items-center"><span class="text-2xl font-medium">{{$title}}</span>
    <span class="font-bold text-2xl">{{$price}}</span>
</li>