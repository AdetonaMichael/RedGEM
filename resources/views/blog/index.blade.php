@extends('layouts.app')

@section('content')
<section class="bg-white p-6">
  <div class="w-4/5 m-auto text-gray-800 text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Bost
        </h1>
    </div>
  </div>

  @if(session()->has('message'))
     <div class="w-4/5 m-auto mt-10 pl-2 text-center">
        <p class="mb-4 text-gray-50 h-20 w-60 bg-green-400 rounded-2xl py-4">
             {{ session()->get('message') }}
        </p>
     </div>
  @endif
    @if (Auth::check())
      <div class="pt-15 w-4/5 m-auto">
        <a href="/blog/create" class="bg-blue-500 uppercase px-5 bg-transparent text-gray-100 text-xs font-extrabold py-3 rounded-3xl">Create Post</a>
      </div>
    @endif
  @foreach($posts as $post)
  <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="{{ asset('images/'.$post->image_path) }}" alt="blog post image">
      
    </div>
    <div>
    <h2 class="text-gray-700 font-bold text-5xl pb-4">
        {{ $post->title }}
    </h2>
    <span class="text-red-600">
       <span class="font-bold italic text-blue-600">Written by {{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at) ) }}
    </span>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
     {{ $post->short_description }}
    </p>
   
     <div class="items-center flex float-right">
      <a href="/blog/{{ $post->slug}}" class="uppercase bg-blue-500 text-gray-100 rounded text-xs font-extrabold py-2 px-4">
        <span class="flex">Keep Reading<i class="fa fa-arrow-right"> </i><span>
    </a>
    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
        <span>
          <a href="/blog/{{ $post->slug }}/edit" class=" pr-3 bg-yellow-400 px-4 py-1 rounded mx-2 hover:bg-yellow-300">Edit</a>
        </span>
        <span>
          <form action="/blog/{{ $post->slug }}" method="POST" >@csrf
            @method('delete')
            <button class="text-white pr-3 bg-red-700 px-4 py-2 rounded mx-2 hover:bg-red-600" type="submit">Delete</button>
          </form>
        </span>
    @endif
     </div>
        </diV>
</div>
  @endforeach

</section>

@endsection