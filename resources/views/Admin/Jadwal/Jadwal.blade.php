@extends('Component.LayoutAdmin')

@section('content')
    
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-2">
    <div class="flex">
        <h2 class="uppercase text-xl p-2 font-bold">Data jadwal Ibadah</h2> 
    </div>
    <div class="flex gap-4">
      <div class="pt-2">
        <button data-modal-target="add-modal" data-modal-toggle="add-modal" class="font-medium text-blue-600  hover:underline">
            <svg class="w-10 h-10 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
              </svg>
        </button>
        <div id="add-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-3xl max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow-sm ">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                      <h3 class="text-xl font-semibold text-gray-900 ">
                        Tambah Data jadwal
                      </h3>
                      <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="add-modal">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-4 md:p-5">
                      <form class="space-y-4" action="{{url('admin/jadwal/tambah')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="grid grid-cols-2 gap-4 mb-2">
                          <div>
                              <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 ">Nama</label>
                              <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "  />
                          </div>
                          <div>
                            <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900 ">Jenis</label>
                            <select name="jenis" id="jenis" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  ">
                                  <option value="ibadah">Ibadah</option>
                                  <option value="acara">Acara</option>
                            </select>
                        </div>
                        </div>
                        <div>
                          <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 ">Deskripsi</label>
                          <textarea type="text" name="deskripsi" id="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "  ></textarea>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-2">
                          <div>
                              <label for="waktu" class="block mb-2 text-sm font-medium text-gray-900 ">Waktu</label>
                              <input type="datetime-local" name="waktu" id="waktu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "  />
                          </div>
                          <div id="warta-container">
                            <div class="flex">
                              <label for="warta_id" class="block mb-2 text-sm font-medium text-gray-900">Warta</label>
                              <button type="button" id="add-warta">
                                <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                              </button>
                              <button type="button" id="undo-warta" class=" hidden">
                                <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 9-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                
                              </button>
                            </div>
                            <select name="warta_id[]" id="warta_id" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" >
                              @foreach ($wartaadd as $wartaadd)
                                  <option value="{{ $wartaadd->warta }}">{{ $wartaadd->warta }}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                        <div class="grid grid-cols-2 gap-4 mb-2">
                          <div>
                              <label for="pembawa_firman" class="block mb-2 text-sm font-medium text-gray-900 ">Pembawa Firman</label>
                              <select name="pembawa_firman" id="pembawa_firman" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  ">
                                @foreach ($firman as $firman)
                                    <option value="{{ $firman->id }}">{{ $firman->nama }}</option>
                                @endforeach
                              </select>
                          </div>
                          <div>
                            <label for="lcd" class="block mb-2 text-sm font-medium text-gray-900 ">LCD</label>
                            <select name="lcd" id="lcd" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  ">
                              @foreach ($lcd as $lcd)
                                  <option value="{{ $lcd->id }}">{{ $lcd->nama }}</option>
                              @endforeach
                            </select>
                        </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-2">
                          <div>
                              <label for="keyboard" class="block mb-2 text-sm font-medium text-gray-900 ">Keyboard</label>
                              <select name="keyboard" id="keyboard" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  ">
                                @foreach ($keyboard as $keyboard)
                                    <option value="{{ $keyboard->id }}">{{ $keyboard->nama }}</option>
                                @endforeach
                              </select>
                          </div>
                          <div>
                            <label for="foto" class="block mb-2 text-sm font-medium text-gray-900">Foto</label>              
                            <input id="foto" name="foto[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none " type="file" multiple>
                          </div>
                        </div> 
                          <button type="submit" class="w-full uppercase text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                          
                      </form>
                  </div>
              </div>
          </div>
      </div>
      </div>
      <div class="pt-2">
          @if (Session::has('message'))
          <div class="flex items-center  p-2 mb-2 text-sm text-blue-800 rounded-lg bg-red-50 " >
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <p class="alert" {{Session::get('alert-class', 'alert-info')}}>{{Session::get('message')}}</p>
          </div>
          @endif
          <div class="flex gap-2">
            @error('nama')
            <div class="flex items-center p-2 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
              <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <div>
                <span class="font-medium">{{$message}}</span>
              </div>
            </div>
            @enderror
            @error('deskripsi')
            <div class="flex items-center p-2 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
              <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <div>
                <span class="font-medium">{{$message}}</span>
              </div>
            </div>
            @enderror
            @error('jenis')
            <div class="flex items-center p-2 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
              <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <div>
                <span class="font-medium">{{$message}}</span>
              </div>
            </div>
            @enderror
            @error('waktu')
            <div class="flex items-center p-2 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
              <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <div>
                <span class="font-medium">{{$message}}</span>
              </div>
            </div>
            @enderror
            @error('warta_id')
            <div class="flex items-center p-2 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
              <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <div>
                <span class="font-medium">{{$message}}</span>
              </div>
            </div>
            @enderror
            @error('pembawafirman')
            <div class="flex items-center p-2 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
              <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <div>
                <span class="font-medium">{{$message}}</span>
              </div>
            </div>
            @enderror
            @error('lcd')
            <div class="flex items-center p-2 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
              <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <div>
                <span class="font-medium">{{$message}}</span>
              </div>
            </div>
            @enderror
            @error('keyboard')
            <div class="flex items-center p-2 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
              <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <div>
                <span class="font-medium">{{$message}}</span>
              </div>
            </div>
            @enderror
            @error('foto')
            <div class="flex items-center p-2 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
              <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <div>
                <span class="font-medium">{{$message}}</span>
              </div>
            </div>
            @enderror
          </div>
      </div>
      
    </div>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
          <tr>
              <th scope="col" class="px-6 py-3">
                  ID
              </th>
              <th scope="col" class="px-6 py-3">
                  Nama
              </th>
              <th scope="col" class="px-6 py-3">
                  Deskripsi
              </th>
              <th scope="col" class="px-6 py-3">
                 Waktu
              </th>
              <th scope="col" class="px-6 py-3">
                 Warta
              </th>
              <th scope="col" class="px-6 py-3">
                 Pelaksana
              </th>
              <th scope="col" class="px-6 py-3">
                 Foto
              </th>
              <th scope="col" class="px-6 py-3">
                  Aksi
              </th>
          </tr>
      </thead>
      <tbody>
     @foreach ($jadwals as $jadwal)
          <tr class="bg-white border-b  hover:bg-gray-50 ">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                {{ $jadwal->id}}
              </th>
              <td class="px-6 py-4">
                {{$jadwal->jenis}} {{ $jadwal->nama}}
              </td>
              <td class="px-6 py-4">
                {{$jadwal->deskripsi}}
              </td>
              <td class="px-6 py-4">
                {{$jadwal->waktu}}
              </td>
              <td class="px-6 py-4">
                {{$jadwal->warta_id}}
              </td>
              <td class="px-6 py-4">
                Pendeta {{$jadwal->pembawafirman->nama}} </br>
                Proyektor {{$jadwal->lcdjemaat->nama}} </br>
                Keyboard {{$jadwal->keyboardjemaat->nama}}
              </td>
              <td class="px-6 py-4">
                    @foreach (explode(',', $jadwal->foto) as $image)
                    <img src="{{ asset('foto/' . $image) }}" width="100px">
                @endforeach
              </td>
              <td class="flex px-6 py-4">

                <a data-modal-target="ubah-modal-{{ $jadwal->id }}" data-modal-toggle="ubah-modal-{{ $jadwal->id }}" class="font-medium text-blue-600  hover:underline cursor-pointer">
                  <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>
                  </svg>
                </a>
                <div id="ubah-modal-{{ $jadwal->id }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative w-full max-w-sm max-h-full ">
                      <!-- Modal content -->
                      <div class="relative text-center bg-secondary rounded-lg shadow-md ">
                        <!-- Modal body -->
                        <div class="p-3">
                          <svg class="mx-auto mb-2 text-gray-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                         </svg>
                              <h2 class="font-semibold text-lg mb-2 text-dark">Selesaikan {{$jadwal->jenis}} <b>{{$jadwal->nama}}</b> ?</h2>    
                              <div class="flex justify-between text-white">
                                <button type="button" class="py-1 px-2 bg-red-700 font-semibold rounded-lg block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" data-modal-hide="ubah-modal-{{ $jadwal->id }}">Tidak</button>
                                <form action="{{url('admin/jadwal/'.$jadwal->id.'/selesai')}}" method="POST">
                                  @csrf
                                  @method('POST')
                                  <input type="hidden" name="status" value="selesai">
                                  <button type="submit" class="py-1 px-6 bg-primary font-semibold rounded-lg block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2">
                                    Iya
                                  </button>
                              </div>
                        </div>        
                      </div>
                  </div>
              </div>
                </form>
                <a href={{'https://wa.me/'.$info->wa.'?text=Mohon%20Untuk%20Mengikuti%20'.$jadwal->jenis.'%20'.$jadwal->nama .$jadwal->waktu}} class="font-medium text-blue-600  hover:underline" >
                  <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                    <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                  </svg>                    
                </a>
                  <a href={{url('admin/jadwal/'.$jadwal->id.'/edit')}} class="font-medium text-blue-600  hover:underline">
                    <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                  </svg>
                  </a>
                  <a data-modal-target="delete-modal-{{ $jadwal->id }}" data-modal-toggle="delete-modal-{{ $jadwal->id }}" class="font-medium text-blue-600  hover:underline cursor-pointer">
                    <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                  </svg>
                  </a>
                  <div id="delete-modal-{{ $jadwal->id }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-sm max-h-full ">
                        <!-- Modal content -->
                        <div class="relative text-center bg-secondary rounded-lg shadow-md ">
                          <!-- Modal body -->
                          <div class="p-3">
                            <svg class="mx-auto mb-2 text-gray-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                           </svg>
                                <h2 class="font-semibold text-lg mb-2 text-dark">Yakin Ingin Hapus <b>{{$jadwal->nama}}</b> ?</h2>    
                                <div class="flex justify-between text-white">
                                  <button type="button" class="py-1 px-2 bg-red-700 font-semibold rounded-lg block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" data-modal-hide="delete-modal-{{ $jadwal->id }}">Tidak</button>
                                  <a class="py-1 px-6 bg-primary font-semibold rounded-lg block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" href={{url('admin/jadwal/'.$jadwal->id.'/delete')}} >Ya</a>
                                </div>
                          </div>        
                        </div>
                    </div>
                </div>                
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
<script>
  let lastAddedWarta = null;

  document.getElementById('add-warta').addEventListener('click', function() {
      var newSelect = document.createElement('select');
      newSelect.name = 'warta_id[]';
      newSelect.className = 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full mt-2';


      @foreach ($wartasel as $warta)
          var option = document.createElement('option');
          option.value = '{{ $warta->warta }}';
          option.text = '{{ $warta->warta }}';
          newSelect.appendChild(option);
      @endforeach

      document.getElementById('warta-container').appendChild(newSelect);
      lastAddedWarta = newSelect;
      document.getElementById('undo-warta').classList.remove('hidden');
  });

  document.getElementById('undo-warta').addEventListener('click', function() {
      if (lastAddedWarta) {
          lastAddedWarta.remove();
          lastAddedWarta = null;
          this.classList.add('hidden');
      }
  });
</script>
@endsection