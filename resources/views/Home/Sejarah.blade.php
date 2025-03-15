<div class="pt-14 container">
    <section data-aos="fade-up" class="container ">
      <div class="text-center mb-4 max-w-[700px] mx-auto">
      <h1 class="pb-2 text-xl text-center font-bold">Sejarah Gereja</h1>
      <p class="pt-1 pb-2 text-center text-sm">
        Temukan kisah perjalanan dan perkembangan gereja kami dari masa ke masa. Ketahui bagaimana iman, dedikasi, dan perjuangan para pendahulu membangun komunitas ini hingga menjadi seperti sekarang!
      </p>
      </div>
      <div class="flex gap-2 justify-center flex-col text-center pb-8">
        <h1 class="capitalize text-justify">
         "{{$info->sejarah}}"
        </h1>
      </div>
      <div class="grid grid-cols-2 gap-6 ">
        <div class="bg-white rounded-lg shadow-md p-4">            
          <div class=" text-center">
           <h2 class="text-xl  font-bold ">
            <button data-popover-target="visi" type="button">Detail Visi</button>
           </h2>
          <div data-popover id="visi" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-md  transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 ">
              <div class="px-3 py-2 capitalize text-justify">
                  <p> {{$info->visi}} </p>
              </div>
              <div data-popper-arrow></div>
          </div>                           
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4">            
          <div class=" text-center">
            <h2 class="text-xl  font-bold ">
              <button data-popover-target="misi" type="button">Detail Misi</button>
             </h2>
            <div data-popover id="misi" role="tooltip" class="absolute z-10 invisible inline-block w-80 text-md  transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 ">
                <div class="px-3 py-2 capitalize text-justify">
                    <p> {{$info->misi}}</p>
                </div>
                <div data-popper-arrow></div>
            </div>                            
          </div>
        </div>
        </div>
    </section>
  </div>