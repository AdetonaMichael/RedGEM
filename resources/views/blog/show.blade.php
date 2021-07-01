@extends('layouts.app')

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


   <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
       {{ $post->description }}
   </p>

   <div class="about-author p-10 bg-white justify-center rounded-3xl">
    <h2 class="text-gray-900 font-extrabold text-2xl text-left my-5">About the Author</h2>
       <div class="content-holder flex justify-center text-center">
         <div class="user-avatar item-center justify-center">
           <i class="hover:bg-blue-400 hover:text-blue-700 border-2 p-5 rounded-full bg-gray-300 border-blue-800  fas fa-user fa-2x  text-blue-800"></i>
         </div>

         <div class="text-holder ml-5 my-2">
           <h2 class="text-gray-900 font-extrabold text-xl">Michael Adetona</h2>
           <p class="font-semibold my-2">Geo Dev Community author on
            Digital Ocean. </p>            
         </div>
       </div>
   </div>
</div>
</section>

@endsection