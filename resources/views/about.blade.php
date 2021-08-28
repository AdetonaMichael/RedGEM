@extends('layouts.app')
@section('title')
About RedGEM
@endsection
@section('content')

    <div class="background-image grid grid-cols-1 m-auto">
    </div>

  <div class="content-holder relative bottom-32">
      <div class="thecontent bg-white shadwow-lg md:grid md:grid-cols-2 md:mx-20 leading-10">
         <div class="industries bg-red-900 text-center justify-center p-10">
           <div class="text-gray-200 font-sans font-bold text-xl mt-2 leading-8">
             <p>A TECHNOLOGY AND BLOCKCHAIN SOLUTIONS COMPANY responsible for using blockchian technology to make existing COMPANIES, GOVERNMENTS OR STARTUPS, etc. raise needed funds to finance their projects. </p>
             <br/>
             <p>We make amazing people achieve more through innovative & professional solutions-driven mechanism.</p>
              <br/>
             <p> We leverage our broad plus deep services, our leading edge technology and personalized approach to meet the special needs of a wide range of clients.</p>
           </div>

         </div>
         <div class="carousel relative shadow-2xl bg-white">
          <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
              <div id="image1" class="block h-full w-full  shadow-md bg-gray-300 text-white text-5xl text-center"></div>
            </div>
            <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
            
            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
              <div id="image2" class="block h-full w-full  text-white text-5xl text-center"></div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
            
            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
              <div id="image3" class="block h-full w-full bg-green-500 text-white text-5xl text-center"></div>
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
         <div class="section2 p-10 font-sans" id="contactus">
           <p class="font-bold text-2xl text-red-700 font-sans"><i class="fa fa-address-card text-red-700" aria-hidden="true"></i> Address</p>
           <p class="bold">Mayfair, Ile-Ife, Osun State, Nigeria</p>
         </div>
         <div class="section2 p-10 font-sans">
           <p class="font-bold text-red-700 font-sans text-2xl"><i class="fa fa-clipboard "></i> Our Subsidiaries</p>        
<ul>
  <li title="Subscription and Cloud Cuisine">RedGEM Cuisine</li>
  <li>RedGEM Mall </li>
  <li title="Urban Area Mobility Company">RedGEM Cruise</li>
  <li>
</ul>

          
         </div>
      </div>
  </div>
  <div class=" banner-holder md:flex justify-center bg-gray-200 my-10 border-b border-t shadow-lg  border-gray-100 text-center">
    <div class="banner-text  md:m-5 md:p-5 space-y-10 ">
      <p class="font-bold text-6xl text-red-700 m-5 justify-start text-center font-serif">Our Solutions</p>
        <ul class="font-2xl font-bold leading-10 text-gray-800">
            <li> Cryptocurrency Tokens Development</li>
             <li>Tokenomics & Anti-Whale Mechanism Design</li>
            <li>Design Of Technical Whitepaper</li>
            <li>Smart Contracts Verification</li>
            <li>CoinMarketCap Listing</li>
            <li>Airdrop Bots Development & Launch</li>
             <li>Airdrop Campaign</li>
             <li>I.C.O/S.T.O/I.E.O/I.D.O Campaign</li>
              <li>Website Development & Launch</li>
            
            <li>Software Development & Launch</li>
            
            <li>Coin Exchange Listings</li>
            <li>Crypto Exchanges Development & Launch</li>
        </ul>
       
      </div>

    <div class="bannder-image mt-5">
         <img src="images/team.svg" style="width:60%; height=60%; maring-left:0px; margin-right:0px; display:inline-block;"  alt="our solution image">
    </div>
