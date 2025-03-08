<div class="pt-14 container">
    <section data-aos="fade-up" class="container ">
      <h1 class="pb-2 text-xl text-center font-bold">Visi Gereja</h1>
      <div class="flex gap-2 justify-center flex-col text-center pb-8">
        <h1 class="capitalize">
         "{{$info->visi}}"
        </h1>
      </div>
      <div class="grid grid-cols-2 gap-6 ">
        <div class="bg-white rounded-lg shadow-md p-4">            
          <div class="p-4 text-center">
           <h2 class="text-xl  font-bold mb-2">
            Sejarah Singkat
           </h2>
           <p class="text-gray-700 mb-2 text-justify">
            {{$info->sejarah}}
           </p>                            
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4">            
          <div class="p-4 text-center">
           <h2 class="text-xl  font-bold mb-2">
            Misi Gereja
           </h2>
           <p class="text-gray-700 mb-2 text-justify">
            {{$info->misi}}
           </p>                            
          </div>
        </div>
        </div>
    </section>
  </div>