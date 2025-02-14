<header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-0 py-2 fixed top-0 right-0 w-full z-50">
    <div class="flex-1 flex justify-between items-center">
      <a href="#home" class="font-bold uppercase text-lg text-primary block">
        gereja
    </a>
  </div>
    <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
  <input class="hidden" type="checkbox" id="menu-toggle" />
  
  <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
    <nav>
      <ul class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-primary/80" href="#tentang">Tentang</a></li>
        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-primary/80" href="#kamar">Kamar</a></li>
        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-primary/80" href="#testi">Testimoni</a></li>
        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-primary/80 lg:mb-0 mb-2" href="#kontak">Kontak</a></li>
        <li class="text-center text-secondary"><a class="py-1 px-2 bg-primary/80 font-semibold rounded-lg block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" href="{{ url('/login')}}">Login</a></li>
      </ul>
    </nav>
  </div>
  </header>
  