</div>
 <!---------------- soape------------->
 
 <!---------------- soape------------->
  <div class="ourteam md:mx-20 background-gray-200 rounded-xl shadow-lg md:p-10 text-center justify-center">
     
    <p class="font-bold text-6xl text-red-700 m-5 justify-start text-center font-serif">Our Team</p>
      <div class="owl-carousel owl-theme">
      <div class="h-64">
           <div class="owl_img grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img class="rounded-full" src="images/team/ADEBAYO ADEMOLA.jpg" alt="team member of ReadGEM">
            <p class="font-bold text-2xl ">ADEBAYO ADEMOLA</p>
            <p>Head, Business Development</p>
            <p class="bold font-2xl text-red-700"><i>Partner Trillion Ivy Nig. & Co.</i></p>
            <p class="snav">
              <ul class="flex text-center justify-center my-5">
               
                <li><i class="fab fa-twitter fa-2x text-gray-400 px-4"></i></li>
            
                <li><i class="fab fa-linkedin fa-2x text-gray-400"></i></li>
              </u>
            </p>
          </div>
          </div>
          
      <div class="">
      
           <div class="owl_img grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img class="rounded-full" src="images/team/ADESANMI SIMILOLUWA.jpg" alt="team member of ReadGEM">
            <p class="font-bold text-2xl ">ADESANMI SIMILOLUWA</p>
            <p ><i>Community Manager</i></p>
            <p class="snav">
              <ul class="flex text-center justify-center my-5">
               
                <li><i class="fab fa-twitter fa-2x text-gray-400 px-4"></i></li>
            
                <li><i class="fab fa-linkedin fa-2x text-gray-400"></i></li>
              </u>
            </p>
          </div>
          </div>
      <div class="h-64">
           <div class="owl_img grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img class="rounded-full" width=200 height=200 src="images/team/ADESANMI EMMANUEL.jpg" alt="team member of ReadGEM">
            <p class="font-bold text-2xl">ADESANMI EMMANUEL</p>
            <p ><i>Blockchain Technology Expert, Business Strategist & Planner</i></p>
            <p class="snav">
              <ul class="flex text-center justify-center my-5">
                <li><i class="fab fa-twitter fa-2x text-gray-400 px-4"></i></li>
                <li><i class="fab fa-linkedin fa-2x text-gray-400"></i></li>
              </u>
            </p> 
          </div>
          </div>
      <div class="h-64 space-y-10">
           <div class="owl_img grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img class="rounded-full" width=100 height=100  src="images/team/ADEYEFA ADESOLA.jpg" alt="team member of ReadGEM">
            <p class="font-bold text-2xl ">ADEYEFA ADESOLA J.</p>
            <p ><i>Investor & Forex Trader</i></p>
            <p class="bold font-2xl text-red-500">C.E.O Yef Properties & Enterprise</p>
            <p class="snav">
              <ul class="flex text-center justify-center my-5">
               
                <li><i class="fab fa-twitter fa-2x text-gray-400 px-4"></i></li>
            
                <li><i class="fab fa-linkedin fa-2x text-gray-400"></i></li>
              </u>
            </p>
          </div>
          </div>
      <div class="h-64 space-y-10">
           <div class="owl_img grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img class="rounded-full" width=200 height=200  src="images/team/AKINOLA-O GBENRO.jpg" alt="team member of ReadGEM">
            <p class="font-bold text-2xl ">AKINOLA-O GBENRO</p>
            <p >
              <i>KEY ADVISOR</i></p>
            <p class="bold font-2xl text-red-700"><i>C.E.O justlinks.net</i></p>
            <p class="snav">
              <ul class="flex text-center justify-center my-5">
               
                <li><i class="fab fa-twitter fa-2x text-gray-400 px-4"></i></li>
            
                <li><i class="fab fa-linkedin fa-2x text-gray-400"></i></li>
              </u>
            </p>
           </div>
          </div>
      <div class="h-64">
           <div class="owl_img grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img class="rounded-full" src="images/team/ARAYOMBO ARAMIDE.jpg"  alt="team member of ReadGEM">
            <p class="font-bold text-2xl ">ARAYOMBO ARAMIDE</p>
            <p ></p>
            <p class="snav">
              <ul class="flex text-center justify-center my-5">
               
                <li><i class="fab fa-twitter fa-2x text-gray-400 px-4"></i></li>
            
                <li><i class="fab fa-linkedin fa-2x text-gray-400"></i></li>
              </u>
            </p>
           </div>
          </div>
      <div class="h-64">
           <div class="owl_img grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img class="rounded-full" src="images/team/AWOTOBI OYEWUMI.jpg" alt="team member of ReadGEM">
            <p class="font-bold text-2xl ">AWOTOBI OYEWUMI</p>
            <p ><i>Investment Analyst</i></p>
            <p class="bold font-2xl text-red-700"><i>C.E.O TOBITAT Inc</i></p>
            <p class="snav">
              <ul class="flex text-center justify-center my-5">
               
                <li><i class="fab fa-twitter fa-2x text-gray-400 px-4"></i></li>
            
                <li><i class="fab fa-linkedin fa-2x text-gray-400"></i></li>
              </u>
            </p>
           </div>
          </div>
      <div class="h-64">
           <div class="owl_img grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img class="rounded-full" src="images/team/Chukwuemeka Linda (10).jpg"alt="team member of ReadGEM">
            <p class="font-bold text-2xl">Chukwuemeka Linda</p>
            <p ><i>Head, Business Planning</i></p>
            <p class="bold font-2xl text-red-700"><i>Partner Trillion Ivy Nig. & Co.</i></p>
            <p class="snav">
              <ul class="flex text-center justify-center my-5">
               
                <li><i class="fab fa-twitter fa-2x text-gray-400 px-4"></i></li>
            
                <li><i class="fab fa-linkedin fa-2x text-gray-400"></i></li>
              </u>
            </p>
           </div>
          </div>
      <div class="h-64">
           <div class="owl_img grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img class="rounded-full" src="images/team/ELUJULO AYOMIKUN.jpg"  alt="team member of ReadGEM">
            <p class="font-bold text-2xl ">ELUJULO AYOMIKUN</p>
            <p><i>Head, Business Operations</i></p>
            <p class="bold font-2xl text-red-500"><i>C.O.O Trillion Ivy Nig. & Co.</i></p>
            <p>
              <p class="snav">
                <ul class="flex text-center justify-center my-5">
                 
                  <li><i class="fab fa-twitter fa-2x text-gray-400 px-4"></i></li>
              
                  <li><i class="fab fa-linkedin fa-2x text-gray-400"></i></li>
                </u>
              </p>
          </div>
          </div>
      <div class="h-64">
           <div class="owl_img grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img class="rounded-full" src="images/team/ODEYEMI TEMITAYO.jpg" alt="team member of ReadGEM">
            <p class="font-bold text-2xl ">ODEYEMI TEMITAYO</p>
            <p >Project Manager</p>
            <p class="bold font-2xl">Post</p>
           
            <p class="snav">
              <ul class="flex text-center justify-center my-5">
               
                <li><i class="fab fa-twitter fa-2x text-gray-400 px-4"></i></li>
            
                <li><i class="fab fa-linkedin fa-2x text-gray-400"></i></li>
              </u>
            </p></div>
          </div>
      <div class="">
           <div class="owl_img grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img class="rounded-full" src="images/team/OKOROAFOR MICHAEL.jpg"  alt="team member of ReadGEM">
            <p class="font-bold text-2xl ">OKOROAFOR MICHAEL</p>
            <p >KEY ADVISOR</p>
            <p class="text-red-500"><i>Co-Founder dataway.ng</i></p>
            <p class="">
              <p class="snav">
                <ul class="flex text-center justify-center my-5">
                 
                  <li><i class="fab fa-twitter fa-2x text-gray-400 px-4"></i></li>
              
                  <li><i class="fab fa-linkedin fa-2x text-gray-400"></i></li>
                </u>
              </p>
            </p>
           </div>
          </div>
      <div class="">
           <div class="owl_img grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img class="rounded-full" src="images/team/OLADODE TIMOTHY.png" alt="team member of ReadGEM">
            <p class="font-bold text-2xl ">OLADODE TIMOTHY</p>
            <p ></p>
            <p class="snav">
              <ul class="flex text-center justify-center my-5">
               
                <li><i class="fab fa-twitter fa-2x text-gray-400 px-4"></i></li>
            
                <li><i class="fab fa-linkedin fa-2x text-gray-400"></i></li>
              </u>
            </p>
           </div>
          </div>
      <div class="">
           <div class="owl_img grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img class="rounded-full" src="images/team/ONI IYANU.jpg" alt="team member of ReadGEM">
            <p class="font-bold text-2xl">ONI IYANU</p>
            <p ></p>
            <p class="snav">
              <ul class="flex text-center justify-center my-5">
               
                <li><i class="fab fa-twitter fa-2x text-gray-400 px-4"></i></li>
            
                <li><i class="fab fa-linkedin fa-2x text-gray-400"></i></li>
              </u>
            </p>
           </div>
          </div>
      <div class="">
           <div class="owl_img grid_item_1  bg-white shadow-lg rounded-2xl  p-5 m-3">
            <img class="rounded-full" src="images/team/SAKA MUBARAK.jpg"  alt="team member of ReadGEM">
            <p class="font-bold text-2xl">SAKA MUBARAK</p>
            <p>Project Manager</p>
            <p class="snav">
              <ul class="flex text-center justify-center my-5">
               
                <li><i class="fab fa-twitter fa-2x text-gray-400 px-4"></i></li>
            
                <li><i class="fab fa-linkedin fa-2x text-gray-400"></i></li>
              </u>
            </p>
           </div>
          </div>
      </div>
  </div>
  <p class="font-bold text-4xl text-red-700 m-5 justify-start text-center font-serif">Our Subsidiaries</p>
  {{-- check out our Resources Page --}}
