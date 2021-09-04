@props(['post'])
<div {{$attributes->merge(["class"=>"mt-6 max-w-4xl mx-auto rounded-lg shadow-md"])}}>



<div class=" bg-white rounded-md">
       @if(isset($post->photo))
    <div class="mb-6 flex justify-center">
<a href="/posts/{{$post->slug}}">
    <img src="{{ asset("storage/". $post->photo) }}" class="w-full h-full">
</a>
    </div>
    @endif
    <div class="px-10">
<div class=" px-3 flex bg-white items-center py-2 justify-between ">
    <span class="font-semibold text-gray-600">
{!! $post->created_at->diffForHumans() !!}
</span>
{{-- post's tags --}}
@foreach($post->postgrid_card_tags as $tag)
<x-tag-link href="/tags/{{$tag->slug}}">
{!! $tag->slug !!}
</x-tag-link>
@endforeach
</div>

<a href="/posts/{{$post->slug}}"
class="text-2xl font-bold text-gray-700 hover:underline">
{!! $post->title !!}
</a>
<a class="mt-2 text-gray-600 block" href="/posts/{{$post->slug}}">
{!! $post->verse !!}
</a>

<div class="flex items-center justify-between mt-4 pb-6">
    <div class="inline-flex">

<a href="/posts/{{$post->slug}}"
class="text-blue-500 hover:underline">
Read more
</a>
    </div>

<div class="inline-flex">
<a href="/authors/{{$post->author->username}}" class="flex items-center">

<h1 class="font-bold text-gray-500 hover:underline">
{{ $post->author->username }}
</h1>
<img
src="https://i.pravatar.cc/?u={{$post->author->username}}"
alt="avatar" class="hidden object-cover  mx-4 rounded-full sm:block" width="30" height="30">

</a>
</div>
</div>
</div>
</div>


</div>
