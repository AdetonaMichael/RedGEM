<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1"/>
    <!--- CDN and external links ---->
   
  <!--owlcarousel-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!--owlcarousel-->


    <!--- END OF CDN and external links --->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.tiny.cloud/1/914cbs1n4e1r1683f7ere86yes0kemwesp1tctsdsft2pq6k/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- Styles -->
    <link rel="icon" href="{{ URL::asset('/images/RedGEM.ico') }}" type="image/x-icon"/>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header>
                <nav  style="z-index:1;" class="font-bold shadow-lg left-0 right-0">
                    {{-- navbar goes here --}}
                    <div class="mr-10">
                        <div class="flex justify-between">
                    
                    <div class="flex space-x-4">
                    {{-- logo comes here --}}
                    <div class="mr-3 flex items-center text-white">
                        <a href="/" class="flex ">
                         <img src="images/RedGEM.png" width=60 height=60 alt="logo">
                        <span>  <a href="{{ url('/') }}" class="font-extrabold  text-2xl">
                            {{ config('app.name', 'RedGEM') }}
                        </a></span>
                      
                        </a>
                    </div>
                    
                    {{-- primary nav here --}}
                    <div class="md:flex hidden items-center space-x-3">
                        <a class="px-3 text-gray-200 hover:text-gray-000 " href="resource_1/RedGEM.pdf" download>White Paper</a>
                        <div class="dropdown  relative">
                            <button class=" text-gray-200 font-semibold py-2 px-4 inline-flex items-center">
                              <span class="mr-1">Pages</span>
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                            </button>
                            <ul class="dropdown-menu absolute hidden bg-white text-gray-700 pt-1 p-auto w-auto">
                            <li><a class="block mx-10 py-4 px-4 text-sm hover:bg-gray-100 "href="#">RedGEM Cuisine</a></li>
                            <li><a class="block mx-10 py-4 px-4 text-sm hover:bg-gray-100 "href="#">RedGEM Cruise</a></li>
                            <li><a class="block mx-10 py-4 px-4 text-sm hover:bg-gray-100 "href="#">RedGEM Mall</a></li>
                            </ul>
                          </div>
                        <a class="px-3 text-gray-200 hover:text-gray-000 " href="#contactus">Contact</a>
                        <a  class="px-3 text-gray-200 hover:text-gray-000 hover:border-b-700 " href="/about">About Us</a>
                    </div>
                    </div>
                    {{-- secondary nav --}}
                    <div class="md:flex hidden items-center space-x-1">
                        @guest
                        <a class="py-5 px-3 font-bold text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a class="py-3 px-3 font-bold  bg-yellow-400 transition duration-300 hover:text-yellow-800 text-yello-900 hover:bg-yellow-300 rounded" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                            <span class="text-white bold">{{ Auth::user()->name }}</span>
    
                            <a  href="{{ route('logout') }}"
                               class="no-underline  hover:bg-yellow-300 bg-yellow-400 py-2 px-2 rounded bold"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                    {{-- mobile button goes here --}}
                    <div class="md:hidden flex items-center">
                        <button class="mobile-menu-button">
                    <svg  class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><title>menu</title><g fill="none" class="nc-icon-wrapper"><path d="M6 36h36v-4h-36v4z m0-10h36v-4h-36v4z m0-14v4h36v-4h-36z" fill="#ffffff"></path></g></svg>
                        </button>
                    </div>
                    </div>
                    </div>
                    {{-- mobile menu --}}
                    <div class="mobile-menu border-b-2 border-gray-400 hidden md:hidden pb-5">
                        <a  class="block py-4 px-4 text-sm hover:bg-gray-100" href="/about">About</a>
                        <a class="block  py-4 px-4 text-sm hover:text-gray-100 " href="resource_1/RedGEM.pdf" download>White Paper</a>
                        <div class="dropdown  relative transition duration-100">
                            <button class=" text-gray-200 font-semibold py-2 px-4 inline-flex items-center">
                              <span class="mr-4 text-gray-900 font-bold">Pages</span>
                              <svg class="fill-current h-4 w-4 text-gray-900 font-bold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                            </button>
                            <ul class="dropdown-menu absolute hidden bg-white text-gray-700 pt-1 p-auto w-auto">
                            <li><a class="block mx-10 py-4 px-4 text-sm hover:bg-gray-100 "href="#">RedGEM Cuisine</a></li>
                            <li><a class="block mx-10 py-4 px-4 text-sm hover:bg-gray-100 "href="#">RedGEM Cruise</a></li>
                            <li><a class="block mx-10 py-4 px-4 text-sm hover:bg-gray-100 "href="#">RedGEM Mall</a></li>
                            </ul>
                          </div>
                        <a  class="block py-4 px-4 text-sm hover:bg-gray-100 my-2" href="#contactus">Contact</a>
                       
                        @guest
                        <a class="py-5 px-3 font-bold  md:text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a class="py-3 px-3 font-bold  bg-yellow-400 transition duration-300 hover:text-yellow-800 text-yello-900 hover:bg-yellow-300 rounded" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                            <span class="text-white bold">{{ Auth::user()->name }}</span>
    
                            <a  href="{{ route('logout') }}"
                               class="no-underline  hover:bg-yellow-300 bg-yellow-400 py-2 px-2 rounded bold"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                    </nav>
         
        </header>
         <div>
             @if(session()->has('success'))
             <p class="p-5 bg-green-200 text-green-600 text-center">{{ session()->get('success') }}</p>
             @endif
                @yield('content')
         </div>
        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
@yield('script')
</html>
