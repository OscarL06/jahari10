@extends('layouts.main')

@section('title', 'Subscribe | ' . Auth::user()->username)

@section('content')
    <div class="w-full lg:w-4/5 flex flex-col items-center lg:ml-[20%] mt-6">
        
        <h1 class="text-6xl tracking-tighter font-abel">Pricing Plans</h1>
        <p class="w-3/4 mt-6 text-center">
            Welcome! We offer four separate subscription plans to choose from.
            No matter which plan you choose, you will have access to our expertly-crafted piano lessons and interactive exercises. 
            Sign up today and start your journey to becoming a skilled pianist!
        </p>

        <div class="grid w-full grid-cols-1 gap-6 px-20 mt-20 lg:grid-cols-3">
            <div class="flex flex-col justify-between w-11/12 p-5 mx-auto bg-white rounded-md shadow md:w-3/4 lg:w-full">
                <h2 class="text-3xl tracking-tighter text-purple-800 font-abel">Monthly</h2>
                <h3 class="pt-5 text-5xl font-semibold">$80<span class="text-base text-gray-600">/mo</span></h3>
                <p class="py-4">
                    With this plan, you will have access to all of our piano lessons and resources for a monthly fee. This is a great option for those who want 
                    to try out our platform or only need access for a short period of time.
                </p>
                <x-paddle-button :url="$payLink" class="px-4 py-1 text-center text-white rounded-md hover:bg-purple-900 bg-main" data-theme="none">Get Access</x-paddle-button>
            </div>
            <div class="flex flex-col justify-between w-11/12 p-5 mx-auto bg-white rounded-md shadow md:w-3/4 lg:w-full">
                <h2 class="text-3xl tracking-tighter text-purple-800 font-abel">Biannual</h2>
                <h3 class="pt-5 text-5xl font-semibold">$450<span class="text-base text-gray-600">/6-mos</span></h3>
                <p class="py-4">
                    This plan offers a discounted rate for a six-month subscription. It is a good choice for those who are committed to their piano studies 
                    and want to save money over the long term.
                </p>
                <x-paddle-button :url="$payLinkSix" class="px-4 py-1 text-center text-white rounded-md bg-main" data-theme="none">Get Access</x-paddle-button>
            </div>
            <div class="flex flex-col justify-between w-11/12 p-5 mx-auto bg-white rounded-md shadow md:w-3/4 lg:w-full">
                <h2 class="text-3xl tracking-tighter text-purple-800 font-abel">Annualy</h2>
                <h3 class="pt-5 text-5xl font-semibold">$900<span class="text-base text-gray-600">/yr</span></h3>
                <p class="py-4">
                    This plan offers a discounted rate for a six-month subscription. It is a good choice for those who are committed to their piano studies 
                    and want to save money over the long term.
                </p>
                <x-paddle-button :url="$yearly" class="px-4 py-1 text-center text-white rounded-md hover:bg-purple-900 bg-main" data-theme="none">Get Accesss</x-paddle-button>
            </div>
        </div>

        <div class="grid w-full grid-cols-1 gap-6 px-6 mt-6 mb-16 lg:w-3/4 lg:my-14">
            <div class="flex flex-col justify-between w-11/12 p-5 mx-auto bg-white rounded-md shadow lg:px-6 md:w-3/4 lg:w-full">
                <h2 class="text-3xl tracking-tighter text-purple-800 font-abel">Lifetime</h2>
                <h3 class="pt-5 text-5xl font-semibold">$999<span class="text-base text-gray-600">One-time</span></h3>
                <p class="py-4">
                    Our lifetime subscription gives you access to all of our piano lessons and resources for as long as our platform is in operation. 
                    This is the ultimate option for those who want to dedicate themselves to their piano studies and have a lifetime of learning at their fingertips.
                </p>
                <x-paddle-button :url="$lifetime" class="px-4 py-1 text-center text-white rounded-md lg:my-2 lg:mx-auto lg:w-3/5 hover:bg-purple-900 bg-main" data-theme="none">Get Accesss</x-paddle-button>
            </div>
        </div>
    </div>

    <x-back-button backUrl="{{ route('dash') }}" class="top-4 right-4"/>
@endsection