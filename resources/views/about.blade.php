@extends('layouts.app')
@section('content')

    <div class="background-image grid grid-cols-1 m-auto">
      <div class="flex text-black pt-1">
          <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
              <h1 id="hero-caption" class="sm:text-white text-6xl text-whitie guppercase font-bold text-shadow-md pb-8">
                  
                  About Us <i class="fa fa-eye text-white"></i>
              </h1>
    
          </div>
      </div>
  </div>

  <div class="content-holder relative bottom-32">
      <div class="thecontent bg-white shadwow-lg md:grid md:grid-cols-2 md:mx-20 leading-10">
         <div class="industries bg-red-700 text-center justify-center p-10">
           <p class="text-white text-6xl font-sans font-extrabold">Industries</p>
           <p class="text-gray-200 font-sans font-bold font-3xl mt-4">Anyone Can Become Owner Of RedGEM Tokens By participating in AIRDROPS, CROWDSALE & ICO (Buying And Holding An Amount 
            Of RedGEM Tokens, In Exchange For The Following Benefits Listed Above). Only RedGEM Classic Owners/Holders Will Be 
            Shareholders In Our Proposed Project/Company & Its Governance. 1 RedGEM Classic Token = 1 Vote, And Voting Is Enabled By 
            Delegating Voting Rights To The Address (Or Addresses) Of The Token Holder's Choice.</p>

         </div>
         <div class="carousel relative shadow-2xl bg-white">
          <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
              <div id="image1" class="block h-full w-full  shadow-md bg-gray-300 text-white text-5xl text-center">Learn Everything about your skin</div>
            </div>
            <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
            
            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
              <div id="image2" class="block h-full w-full  text-white text-5xl text-center">Learn the 10 Essential Rules of Good Health</div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
            
            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
              <div id="image3" class="block h-full w-full bg-green-500 text-white text-5xl text-center">Yes, A Perfect Skin is Possible</div>
            </div>
            <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        
            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
              <li class="inline-block mr-3">
                <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
              </li>
              <li class="inline-block mr-3">
                <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
              </li>
              <li class="inline-block mr-3">
                <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
              </li>
            </ol>
            
          </div>
        </div>
      </div>
     
  </div>
  <div class="content-holder relative">
      <div class="thecontent rounded-2xl my-5 bg-white shadow-lg md:grid md:grid-cols-3 md:mx-20 leading-10">
         <div class="section1 p-10 font-sans font-extrabold block">
          <p class="text-2xl text-red-700">Lets Talk</p>
          <form action="" method="post">
           <div class="emal"><input type="email" name="email" id="email" size=40 class="border-b-2 pb-2 mb-2 border-gray-400" placeholder="Email Address"></div>
           <div class="firstname"><input type="fistname" name="firstname" id="firstname" size=40 class="border-b-2 pb-2 mb-2 border-gray-400" placeholder="First Name"></div>
           <div class="lastname"><input type="lastname" name="email" id="email" size=40 class="border-b-2 pb-2 mb-2 border-gray-400" placeholder="Last Name"></div>
            <button class="bg-red-700 text-white text-center px-4 mx-4  py-2 my-2 ronded-xl" type="submit"> <i class="fa fa-envelope" aria-hidden="true"></i> Send Message</button>
          </form>
         </div>
         <div class="section2 p-10 font-sans">
           <p class="font-bold text-red-700 font-sans">Business</p>
           <a href="#">Cloud Kitchen</a>
           <a href="#">Real Estiate and Housing</a>
           <p class="font-bold text-red-700 font-sans">Email</p>
           <a class="block" href="#">powerofelectron616@gmail.com</a>
           <a class="block" href="#">frongjumpping@animal.com</a>
         </div>
         <div class="section2 p-10 font-sans">
           <p class="font-bold text-red-700 font-sans">Business</p>
           <a href="#">Cloud Kitchen</a>
           <a href="#">Real Estiate and Housing</a>
           <p class="font-bold text-red-700 font-sans">Email</p>
           <a class="block" href="#">powerofelectron616@gmail.com</a>
           <a class="block" href="#">frongjumpping@animal.com</a>
         </div>
      </div>
  </div>
  <div class=" h-3/6 banner-holder md:flex justify-around bg-gray-200 my-10 border-b border-t shadow-lg  border-gray-100 text-center">
    <div class="banner-text  md:m-5 md:p-5 space-y-10 ">
      <p class="font-bold text-6xl text-red-700 m-5 justify-start text-center font-serif">Our Solutions</p>
        <h1 class="text-4xl font-extrabold text-center md:mt-64">Tell us the Story Behind Your Beauty</h1>
        <ul class="font-2xl font-bold leading-10 text-gray-800">
          <li>Great Products and Packaging</li>
          <li>Best Customer Experience in Our subscription Service</li>
          <li>Efficient(Faster) Delivery Platform. Powered by Robots and Drones</li>
          <li>Cometitive Price (Charge less) & Offer Much More (Ethical Bribe) Than Others (By Maintaining Low Cost Structure)</li>
          <li>NetWork Centeres NationWide Operating (Possibly) 24 hours </li>
        </ul>
        <a href="/blog" class="px-10 py-4 text-center rounded-full bg-yellow-400 text-gray-800 hover:bg-yellow-300 hover:text-gray-900 font-bold relative top-10">Learn More</a>
    </div>

    <div class="bannder-image">
      <img class="shadow-lg index_image1" src="images/solution.png" alt=" model image">
    </div>
