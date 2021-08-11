@extends('layouts.app')

@section('content')
<section>
    <img src="images/abstract.jpg" class="fixed lg:block inset-0 h-full w-full" style="z-index:-1;">
    <div id="hero1"  class="w-full h-screen flex flex-col justify-center items-center">
        <img src="images/security.svg" class="hover:scale-75 hidden lg:block w-1/2  transition-all duration-500 transform mx-auto"/>
    <form method="POST" action="{{ route('login') }}" class="flex flex-col justify-center items-center w-1/2">
        @csrf
        <img src="images/mavatar.svg" class="w-32"/>
        <h2 class="my-8 font-display font-bold text-3xl text-white text-center">Login to Your Account </h2>
        <div class="relative flex"><i class="fa fa-user bg-white py-5 px-5 items-center"></i>
            <input size=30 name="email" placeholder="E-Mail Address" value="{{ old('email') }}" required autocomplete="email" type="email" id="email" class="@error('email') border-red-500 @enderror focus:outline-none focus:border-red-400 transition-all duration-500 pl-2 font-display capitalize text-lg py-4"/>
            @error('email')
            <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
            @enderror
        </div>
        {{-- <label for="password" class="justify-items-start block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
            {{ __('Password') }}:
        </label> --}}
        <div class="relative pb-5 my-2 flex">
            <i class="fa fa-lock bg-white py-5 px-5 text-primarycolor text-xl items-center"></i>
            <input size="30" type="password" placeholder="password" class="@error('password') border-red-500 @enderror focus:outline-none focus:border-red-400 transition-all duration-500 pl-2  font-display capitalize text-lg py-4" name="password"
            required/>
            @error('password')
            <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex">
            <label class="inline-flex justify-items-start text-sm text-gray-700" for="remember">
                <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                    {{ old('remember') ? 'checked' : '' }}>
                <span class="ml-2 text-white">{{ __('Remember Me') }}</span>
            </label>

            @if (Route::has('password.request'))
            <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto"
                href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
        </div>
        {{-- <a href="#" class="py-3 px-20 bg-red-500 rounded-full text-white font-bold uppercase text-lg mt-4 transfrom hover:translate-y-1 transition-all duration-500">Login</a> --}}
        
        <div class="flex flex-wrap justify-center">
            <button type="submit"
            class="py-3 px-20 bg-red-500 hover:bg-red-700 rounded-full text-white font-bold uppercase text-lg mt-4 transfrom hover:translate-y-1 transition-all duration-500">
                {{ __('Login') }}
            </button>

            @if (Route::has('register'))
            <p class="w-full text-xs text-center text-white my-6 sm:text-sm sm:my-8">
                {{ __("Don't have an account?") }}
                <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
            </p>
            @endif
        </div>
    </form>
    <div> </div>
</div>
   </section>
@endsection
