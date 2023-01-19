@extends('bedrock') 

@section('content')
<section class="py-10 mt-10 lg:mt-20">
    <!-- Heading-->
    <div class="sm:w-2/4 lg:w-7/12 mx-auto px-2 mt-10">
        <h1 class="text-4xl md:text-4xl lg:text-6xl font-bold text-center text-connectus-blue font-DaysOne">Contact Us</h1>
        <p class="text-3xl md:text-3xl lg:text-4xl text-center mt-10 font-semibold">
              
        </p>
    </div>
    <!-- Text 1 -->
    <div class="relative mt-10 lg:mt-12">
        <div class="container flex flex-col lg:flex-row items-center justify-center py-10">
            <!-- Content -->
            <div class="flex flex-1 flex-col items-center lg:items-start">
                <p class="my-4 text-justified sm:w-3/4 lg:w-full font-Manrope text-xl md:text-2xl font-semibold">
                    ConnectUs&reg; is your own online spot with all your contact info,
                     social media links, and more, to share with anyone.
                </p>
                <p class="my-4 text-justified lg:text-left sm:w-3/4 lg:w-full font-Manrope text-xl md:text-2xl font-semibold">Visitors
                     will have the chance to reach you and recognize your business
                    with just a few clicks.</p>
                <button type="button" class="hidden btn btn-unus hover:bg-connectus-orange">imma btn</button>
            </div>
                
        
        </div>  
    </div>
    
</section>

@endsection


@section('title', "Contact Us ::")