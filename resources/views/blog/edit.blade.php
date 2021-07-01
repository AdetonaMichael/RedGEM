@extends('layouts.app')

@section('content')
<section class="px-6  py-4 text-center">
  <div class="w-2/5 m-auto text-white text-left">
    <div class="my-15 py-5 border-b border-gray-20 text-center">
        <h1 class="text-6xl text-gray-900">
             Update Post
        </h1>
    </div>
  </div>
   
@if ($errors->any())
   <div class="w-4/5 m-auto">
      <ul>
         @foreach ($errors->all() as $error)
                <li class="w-1/5 text-gray-50 bg-red-700  rounded-2xl mb-4 py-4"> 
                    {{ $error }}
                </li>
         @endforeach
      </ul>
   </div>
@endif

<div class="2-4/5 m-atuo pt-20">
    <form  action="/blog/{{ $post->slug }}" method ="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $post->title }}" class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">
    <textarea name="short_description" class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none" >{{ $post->short_description }}</textarea>
    <textarea name="description" class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none" >{{ $post->description }}</textarea>

    <div class="hidden bg-gray-lighter pt-15">
        <label class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
            <span class="mt-2 text-base leading-normal">
                Select a file
            </span>
            <input type="file" name="image" class="hidden">
        </label>
    </div>

    <button type="submit" class="uppercase mt-15 bg-blue-500  text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
       Submit Post
    </button>
    </form>
</div>
</section>

@endsection