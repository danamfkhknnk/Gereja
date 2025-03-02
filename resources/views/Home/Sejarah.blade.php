<div class="pt-14 container">
    <section data-aos="fade-up" class="container ">
      <h1 class="pb-2 text-xl text-center font-bold">Sejarah Gereja</h1>
      <div class="flex gap-2 justify-center flex-col text-justify pb-8">
        <h1>
         {{$info->sejarah}}
        </h1>
      </div>
      <div class="grid grid-cols-1 gap-6 ">
        {{-- <div class="bg-white rounded-lg shadow-md p-4">            
          <div class="p-4 text-center">
           <h2 class="text-xl  font-bold mb-2">
            Visi
           </h2>
           <p class="text-gray-700 mb-2 text-justify">
            {{$info->visi}}
           </p>                            
            </div>
        </div> --}}
        <div class="bg-white rounded-lg shadow-md p-4">            
          <div class="p-4 text-center">
           <h2 class="text-xl  font-bold mb-2">
            Misi
           </h2>
           <p class="text-gray-700 mb-2 text-justify">
            {{$info->misi}}
           </p>                            
          </div>
        </div>
        </div>
    </section>
  </div>