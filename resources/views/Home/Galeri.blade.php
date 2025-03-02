<body class="bg-gray-100 flex items-center justify-center min-h-screen ">
    <div class="relative w-full h-screen ">
     <div class="flex flex-col absolute inset-0 h-screen justify-center text-center items-center text-white z-20">
      <div class="w-full bg-primary/30 shadow-sm p-5" data-aos="fade-up">
        <p class="lg:text-4xl text-md  md:text-3xl font-extrabold uppercase">
          GITJ PUNCEL
        </p>
        <p class=" text-md md:text-3xl uppercase font-mono">
          "Gereja Injili di Tanah Jawa"
        </p>
        <p class=" text-md md:text-xl text-center uppercase font-mono">
          "{{$info->visi}}"
        </p>
      </div>
     </div>
     <div class="relative w-full h-full z-[-99] " data-carousel="slide" id="testimonialCarousel">
      <div class="relative h-full overflow-hidden rounded-lg ">
        @foreach (explode(',', $info->galeri) as $image)
       <div class="hidden duration-700 ease-in-out h-full " data-carousel-item>
        <img src="{{ asset('informasi/'. $image)}}" class="absolute right-0 top-0 w-full object-cover h-full " alt="">
       </div> 
       @endforeach
      </div>
    </div>
    </div>
   </body>
  
  
  