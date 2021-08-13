@extends('layouts.app')
@section('content')

<div class="h-screen bg-gray-300">
    <div class="py-12">
        <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg md:max-w-5xl">
            <div class="md:flex ">
                <div class="w-full p-4 px-5 py-5">
                    <div class="md:grid md:grid-cols-3 gap-2 ">
                        <div class="col-span-2 p-5">
                            <h1 class="text-xl font-medium ">Buy Token</h1>
                            <div class="flex justify-between items-center pt-6 mt-6 border-t">
                                <div class="flex items-center"> <img src="https://i.imgur.com/Uv2Yqzo.jpg" width="60" class="rounded-full ">
                                    <div class="flex flex-col ml-3 "> <span class="text-md font-medium w-auto">RedGEM</span> <span class="text-xs font-light text-gray-400">Token</span> </div>
                                </div>
                                <div class="flex justify-center items-center">
                                    <div class="pr-8 flex"> <span class="font-semibold">-</span> <input type="text" class="focus:outline-none bg-gray-100 border h-6 w-8 rounded text-sm px-2 mx-2" value="1"> <span class="font-semibold">+</span> </div>
                                    <div class="pr-8"> <span class="text-xs font-medium">BNB 1.50</span> </div>
                                    <div> <i class="fa fa-close text-xs font-medium"></i> </div>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-6 pt-6 border-t">
                                <div class="flex items-center"> <i class="fa fa-arrow-left text-sm pr-2"></i> <span class="text-md font-medium text-blue-500">Continue To Site</span> </div>
                                <div class="flex justify-center items-end"> <span class="text-sm font-medium text-gray-400 mr-1">Subtotal:</span> <span class="text-lg font-bold text-gray-800 "> $24.90</span> </div>
                            </div>
                        </div>
                        <div class=" p-5 bg-gray-800 rounded overflow-visible"> <span class="text-xl font-medium text-gray-100 block pb-3">Details</span> <span class="text-xs text-gray-400 "></span>
                            <div class="overflow-visible flex justify-between items-center mt-2">
                                <div class="rounded w-auto h-28 bg-gray-500 py-2 px-4 relative right-10"> <span class="italic text-lg font-medium text-gray-200 underline">Contract Address</span>
                                    <div class="flex justify-between items-center pt-4 "> <span class="text-xs text-gray-200 font-medium">0x33ae423c0Def21042a0dA738faa3660a0207cfEC</span></div>
                                    <div class="flex justify-between items-center mt-3"> <span class="text-xs text-gray-200">RedGEM Technologies Inc.</span> <span class="text-xs text-gray-200">12/18</span> </div>
                                </div>
                            </div>
                            <div class="flex justify-center flex-col pt-3"> <label class="text-xs text-gray-400 ">First Name</label> <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="John"> </div>
                            <div class="flex justify-center flex-col pt-3"> <label class="text-xs text-gray-400 ">Last Name</label> <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="Domnic"> </div>
                            <div class="flex justify-center flex-col pt-3"> <label class="text-xs text-gray-400 "><i class="fas fa-wallet    "></i> Your RedGEM Wallet Address</label> <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="**** **** **** ****"> </div>
                            <div class="flex justify-center flex-col pt-3"> <label class="text-xs text-gray-400 "><i class="fas fa-wallet    "></i> Your Transfer Wallet address</label> <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="**** **** **** ****"> </div>
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