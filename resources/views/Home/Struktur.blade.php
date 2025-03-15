<div class="pt-14 pb-10 container" id="paket">
    <section data-aos="fade-up" class="container">
      <div class="text-center mb-4 max-w-[700px] mx-auto">
        <h1 class="text-xl font-bold">Struktur Kepengurusan</h1>
        <p class="pt-2 text-center text-sm">
          Kenali para pengurus yang berdedikasi dalam melayani dan membimbing jemaat. Mereka siap membantu dan memastikan setiap kegiatan berjalan dengan baik demi kesejahteraan bersama!
        </p>
      </div>
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 ">
        @foreach ($pengurus as $item)
        <div class="bg-white rounded-lg shadow-md p-4"> 
          
           <h2 class="text-xl font-bold ">
              {{$item->posisi}}
           </h2>
           <p class="text-gray-700 mb-2">
            Nama : {{$item->jemaat->nama}}
           </p>                            
          
        </div>
        
        @endforeach
        
        </div>
    </section>
  </div>