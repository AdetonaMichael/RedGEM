@extends('layouts.app')

@section('content')

<div class="min-h-auto bg-red-800 grid md:grid-cols-2">
    <div class="text-holder m:auto p-5 leading-10 my-10">
        <p class="text-white 'font-extrabold font-sans text-4xl my-4">RedGEM Clasic Token Platform</p>
        <p class="text-gray-300 font-serif text-2xl leading-10 my-4"> RedGEM Clasic Makes it easy to attain your financial
            freedom, and it's easy decentralized application that can be downloaded by end-users from the application
            store</p>
        <a href="#"
            class="px-8 py-4 text-white font-extrabold font-sans text-center rounded-full hover:bg-purple-500 bg-purple-700">Buy Token</a>
    </div>
    <div class="gem1_image">
  
    </div>


</div>

<div
    class="count-section text-center font-serif justify-around bg-white border-gray-200 shadow-lg rounded mx-10 block md:grid md:grid-cols-3">
    <div class="numcount block  p-3 m-5 border-r-4 border-gray-300 border-l-4">
        <h2 class="text-3xl counter" data-target="3000">0</h2>
        <p class="py-3 text-gray-400 text-xl">Total Number of Accounts</p>
    </div>
    <div class="transcount block p-3 m-5 border-r-4 border-gray-300 border-l-4">
        <h2 class="text-3xl counter" data-target="9000">0</h2>
        <p class="py-3 text-xl text-gray-400">Transaction Count</p>
    </div>
    <div class="blockcount  block p-3 m-5 border-gray-300 border-r-4 border-l-4">
        <h2 class="text-3xl counter" data-target="600000">0</h2>
        <p class="py-3 text-gray-400 text-xl">Block height</p>
    </div>
</div>

<div class="mx-0 min-h-4/5 text-center text-gray-900 justify-around md:grid md:grid-cols-3 p-10 ">
    <div
        class="holder1 text-center  rounded-md animate__animated animate__slideInDown p-10 font-xl font-serif bg-white my-5 md:m-5 space-y-5 shadow-2xl">
        <div class="text-center justify-center blockchain_image">
            <i class="fa fa-spinner fa-spin fa-4x text-red-700 border-red-700  p-5 borde-dashed hover:animate-pulse border-8 rounded-full m-5 "
            aria-hidden="true"></i>
        </div>
        <h2 class="text-2xl font-bold border-red-700 border-b-4 pb-2">Tier 1</h2>
        <p class="text-xl leading-10">ICO CROWDSALE (TIER 1) SUPPLY: 7 500 000
             GOAL: 100 BNB (100 ETH)
             TOTAL RAISED FUNDS: 50 ETH
            MINIMUM INVESTMENT (PURCHASE):
            MAXIMUM INVESTMENT (PURCHASE):</p>

    </div>
    <div
        class="holder1 text-center  rounded-md animate__animated animate__slideInDown p-10 font-xl font-serif bg-white my-5 md:m-5 space-y-5 shadow-2xl">

        <h2 class="text-2xl font-bold border-red-700 border-b-4 pb-2 ">TIER 2 COMING SOON</h2>
        <p class="text-xl leading-10"> ICO CROWDSALE (TIER 2) SUPPLY: 4 500 000
             GOAL: 100 ETH
             TOTAL RAISED FUNDS: 50 ETH
             MINIMUM
             MAXIMUM</p>

    </div>
    <div
        class="holder1 text-center  rounded-md animate__animated animate__slideInDown p-10 font-xl font-serif bg-white my-5 md:m-5 space-y-5 shadow-2xl">
        <i class="fa fa-address-card fa-4x text-red-700 border-red-700  p-5 borde-dashed hover:animate-pulse border-8 rounded-full m-5 "
            aria-hidden="true"></i>
        <h2 class="text-2xl font-bold border-red-700 border-b-4 pb-2">TIER 3 COMING SOON</h2>
        <p class="text-xl leading-10">ICO CROWDSALE (TIER 3) SUPPLY: 3 000 000
             GOAL: 100 ETH
             TOTAL RAISED FUNDS: 50 ETH
             MINIMUM
             MAXIMUM</p>

    </div>



</div>
<p class="bg-red-700 text-white p-5 font-sans mx-0">RedGEM Token |</p>
<!--- Token Wizard section  --->
<div class="tokenwizard md:grid md:grid-cols-2 p-10">
     <div class="description">
        <p class="text-red-700 text-2xl shadow-lg animate animate-bounce bg-white text-center p-5 md:mx-10">ICO SALE IS OPEN</p>
                 <div class="addresses m-5 leading-7">
            <div class="block">
                <p class="text-red-700  font-sans">3J98t1WpEZ73CNmQviecrnyiWrnqRhWNLy</p>
                <span class="text-gray-400 font-bold">
                    RedGEM CONTRACT ADDRESS:
                </span>
            </div>
            <div class="block">
                <p class="text-red-700  font-sans">3J98t1WpEZ73CNmQviecrnyiWrnqRhWNLy</p>
                <span class="text-gray-400 font-bold">
                    ETHEREUM CROWDSALE ADDRESS (SEND ETH TO THIS ADDRESS):
                </span>
            </div>
            <div class="block">
                <p class="text-red-700 font-sans">bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf5mdq</p>
                <span class="text-gray-400 font-bold">
                    BINANCE CROWDSALE ADDRESS (SEND BNB TO THIS ADDRESS):
                </span>
            </div>
            <div class="block">
                <p class="text-red-700 font-extrabold font-sans">My Token</p>
                <span class="text-gray-400 font-bold">
                   Name
                </span>
            </div>
   
        </div>
     </div>
     <div class="card rounded-xl shadow-md bg-white ">
         <p class="font-sans text-center text-red-700 font-extrabold mt-10 pt-5">TOKEN SALES ENDS IN </p>
         <div class="date_and_sale bg-white md:p-5 my-10">
            <div class="time_counter flex text-center space-x-4 justify-center">
                <div class="item block text-center justify-center bg-red-700   p-5">
                    <p class="font-extrabold text-3xl font-serif font-3xl text-white day ">80</p>
                    <p class="font-xl text-xl text-gray-400">Days</p>
                </div>
                <div class="item block text-center justify-center bg-red-700   p-5">
                    <p class="font-extrabold text-3xl font-serif font-3xl text-white hour ">80</p>
                    <p class="font-xl text-xl text-gray-400">Hours</p>
                </div>
                <div class="item block text-center justify-center bg-red-700  p-5">
                    <p class="font-extrabold text-3xl font-serif font-3xl text-white minute">80</p>
                    <p class="font-xl text-xl text-gray-400">Mins</p>
                </div>
                <div class="item block text-center justify-center p-5 bg-red-700">
                    <p class="font-extrabold text-3xl font-serif font-3xl text-white second">80</p>
                    <p class="font-xl text-xl text-gray-400">Seconds</p>
                </div>
            </div>
    </div>
   <div class="text-center justify-center"> <a class="px-8 py-4 text-center font-bold font-sans hover:text-yellow-200 hover:bg-gray-700 text-yellow-300 bg-gray-800 justify-center rounded-full">Buy Token</a></div>
    <p class="font-sans text-center text-red-700 font-extrabold my-2 py-5">WE ACCEPT </p>
       <div class="paymenticons flex space-x-3 justify-center text-center my-5">
           <img class="p-5 bg-gray-800" src="images/binance.svg" alt="binance logo image" height=100 width=200/>
       </div>
     </div>
</div>
<p class="bg-red-700 text-white p-5 font-sans mx-0">RedGEM Token |</p>
<!--- token wizard section ---->










@endsection
