<div class="pt-14 pb-10 container" id="paket">
    <section data-aos="fade-up" class="container">
      <div class="text-center mb-4 max-w-[700px] mx-auto">
        <h1 class="text-xl font-bold">Kegiatan Gereja</h1>
      </div>
      <div class="grid grid-cols-2 lg:grid-cols-3 gap-6 ">
        <div class="bg-white rounded-lg shadow-md p-4">            
            <img class="w-full h-20 object-cover rounded-t-lg" height="200" src="{{ asset('gambarkamar/') }}" width="300"/>
          <div class="p-2 md:flex justify-between">
           <h2 class="text-lg font-bold ">
            Pernikahan
           </h2>      
           <button type="button" data-modal-target="large-modal-1" data-modal-toggle="large-modal-1" class="py-1 px-2 text-secondary bg-primary/80 font-semibold rounded-lg block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 ">
            Detail
            </button>                   
            </div>
            <div id="large-modal-1" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-xl max-h-full ">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-md ">
                      <!-- Modal header -->
                      <div class="flex items-center justify-between p-4 border-b rounded-t ">
                        <h2 class="text-lg font-bold text-primary ">
                          Pernikahan
                        </h2>
                        <button type="button" class="text-gray-500 hover:text-gray-700 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center" data-modal-hide="large-modal-1">
                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <div class="p-3">
                            <div class="grid grid-cols-3  gap-2">
                                <img src="{{ asset('gambarkamar/') }}" alt="Gambar kamar"  class=" rounded-md">
                            </div>
                            <h2 class="font-semibold text-lg">Gereja, Tanggal</h2>  
                            <div class="flex flex-col-4 gap-2 justify-between">
                              <div>
                                <p class="text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio sapiente obcaecati laborum quibusdam nam beatae velit nostrum, praesentium qui, rem voluptatibus rerum sint magnam, ipsum facilis neque. Magnam, sequi officia.</p>
                              </div>
                            </div>
                            
                      </div>        
                    </div>
                </div>
            </div>
        </div>
        
      </div>
    </section>
  </div>