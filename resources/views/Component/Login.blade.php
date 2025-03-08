<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>GITJ PUNCEL</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="relative w-full h-screen">
     <div class="absolute inset-0 flex backdrop-blur-sm flex-col justify-center text-center items-center  z-20">
        <form class="md:w-1/3 max-w-sm bg-secondary/75 p-10 rounded-xl shadow-lg" action="{{url('/login')}}" method="POST">
            @csrf   
            <div class="text-center ">
              <h3 class="mr-1 mb-2 font-bold text-2xl text-dark uppercase">LOGIN ADMIN</h3>
              @if (Session::has('message'))
              <div class="flex items-center p-2 mb-2 text-sm text-blue-800 rounded-lg bg-red-50 " >
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <p class="alert" {{Session::get('alert-class', 'alert-info')}}>{{Session::get('message')}}</p>
              </div>
              @endif
              @if ($errors->any())
              <div class="flex items-center p-2 mb-2 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
                @foreach ($errors->all() as $item)
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                  <span class="font-medium">{{$item}}</span>
                </div>
                @endforeach
              </div>
              @endif
            </div>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mb-2 " type="text" placeholder="Nama" name="name" value="{{ old('name')}}" autoFocus />
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " type="password" placeholder="Password" name="password" />
                        
            <div class="text-center">
              <button class="mt-2 bg-primary hover:bg-primary/50 px-6 py-2 text-white uppercase rounded text-xs tracking-wider" name="submit" type="submit">
                Login
              </button>
              <a class="mt-2 bg-red-700 hover:bg-primary/50 px-6 py-2 text-white uppercase rounded text-xs tracking-wider" href="{{url('/')}}">
               Kembali
              </a>
            </div> 
          </form>
     </div>
     <div class="relative w-full h-full z-[-99]" data-carousel="slide" id="testimonialCarousel">
      <div class="relative h-full overflow-hidden rounded-lg ">
        @foreach (explode(',', $info->galeri) as $image)
       <div class="hidden duration-700 ease-in-out h-full" data-carousel-item>
        <img src="{{ asset('informasi/'.$image)}}" class="absolute right-0 top-0 w-full object-cover h-full " alt="">
       </div>
       @endforeach
      </div>
    </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>