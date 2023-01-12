<!-- Footer -->
    <footer class="bg-connectus-blue py-8">
        <div class="container flex flex-col md:flex-row items-center">
            <div class="flex flex-1 flex-wrap items-center justify-center md:justify-start gap-12">
                <img src="{{URL('/images/headerlogo_bnw_1.svg')}}" alt="Connectus logo" style="width: 20%">
                <ul class="flex text-albus uppercase gap-12 text-xs">
                    <li>button 1</li>
                    <li>button 2</li>
                    <li>button 3</li>
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
                    <li>
                        <a href="#" class=" hover:underline">About</a>
                    </li>
                    <li>
                        <a href="#" class=" hover:underline">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class=" hover:underline">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>          
            </div>
            <div class="flex gap-10 mt-12 md:mt-0">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{now()->year}} <a href="https://.com/" class="hover:underline">ConnectUs NW</a>. All Rights Reserved.
                </span>
            </div>          
        </div>
    </footer>

<!-- end Footer -->





  