<div class="md:mx-20 rounded-xl text-center justify-center md:grid md:grid-cols-3">
  <div title="Drone Services text-center justify-center" class="p-5 m-5"><img class="imgsvg" src="images/drone.svg" width=100 height=100 alt="Drone Dilivery">
  <p class="font-sans font-bold text-white bg-red-700 p-5 text-center">RedGEM Cruise</p></div>
  <div title="E-Commerce Services" class="p-5 m-5"><img class="imgsvg" src="images/security2.svg" width=100 height=100 alt="E-Commerce Services">
  <p class=" font-sans font-bold text-white bg-red-700 p-5 text-center">RedGEM Mall</p></div>
  <div title="Subscription & Fast-Food Services" class="p-5 m-5"><img class="imgsvg" src="images/food.svg" alt="Subscription & Fast-Food Services" height=100 width=100>
<p class="font-sans font-bold text-white bg-red-700 p-5 text-center">RedGEM Cuisine</p></div>
</div>
<div class="md:mx-20 rounded-xl text-center justify-center md:grid md:grid-cols-3">
  <div class="p-5 m-5"></div>
  <div title="Security Services" class="p-5 m-5"><img class="imgsvg" src="images/connect_2.svg" width=100 height=100 alt="Security Service">
    <p class=" font-sans font-bold text-white bg-red-700 p-5 text-center">RedGEM Communications</p></div>
  <div class="p-5 m-5"></div>
</div>
      
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>
 
  
@endsection

<script>
  document.addEventListener("DOMContentLoaded", function(){
  //top sale owl-carousel
  $(".owl-carousel").owlCarousel({
  loop:true,
  nav:true,
  loop: true,
  autoplay: false,
  slideTransition: 'linear',
  autoplaySpeed: 1000,
  autoplay:true,
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
  })
  });
  
  </script>