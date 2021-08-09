@extends('layouts.app')
@section('title')
{{ $post->title }}
@endsection
@section('content')
<section class="bg-gray-white px-6  py-4">
  <div class="w-2/5 m-auto text-gray-900 font-bold text-left">
    <div class="py-5 mb-10 border-b border-gray-20 text-center">
        <h1 class="text-3xl mt-15">
             {{ $post->title }}
        </h1>
    </div>
  </div>
   
  <div class="md:flex viewimage items-center justify-center">
    <img  src="{{ asset('images/'.$post->image_path) }}" alt="blog post image">
  
</div>
<div class="2-4/5 m-atuo pt-20">
  <h3 class="text-gray-800 py-10 md:pl-20 bg-gray-300 border-b-2 border-t-2 relative md:mx-20">
      By <span class=font-bold italic text-gray-800">
          {{ $post->user->name }}</span> Created on {{ date('jS M Y', strtotime($post->updated_at) ) }}
      </h3>


   <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light md:mx-20 mx-10 bg-white px-5">
       {{ $post->description }}
   </p>

</div>
</section>

@endsection