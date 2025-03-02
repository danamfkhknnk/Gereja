<div class="pt-14 pb-10 container" id="paket">
    <section data-aos="fade-up" class="container">
      <div class="text-center mb-4 max-w-[700px] mx-auto">
        <h1 class="text-xl font-bold">Jadwal Kegiatan</h1>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 ">
        @foreach ($jadwals as $jadwal)
        <div class="bg-white rounded-lg shadow-md p-4"> 
            <h2 class="text-xl font-bold mb-2 capitalize">
                {{$jadwal->jenis.' '.$jadwal->nama}}
            </h2>
            <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('foto/' . $jadwal->foto) }}"/>
            <p class="text-md mb-2 mt-2 font-semibold">
              {{$jadwal->deskripsi}}
             </p>      
          <div class="flex justify-between">
           <p class="text-gray-700 mb-2 mt-2 font-semibold">
            Waktu :  {{$jadwal->waktu}}
           </p>      
           <button data-modal-target="large-modal-{{ $jadwal->id }}" data-modal-toggle="large-modal-{{ $jadwal->id }}" type="button" >
            <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z" clip-rule="evenodd"/>
            </svg>
        </button>
        <div id="large-modal-{{ $jadwal->id }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
         <div class="relative w-full max-w-xl max-h-full">
             <!-- Modal content -->
             <div class="relative bg-white rounded-lg shadow-md ">
               <!-- Modal header -->
               <div class="flex items-center justify-between p-4 border-b rounded-t ">
                 <h2 class="text-lg font-semibold text-gray-800 uppercase ">
                   Detail {{$jadwal->jenis}} {{$jadwal->nama}}
                 </h2>
                 <button type="button" class="text-gray-500 hover:text-gray-700 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center" data-modal-hide="large-modal-{{ $jadwal->id }}">
                   <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                   </svg>
                   <span class="sr-only">Close modal</span>
                 </button>
               </div>
               <div class="p-4">
               
                <div class="mb-4">
                    <strong>Deskripsi:</strong>
                    <p>{{$jadwal->deskripsi}}</p>
                </div>
                <div class="grid grid-cols-2">
                <div class="mb-4">
                    <strong>Waktu:</strong>
                    <p>{{$jadwal->waktu}}</p>
                </div>
                <div class="mb-4">
                    <strong>Pembawa Firman:</strong>
                    <p>{{$jadwal->pembawafirman->nama}}</p>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="mb-2">
                    <strong>Proyektor:</strong>
                    <p>{{$jadwal->lcdjemaat->nama}}</p>
                </div>
                <div class="mb-2">
                    <strong>Keyboard:</strong>
                    <p>{{$jadwal->keyboardjemaat->nama}}</p>
                </div>
              </div>
                <div class="mb-2">
                    <strong>Warta:</strong>
                    <p>{{$jadwal->warta_id}}</p>
                </div>
                <div class="mb-2">
                  <strong>Dokumentasi:</strong>
                  <div class="flex gap-1">
                    @foreach (explode(',', $jadwal->foto) as $image)
                        <img src="{{ asset('foto/' . $image) }}" alt="Gambar jadwal" class="rounded-md h-20">
                    @endforeach
                </div>
                </div>
                
            </div>
               </div>                  
             </div>
         </div>
        </div> 
        </div>        
        @endforeach

      </div>
    </section>
  </div>