@props(['post'])

<a href="{{route('blog.show',$post->slug)}}" class='flex flex-col lg:flex-row gap-12  py-10 border-b border-gray-400  group'>
    <div class="lg:w-1/3 overflow-hidden rounded-lg">

        <img src="{{$post->getThumbnailUrl()}}" alt="miniaturka posta - {{$post->title}}" class='w-full group-hover:scale-105 duration-300 aspect-[5/4] object-cover rounded-lg' />
    </div>
    <div class=' flex flex-col justify-center lg:w-2/3'>
   
            <h3 class="text-2xl font-heading pb-4">{{$post->title}}</h3>
            <p class="text-lg">{{$post->getExcerpt()}}</p>
       
    </div>
</a>