@extends('layouts.app')
@section('content')

<div class="h-auto bg-gray-300 checkout_background">
    <div class="py-12">
        <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg md:max-w-5xl">
            <div class="md:flex ">
                <div class="w-full p-4 px-5 py-5">
                    <div class="md:grid md:grid-cols-3 gap-2 ">
                        <div class="col-span-2 p-5">
                            <h1 class="text-xl font-medium ">Buy Token</h1>
                            <div class="flex justify-between items-center pt-6 mt-6 border-t">
                                <div class="flex items-center"> <img src="images/redgemlogo.ico" width="60" class="rounded-full ">
                                    <div class="flex flex-col ml-3 "> <span class="text-md font-medium w-auto">RedGEM</span> <span class="text-xs font-light text-gray-400">Token</span> </div>
                                </div>
                                <div class="flex justify-center items-center">
                                    <div class="quantity pr-4 pl-4 ">
                                        <button class="btn minus-btn disabled" type="button">-</button>
                                        <input type="text" id="quantity" value="1">
                                        <button class="btn plus-btn" type="button">+</button>
                                    </div>
                                    <div class="pr-8"> <span class="text-xs font-medium">BNB 0.0003</span> </div>
                                    <div> <i class="fa fa-close text-xs font-medium"></i> </div>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-6 pt-6 border-t">
                                <div class="flex items-center"><a href="/"> <i class="fa fa-arrow-left text-sm pr-2"></i> <span class="text-md font-medium text-blue-500">Continue To Site</span></a> </div>
                                <div class="flex justify-center items-end"> <span class="text-sm font-medium text-gray-400 mr-1">Subtotal:</span><span class="text-lg font-bold text-gray-800">BNB </span> <span id="price" class="text-lg font-bold text-green-500 "> 0.0003</span> </div>
                            </div>
                            <p class="font-sans text-center text-red-700 font-extrabold my-2 py-5">WE ACCEPT </p>
       <div class="paymenticons flex space-x-3 justify-center text-center my-5">
           <img class="p-5 bg-gray-800" src="images/binance.svg" alt="binance logo image" height=100 width=200/>
       </div>
    
                        </div>
                        <div class=" p-5 bg-gray-800 rounded overflow-visible"> <span class="text-xl font-medium text-gray-100 block pb-3">Details</span> <span class="text-xs text-gray-400 "></span>
                            <div class="overflow-visible flex justify-between items-center mt-2">
                                <div class="rounded w-auto h-28 bg-gray-500 py-2 px-4 relative right-10"> <span class="italic text-lg font-medium text-gray-200 underline">Contract Address</span>
                                    <div class="flex justify-between items-center pt-4 "> <span class="text-xs text-gray-200 font-medium">0x33ae423c0Def21042a0dA738faa3660a0207cfEC</span></div>
                                    <div class="flex justify-end items-center mt-3"> <span class="text-xs text-gray-200">RedGEM Technologies Inc.</span>  </div>
                                </div>
                            </div>
                            <div class="flex justify-center flex-col pt-3"> <label class="text-xs text-gray-400 ">First Name<span class="text-red-600">  *</span></label> <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="John" required> </div>
                            <div class="flex justify-center flex-col pt-3"> <label class="text-xs text-gray-400 ">Last Name<span class="text-red-600">  *</span></label> <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="Domnic" required> </div>
                            <div class="flex justify-center flex-col pt-3"> <label class="text-xs text-gray-400 "><i class="fas fa-wallet    "></i> Your RedGEM Wallet Address<span class="text-red-600">  *</span></label> <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="**** **** **** ****" required> </div>
                            <div class="flex justify-center flex-col pt-3"> <label class="text-xs text-gray-400 "><i class="fas fa-wallet    "></i> Your Transfer Wallet address <span class="text-red-600">  *</span></label> <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="**** **** **** ****" required> </div>
                            <div class="grid grid-cols-3 gap-2 pt-2 mb-3">
                                
                            </div> <button class="h-12 w-full bg-blue-500 rounded focus:outline-none text-white hover:bg-blue-600">Buy Token</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection