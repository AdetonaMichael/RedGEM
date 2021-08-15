@extends('layouts.app')
@section('title')
RedGEM Home
@endsection
@section('content')

<div class="min-h-auto bg-red-800 grid md:grid-cols-2">
    <div class="text-holder m:auto p-5 leading-10 my-10 text-center bg-black">
        <p class="text-white 'font-extrabold font-sans text-4xl my-10 shadow-lg text-center redgem_ico">RedGEM Classic I.C.O</p>
        <a href="#buytoken"class="px-8 py-4 text-white font-extrabold font-sans text-center rounded-full bg-red-600">Buy Token</a>
    </div>
    <div class="gem1_image">
  
    </div>


</div>
<p class="mx-0"><marquee behavior="" direction="ltr"><span class="text-red-600">$2.00(ETH) | $0.002(BTC)   </span>     <span class="text-green-500">$2.00(ETH) | $0.002(BTC)</span></marquee></p>
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
<p class="bg-red-700 text-white p-2 font-sans mx-0"></p>
<!--- Token Wizard section  --->
<div class="tokenwizard md:grid md:grid-cols-2 p-10">
     <div class="description" id="buytoken">
        <p class="text-red-700 text-2xl shadow-lg animate animate-bounce bg-white text-center p-5 md:mx-10">ICO SALE IS OPEN</p>
                 <div class="addresses m-5 leading-7">
            <div class="block">
                {{-- <p class="text-red-700  font-sans">0x33ae423c0Def21042a0dA738faa3660a0207cfEC</p> --}}
                <span class="text-gray-400 font-bold">
                    RedGEM CONTRACT ADDRESS:
                </span>
            </div>
            <div class="block">
                <p class="text-red-700  font-sans bold">Don't Have A Wallet?</p>
                <span class="text-gray-400 font-bold flex">
                    Create One with Trust Wallet <a href="https://trustwallet.com" target="blank"><img src="images/trustw.svg" height=200 width=200></a>
                </span>
            </div>
            <div class="block">
                <p class="text-red-700 font-sans font-bold">Copy The Contract Address & Add To Trust Wallet To Create Your "RedGEM Classic" Wallet.</p>
                
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
   <div class="text-center justify-center my-10"> <a href="/checkout" class="px-8 py-4 text-center font-bold font-sans hover:text-gray-200 hover:bg-gray-900 text-white bg-black justify-center rounded-full">Buy Token</a></div>
    
     </div>
</div>
<p class="bg-red-700 text-white p-2 font-sans mx-0"></p>
<!--- token wizard section ---->
<div class="mx-0 min-h-4/5 text-center text-gray-900 justify-around md:grid md:grid-cols-3 p-10 ">
    <div
        class="holder1 text-center rounded-2xl  p-10 font-xl font-serif bg-white my-5 md:m-5 space-y-3 shadow-2xl md:flex md:h-auto">
        <div class="text-center justify-center blockchain_image border-red-700  md:border-r-4 block">
            <h2 class="text-2xl font-bold  pb-2">I.C.O TIER 1</h2>
            <i class="fa fa-spinner fa-spin fa-2x text-red-700 border-red-700  p-5 border-dashed hover:animate-pulse border-8 rounded-full m-5 "
            aria-hidden="true"></i>
        </div>
       
        <div class="text-xl leading-5 px-2 text-gray-500">
            <p>Supply: 7 500 000</p>
            <p>Goal: 1000 BNB</p>
            <p>Funds Raised: 50 BNB</p>
            <p>Soft Cap:</p>
            <p> Hard Cap:</p></div>

    </div>
    <div
        class="holder1 text-center  rounded-2xl  p-10 font-xl font-serif bg-white my-5 md:m-5 space-y-5 shadow-2xl md:flex md:h-auto">

        <h2 class="text-2xl font-bold border-red-700 xs:border-b-4 md:border-r-4 pb-2 ">TIER 2 COMING SOON</h2>
        <div class="p-2">
        <img class="text-center justify-center" src="images/comingsoon.gif" height="200" width="200" alt="coming soon RedGEM tier2">
        </div>
    </div>
    <div
        class="holder1 text-center  rounded-2xl  p-10 font-xl font-serif bg-white my-5 md:m-5 space-y-5 shadow-2xl md:flex md:h-auto">
      
        <h2 class="text-2xl font-bold border-red-700 xs:border-b-4 md:border-r-4 pb-2">TIER 3 COMING SOON</h2>
        <div class="p-2">
      <img src="images/comingsoon.gif" height="200" width="200">
        </div>
    </div>



</div>


@endsection
<script>
    
// Date count down code
const countdown = () => {
    const countDate = new Date ("September 24, 2021 00:00:00").getTime();
    const now = new Date().getTime();
    const gap = countDate - now; 

    // How does time work exactly ?
    const second = 1000;
    const minute = second * 60;
    const hour = minute * 60;
    const day = hour * 24;

    // Calculating it
    const textDay  = Math.floor(gap / day);
    const textHour = Math.floor((gap % day) /hour );
    const textMinute = Math.floor((gap % hour)/ minute);
    const textSecond = Math.floor((gap % minute)/ second);

    document.querySelector('.day').innerText = textDay;
    document.querySelector('.hour').innerText = textHour;
    document.querySelector('.minute').innerText = textMinute;
    document.querySelector('.second').innerText = textSecond;
};

setInterval(countdown, 1000);
</script>