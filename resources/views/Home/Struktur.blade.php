<div class="pt-14 pb-10 container" id="paket">
    <section data-aos="fade-up" class="container">
      <div class="text-center mb-4 max-w-[700px] mx-auto">
        <h1 class="text-xl font-bold">Struktur Kepengurusan</h1>
      </div>
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 ">
        @foreach ($pengurus as $item)
        <div class="bg-white rounded-lg shadow-md p-4">            
            
                 

          <div class="p-2">
           <h2 class="text-xl font-bold mb-1">
{{$item->posisi}}
           </h2>
           <p class="text-gray-700 mb-2">
            Nama : {{$item->jemaat->nama}}
           </p>                            
            </div>
        </div>
        
        @endforeach
        
        </div>
    </section>
  </div>