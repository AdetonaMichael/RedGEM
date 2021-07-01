@extends('layouts.app')

@section('content')
<section class="bg-gray-100 px-6  py-4 text-center">
  <div class="my-15 py-5 border-b border-gray-20 text-center">
        <h1 class="text-6xl">
             Create Post
        </h1>
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

<div class="2-4/5 m-atuo pt-7">
    <form  action="/blog" method ="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" placeholder="Title..." class="titleinput text-gray-800  md:pl-20 bg-gray-300 border-b-2 border-t-2 relative md:mx-20 h-20 text-2xl outline-none">

    <textarea name="short_description" placeholder="Short Description..." class="py-10 bg-transparent block border-b-2 w-full h-60 text-3xl outline-none" ></textarea>

    <textarea name="description" placeholder="Contentent..." class="py-10 bg-transparent block border-b-2 w-full h-60 text-3xl outline-none" ></textarea>
    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          toolbar_mode: 'floating',
       });
      </script>
    <div class="bg-gray-lighter pt-15">
        <label class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
            <span class="mt-2 text-bold leading-normal font-bold text-xl">
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