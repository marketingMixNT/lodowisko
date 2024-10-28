@props(['title','price'])

<li class="flex flex-col md:flex-row gap-3 justify-around items-center text-center"><span class="text-2xl font-medium text-center">{{$title}}</span>
    <span class="font-bold text-2xl text-center">{{$price}}</span>
</li>