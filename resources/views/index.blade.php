@extends('layout.layout')

@section('content')
<div class="px-8 lg:px-48 lg:py-16">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center text-sm font-bold text-dark">
                Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-font_light mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <a href="#" class="ms-1 text-sm font-bold text-font_light md:ms-2">Shop</a>
                </div>
            </li>
        </ol>
    </nav>


    <div class="grid grid-cols-1 lg:grid-cols-2 mt-10">
        {{-- slider image --}}
        <div x-data="{ image: '{{ asset('assets/images/images_1.svg') }}' }">
            <div class="bg-cover relative h-[280px] md:h-[450px]">
                <img :src="image" alt="product" class="w-full h-full object-cover">
                <div class="absolute inset-0 flex justify-between items-center px-4">
                    <button @click="image = '{{ asset('assets/images/button_1.svg') }}'" class=" p-2 rounded-full">
                        <img src="{{ asset('assets/icons/carousel-control-prev.svg') }}" alt="product" class="w-full h-full object-cover">
                    </button>
                    <button @click="image = '{{ asset('assets/images/images_1.svg') }}'" class=" p-2 rounded-full">
                        <img src="{{ asset('assets/icons/carousel-control-next.svg') }}" alt="product" class="w-full h-full object-cover">
                        </svg>
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-5 mt-5">
                {{-- button 1 --}}
                <div class=" cursor-pointer bg-cover h-[75px]" @click="image = '{{ asset('assets/images/button_1.svg') }}'">
                    <img src="{{ asset('assets/images/button_1.svg') }}" alt="product" class="w-full h-full object-cover">
                </div>
                {{-- button 2 --}}
                <div class="cursor-pointer hover:contrast-100 bg-cover h-[75px]" @click="image = '{{ asset('assets/images/images_1.svg') }}'">
                    <img src="{{ asset('assets/images/images_1.svg') }}" alt="product" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
        {{--  --}}
        <div class="grid-cols-1 px-6 py-3 space-y-7 mt-7 md:mt-0">
            <p class="text-3xl text-dark">Floating Phone</p>
            <div class="flex space-x-2.5 items-center">
                <div class="flex space-x-1.5">
                    <img src="{{ asset('assets/icons/bxs-star.svg') }}" alt="product">
                    <img src="{{ asset('assets/icons/bxs-star.svg') }}" alt="product">
                    <img src="{{ asset('assets/icons/bxs-star.svg') }}" alt="product">
                    <img src="{{ asset('assets/icons/bxs-star.svg') }}" alt="product">
                    <img src="{{ asset('assets/icons/bx-star.svg') }}" alt="product">
                </div>
                <p class="font-bold text-sm text-font_dark">10 Reviews</p>
            </div>
            <p class="text-2xl font-bold text-dark">$1,139.33</p>
            <p class="font-bold text-sm text-font_dark">Availability  : <span class="text-blue">In Stock </span></p>
            <p class=" font-light text-gray-800">Met minim Mollie non desert Alamo est sit cliquey dolor
                do met sent. RELIT official consequent door ENIM RELIT Mollie.
                Excitation venial consequent sent nostrum met.</p>
            <hr class="my-4 border-t-2 border-gray-200">
            <div class="flex items-center">
                <span class="flex w-8 h-8 me-3 bg-blue rounded-full"></span>
                <span class="flex w-8 h-8 me-3 bg-light_green rounded-full"></span>
                <span class="flex w-8 h-8 me-3 bg-orange rounded-full"></span>
                <span class="flex w-8 h-8 me-3 bg-dark rounded-full"></span>
            </div>
            <div class="flex items-center space-x-4 mt-4">
                <button class="bg-blue text-white px-4 py-3 rounded-md font-bold">Select Options</button>
                <div class="w-10 h-10 rounded-full justify-center bg-white border flex items-center">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                      </svg>
                </div>
                <div class="w-10 h-10 rounded-full justify-center bg-white border flex items-center">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                      </svg>
                </div>
                <div class="w-10 h-10 rounded-full justify-center bg-white border flex items-center">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>
                      </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-28 space-y-6">
        <p class="text-2xl font-bold text-dark">BESTSELLER PRODUCTS</p>
        <hr class="my-4 border-t-2 border-gray-200">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-8 gap-x-6">
            @foreach ($files as $file)
            <div class="bg-white grid grid-flow-row transform transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                <div class="bg-cover">
                    <img src="{{ asset('assets/products/' . $file->getFilename()) }}" alt="product" class="w-full h-full object-cover">
                </div>
                <div class="flex flex-col align-middle p-7">
                    <div class="space-y-2.5">
                        <p class="text-dark font-bold">Graphic Design</p>
                        <p class="text-font_dark font-bold">English Department</p>
                        <p class="text-font_light font-bold">$16.48<span class="ms-1.5 text-dark_green">$6.48</span></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection


