@extends('layouts.app')
@section('content')
<div class="background-image2 grid grid-cols-1 m-auto">
    <div class="mx-5 md:mx-10 p-5 my-20 grid grid-cols-1 md:grid-cols-2 ">
        <div class=" p-10 md:flex">
           <div class="image">
            <img src="images/connect.svg" width=600 hegith=600 alt="blog post image">
           </div>
        </div>
        
           <div class="postcontent md:mt-5 space-y-5 items-center md:ml-5 justify-center">
             
            </div>
        </div>
</div>

<div class="mainsection_and_sidebar_holder  md:grid md:grid-cols-3">
    <div class="mainsection_holder md:col-span-2 ">
        @if(session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2 text-center">
           <p class="mb-4 text-gray-50 h-20 w-60 bg-green-400 rounded-2xl py-4">
                {{ session()->get('message') }}
           </p>
        </div>
     @endif
       @if (Auth::check())
         <div class="pt-15 w-4/5 m-auto animate-bounce">
           <a href="/blog/create" class="bg-pink-500 hover:bg-pink-600 uppercase px-5 bg-transparent text-gray-100 text-xs font-extrabold py-3 rounded-3xl">Create Post <i class="fas fa-pen fa-2x"></i></a>
         </div>
       @endif
      {{-- Carousel section  --}}
     
      {{-- Content Section --}}
     <div class="h-min-screen py-5 bg-gray-200  my-10 rounded-2xl">
      {{-- Posts --}}
      <div class="bg-white mx-5 md:mx-10 p-5 my-10 grid grid-cols-1 md:grid-cols-2 ">
    <div class=" p-10 md:flex">
       <div class="image">
        <img src="images/redgco.png" alt="blog post image">
       </div>
    </div>
    
       <div class="postcontent md:mt-5 space-y-5 items-center md:ml-5 justify-center">
          <h2 class="text-gray-700 font-bold text-3xl pb-4">RedG CUISINE (RedG)</h2>
          <span class="text-red-600">
          
          <p class="text-xl text-gray-700 leading-8 font-light">A MONTHLY FOOD SUBSCRIPTION, PRE-ORDER, 
            NETWORK OF CLOUD-CUISINE &
            FAST-FOOD COMPANY. 
            Subscribe On Our Mobile App &
            your DELICIOUS PACKAGE (FOODS, SNACKS & BEVERAGES, etc.)
            will be DELIVERED DAILY via DRONES & ROBOTS.
            More!
            Fastest Delivery!
            Cheapest Prices!
            </p>
          <div class="items-center flex float-start">
            <a href="#" class="uppercase bg-blue-500 text-gray-100 rounded-full text-xs font-extrabold py-4 px-8 my-3">
              <span class="flex">Keep Reading<i class="fa fa-arrow-right pl-2"> </i><span>
          </a>
         
           
              <span>

              </span>
           </div>
        </div>
        <hr/>
    </div>
      <div class="bg-white mx-5 md:mx-10 p-5 my-10 grid grid-cols-1 md:grid-cols-2 ">
    <div class=" p-10 md:flex">
       <div class="image">
        <img src="images/redgco.png" alt="blog post image">
       </div>
    </div>
    
       <div class="postcontent md:mt-5 space-y-5 items-center md:ml-5 justify-center">
          <h2 class="text-gray-700 font-bold text-3xl pb-4">RedG CUISINE (RedG)</h2>
          <span class="text-red-600">
          
          <p class="text-xl text-gray-700 leading-8 font-light">A MONTHLY FOOD SUBSCRIPTION, PRE-ORDER, 
            NETWORK OF CLOUD-CUISINE &
            FAST-FOOD COMPANY. 
            Subscribe On Our Mobile App &
            your DELICIOUS PACKAGE (FOODS, SNACKS & BEVERAGES, etc.)
            will be DELIVERED DAILY via DRONES & ROBOTS.
            More!
            Fastest Delivery!
            Cheapest Prices!
            </p>
          <div class="items-center flex float-start">
            <a href="#" class="uppercase bg-blue-500 text-gray-100 rounded-full text-xs font-extrabold py-4 px-8 my-3">
              <span class="flex">Keep Reading<i class="fa fa-arrow-right pl-2"> </i><span>
          </a>
         
           
              <span>

              </span>
           </div>
        </div>
        <hr/>
    </div>
    </div>
   
    </div>
  
  
    <div class="sidebar_holder h-min-screen bg-gray-400 py-5 my-10">
        <div class="sidebar-1 bg-white mx-5 md:mx-10 p-5 text-center font-bold mb-2">
          <p class="sidebar_title_1">Video Of The Week</p>
        
        </div>
        <div class="sizecontroller mx-5  md:mx-10 py-5  ">
          <div class="videowrapper bg-white p-5">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/d1phF7Q7t4M?controls=0&amp;start=33" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          </div>
        
          <div class="sidebar-1 bg-white mx-5 md:mx-10 p-5 text-center font-bold mb-2">
            <p class="sidebar_title_1">Trending</p>
             
          </div>
        </div>
    <div class="mypagination my-5 font-bolder md:mx-20 ">another thing should be here</div>
 
 
</div>

@endsection