</div>
 
  <div class="ourteam md:mx-20 background-gray-200 rounded-xl shadow-lg md:p-10 text-center justify-center">
     
      <p class="font-bold text-2xl m-5">Meet Our Team Members</p>
      <div class="owl-carousel owl-theme">
      <div class="">
           <div class="grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img src="images/team/ADEBAYO ADEMOLA.jpg" alt="team member of ReadGEM">
            <p class="font-bold text-2xl text-gray-400">ADEBAYO ADEMOLA</p>
            <p >Michael Adetona</p>
            <p class="bold font-2xl">Post</p>
           </div>
          </div>
      <div class="">
           <div class="grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img src="images/team/ADESANMI SIMILOLUWA.jpg" alt="team member of ReadGEM">
            <p class="font-bold text-2xl text-gray-400">ADEBAYO ADEMOLA</p>
            <p >Michael Adetona</p>
            <p class="bold font-2xl">Post</p>
           </div>
          </div>
      <div class="">
           <div class="grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img src="images/team/ADESANMI EMMANUEL.jpg" alt="team member of ReadGEM">
            <p class="font-bold text-2xl text-gray-400">ADEBAYO ADEMOLA</p>
            <p >Michael Adetona</p>
            <p class="bold font-2xl">Post</p>
           </div>
          </div>
      <div class="">
           <div class="grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img src="images/team/ADEYEFA ADESOLA.jpg" height=100 alt="team member of ReadGEM">
            <p class="font-bold text-2xl text-gray-400">ADEBAYO ADEMOLA</p>
            <p >Michael Adetona</p>
            <p class="bold font-2xl">Post</p>
           </div>
          </div>
      <div class="">
           <div class="grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img src="images/team/AKINOLA-O GBENRO.jpg" height=100 alt="team member of ReadGEM">
            <p class="font-bold text-2xl text-gray-400">ADEBAYO ADEMOLA</p>
            <p >Michael Adetona</p>
            <p class="bold font-2xl">Post</p>
           </div>
          </div>
      <div class="">
           <div class="grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img src="images/team/ARAYOMBO ARAMIDE.jpg" height=100 alt="team member of ReadGEM">
            <p class="font-bold text-2xl text-gray-400">ADEBAYO ADEMOLA</p>
            <p >Michael Adetona</p>
            <p class="bold font-2xl">Post</p>
           </div>
          </div>
      <div class="">
           <div class="grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img src="images/team/AWOTOBI OYEWUMI.jpg" height=100 alt="team member of ReadGEM">
            <p class="font-bold text-2xl text-gray-400">ADEBAYO ADEMOLA</p>
            <p >Michael Adetona</p>
            <p class="bold font-2xl">Post</p>
           </div>
          </div>
      <div class="">
           <div class="grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img src="images/team/Chukwuemeka Linda (10).jpg" height=100 alt="team member of ReadGEM">
            <p class="font-bold text-2xl text-gray-400">ADEBAYO ADEMOLA</p>
            <p >Michael Adetona</p>
            <p class="bold font-2xl">Post</p>
           </div>
          </div>
      <div class="">
           <div class="grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img src="images/team/ELUJULO AYOMIKUN.jpg" height=100 alt="team member of ReadGEM">
            <p class="font-bold text-2xl text-gray-400">ADEBAYO ADEMOLA</p>
            <p >Michael Adetona</p>
            <p class="bold font-2xl">Post</p>
           </div>
          </div>
      <div class="">
           <div class="grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img src="images/team/ODEYEMI TEMITAYO.jpg" height=100 alt="team member of ReadGEM">
            <p class="font-bold text-2xl text-gray-400">ADEBAYO ADEMOLA</p>
            <p >Michael Adetona</p>
            <p class="bold font-2xl">Post</p>
           </div>
          </div>
      <div class="">
           <div class="grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img src="images/team/OKOROAFOR MICHAEL.jpg" height=100 alt="team member of ReadGEM">
            <p class="font-bold text-2xl text-gray-400">ADEBAYO ADEMOLA</p>
            <p >Michael Adetona</p>
            <p class="bold font-2xl">Post</p>
           </div>
          </div>
      <div class="">
           <div class="grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img src="images/team/OLADODE TIMOTHY.png" height=100 alt="team member of ReadGEM">
            <p class="font-bold text-2xl text-gray-400">ADEBAYO ADEMOLA</p>
            <p >Michael Adetona</p>
            <p class="bold font-2xl">Post</p>
           </div>
          </div>
      <div class="">
           <div class="grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img src="images/team/ONI IYANU.jpg" height=100 alt="team member of ReadGEM">
            <p class="font-bold text-2xl text-gray-400">ADEBAYO ADEMOLA</p>
            <p >Michael Adetona</p>
            <p class="bold font-2xl">Post</p>
           </div>
          </div>
      <div class="">
           <div class="grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img src="images/team/SAKA MUBARAK.jpg" height=100 alt="team member of ReadGEM">
            <p class="font-bold text-2xl text-gray-400">ADEBAYO ADEMOLA</p>
            <p >Michael Adetona</p>
            <p class="bold font-2xl">Post</p>
           </div>
          </div>
      </div>
  </div>
      
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>
  
  <script>
  $(document).ready(function(){
 
 //top sale owl-carousel
 $(".owl-carousel").owlCarousel({
 loop:true,
 nav:true,
 loop: true,
 autoplay: true,
 slideTransition: 'linear',
 autoplaySpeed: 1000,
 autoplay:true,
 dots:false,
 responsive:{
     0:{
         items:1
     },
     600:{
         items:3
     },
     1000:{
         items:5
     }
 }
 })
 
  })
 
  </script>
 
  
@endsection