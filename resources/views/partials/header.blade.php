<header class="">
  <div class="full-w bg-connectus-blue">
    <div class="container flex flex-row justify-end">
      <small class="p-1 text-albus font-medium">
        <i class="fa-brands fa-whatsapp"></i>
        <a href="tel" class="ml-2">(949) 456-1235</a>
      </small>
    </div>
  </div>
  <!-- NAV BAR -->
  <nav class="container flex items-center py-4">
    <div class="py-1">
      <a href="{{ route('home.index') }}">
        <img src="{{URL('/images/headerlogo1.svg')}}" alt="Connectus logo" style="width: 85%">
      </a>
    </div>
    <ul class="hidden sm:flex flex-1 justify-end items-center gap-12 text-s">
      <li class="cursor-pointer">
        <a href="{{ route('home.about') }}" class="font-bold hover:underline font-Manrope">About Us</a>
      </li>
      <li class="cursor-pointer">
        <a href="{{ route('home.contact') }}" class="font-bold hover:underline font-Manrope">Contact Us</a>
      </li>
      <li class="cursor-pointer">
        <a href="{{ route('home.about') }}" class="font-bold hover:underline font-Manrope">Pricing</a>
      </li>
      <button type="button" class="btn-duo rounded-md px-7 py-3 ">Book a demo</button>
    </ul>
    <div class="flex sm:hidden flex-1 justify-end">
      <i class="fas fa-bars text-2xl"></i>
    </div>
  </nav>

  <!-- end NAV BAR -->
</header>


