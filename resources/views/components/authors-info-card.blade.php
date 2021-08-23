
    <div class="image overflow-hidden">

    <img class="h-auto w-full mx-auto" src="https://i.pravatar.cc/500" alt="">

    </div>

    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">
    {{$post->author->username}}
    </h1>

    <h3 class="text-gray-600 font-lg text-semibold leading-6">
    Owner at Her Company Inc
    .</h3>

    <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">
    Lorem ipsum dolor sit amet
    consectetur adipisicing elit.
    Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>
    <ul class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">

    <li class="flex items-center py-3">
    <span class="font-semibold">Full Name:</span>
    <span class="ml-auto">
    <span class="">
    {{$post->author->name}}
    </span>
    </span>
    </li>
    <li class="flex items-center py-3">



    <span class="font-semibold">Total Posts:</span>
    <span class="ml-auto">
    <span>

    {{ App\Models\Post::where('user_id', $post->user_id)->count()}}
    </span>
    </span>

    </li>

    <li class="flex items-center py-3">

    <span class="font-semibold">
    Member since
    </span>

    <span class="ml-auto">
    {{$post->author->created_at->diffForHumans()}}
    </span>

    </li>
    <li class="px-2 py-2  text-center">
    @if(request()->is('posts/'.$post->slug ))
    <a href="/authors/{{$post->author->username}}" class="underline text-blue-400 text-bold">
    View all posts by the author
    </a>
    @endif


    </li>
    </ul>
