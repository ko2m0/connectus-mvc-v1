<!-- Footer -->
    <footer class="bg-connectus-blue py-8">
        <div class="container flex flex-col md:flex-row items-center">
            <div class="flex flex-1 flex-wrap items-center justify-center md:justify-start gap-12">
                <div class="">
                    <a href="{{ route('home.index') }}">
                        <img src="{{URL('/images/headerlogo_bnw_1.svg')}}" alt="Connectus logo" style="width: 60%">
                    </a>
                </div>
                
                <ul class="flex text-albus uppercase gap-12 text-xs">
                   
                </ul>
            </div>
            <div class="flex gap-10 mt-12 md:mt-0">
                <i class="fab fa-twitter text-albus text-2xl"></i>
                <i class="fab fa-facebook-square text-albus text-2xl"></i>
            </div>
        </div>
        <div class="container flex flex-col md:flex-row items-center mt-10">
            <div class="flex flex-1 flex-wrap items-center justify-center md:justify-start gap-12">               
                <ul class="flex text-albus gap-12 text-sm flex-wrap">
                    <li class="cursor-pointer">
                        <a href="{{ route('home.about') }}" class="hover:underline">
                            <p>About Us</p>
                        </a>
                    </li>
                    <li class="cursor-pointer">
                        <a href="{{ route('home.contact') }}" class="hover:underline">
                            <p>Contact</p>
                        </a>
                    </li>
                    <li class="cursor-pointer">
                        <a href="{{ route('home.about') }}" class="hover:underline">
                            <p>Pricing</p>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#" class=" hover:underline">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class=" hover:underline">Licensing</a>
                    </li>
                </ul>          
            </div>          
        </div>
        <div class="container flex flex-col items-center mt-10">
            <div class="flex gap-10 ">
                <span class="text-xs text-light-gray text-center text-gray-400">© {{now()->year}} <a href="{{ route('home.index') }}" class="hover:underline">ConnectUs Networking</a>. All Rights Reserved. | Made with &hearts; by Ko2m0
                </span>
            </div>
        </div>
    </footer>

<!-- end Footer -->





  