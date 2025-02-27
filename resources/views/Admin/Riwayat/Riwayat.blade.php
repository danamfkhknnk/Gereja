@extends('Component.LayoutAdmin')

@section('content')
@foreach ($jadwals as $jadwal)
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-2">
    <div class="flex">
        <h2 class="uppercase text-xl font-bold" >Data {{$jadwal->jenis}} {{ $jadwal->nama}} </h2> 
    </div>

    <div class="flex gap-1 justify-end">
      <div class="">
        @if (Session::has('message'))
        <div class="flex items-center  p-1 text-sm text-blue-800 rounded-lg bg-red-50 " >
          <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
          <p class="alert" {{Session::get('alert-class', 'alert-info')}}>{{Session::get('message')}}</p>
        </div>
        @endif
    </div>
    <button id="dropdownHoverButton-{{$jadwal->id}}" data-dropdown-toggle="dropdownHover-{{$jadwal->id}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-1 text-center inline-flex items-center " type="button">+Persembahan <svg class="w-2.5 h-2.5 ms-1 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg>
      </button>
      <!-- Dropdown menu -->
      <div id="dropdownHover-{{$jadwal->id}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 ">
          <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownHoverButton-{{$jadwal->id}}">
            <li>
              <a type="button" data-modal-target="add-umum-{{$jadwal->id}}" data-modal-toggle="add-umum-{{$jadwal->id}}" class="block px-4 py-2 hover:bg-gray-100 cursor-pointer">+Umum</a>
            </li>
            <li>
              <a type="button" data-modal-target="add-perpuluhan-{{$jadwal->id}}" data-modal-toggle="add-perpuluhan-{{$jadwal->id}}" class="block px-4 py-2 hover:bg-gray-100 cursor-pointer ">+Perpuluhan</a>
            </li>
            <li>
              <a type="button" data-modal-target="add-istimewa-{{$jadwal->id}}" data-modal-toggle="add-istimewa-{{$jadwal->id}}" class="block px-4 py-2 hover:bg-gray-100 cursor-pointer">+Istimewa</a>
            </li>
            <li>
              <a type="button" data-modal-target="add-syukur{{$jadwal->id}}" data-modal-toggle="add-syukur{{$jadwal->id}}" class="block px-4 py-2 hover:bg-gray-100 cursor-pointer">+Syukur</a>
            </li>
          </ul>
      </div>

        <div id="add-umum-{{$jadwal->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-sm max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow-sm ">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                      <h3 class="text-xl font-semibold text-gray-900 ">
                        Tambah Persembahan Umum
                      </h3>
                      <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="add-umum-{{$jadwal->id}}">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-4 md:p-5">
                      <form class="space-y-4" action="{{url('admin/persembahan/tambah')}}" method="POST" >
                        @csrf
                        @method('POST')
                          <div>
                            <label for="jemaat_id" class="block mb-2 text-sm font-medium text-gray-900">Jemaat</label>
                            <select name="jemaat_id" id="jemaat_id" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" >
                              @foreach ($umum as $jemaat)
                                  <option value="{{ $jemaat->id }}">{{ $jemaat->nama }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div>
                            <input name="tipe" value="umum" type="hidden">
                            <input name="jadwal_id" value="{{$jadwal->id}}" type="hidden">
                          </div>
                        <div>
                          <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 ">Jumlah</label>
                          <input type="number" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "  ></input>
                        </div>
                          <button type="submit" class="w-full uppercase text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>

        <div id="add-perpuluhan-{{$jadwal->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-sm max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow-sm ">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                      <h3 class="text-xl font-semibold text-gray-900 ">
                        Tambah Persembahan Perpuluhan
                      </h3>
                      <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="add-perpuluhan-{{$jadwal->id}}">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-4 md:p-5">
                      <form class="space-y-4" action="{{url('admin/persembahan/tambah')}}" method="POST" >
                        @csrf
                        @method('POST')
                          <div>
                            <label for="jemaat_id" class="block mb-2 text-sm font-medium text-gray-900">Jemaat</label>
                            <select name="jemaat_id" id="jemaat_id" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" >
                              @foreach ($perpuluhan as $jemaat)
                                  <option value="{{ $jemaat->id }}">{{ $jemaat->nama }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div>
                            <input name="tipe" value="perpuluhan" type="hidden">
                            <input name="jadwal_id" value="{{$jadwal->id}}" type="hidden">
                          </div>
                        <div>
                          <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 ">Jumlah</label>
                          <input type="number" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "  ></input>
                        </div>
                          <button type="submit" class="w-full uppercase text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>

        <div id="add-istimewa-{{$jadwal->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-sm max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow-sm ">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                      <h3 class="text-xl font-semibold text-gray-900 ">
                        Tambah Persembahan Istimewa
                      </h3>
                      <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="add-istimewa-{{$jadwal->id}}">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-4 md:p-5">
                      <form class="space-y-4" action="{{url('admin/persembahan/tambah')}}" method="POST" >
                        @csrf
                        @method('POST')
                          <div>
                            <label for="jemaat_id" class="block mb-2 text-sm font-medium text-gray-900">Jemaat</label>
                            <select name="jemaat_id" id="jemaat_id" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" >
                              @foreach ($istimewa as $jemaat)
                                  <option value="{{ $jemaat->id }}">{{ $jemaat->nama }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div>
                            <input name="tipe" value="istimewa" type="hidden">
                            <input name="jadwal_id" value="{{$jadwal->id}}" type="hidden">
                          </div>
                        <div>
                          <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 ">Jumlah</label>
                          <input type="number" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "  ></input>
                        </div>
                          <button type="submit" class="w-full uppercase text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>


        
        <div id="add-syukur{{$jadwal->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-sm max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow-sm ">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                      <h3 class="text-xl font-semibold text-gray-900 ">
                        Tambah Persembahan Syukur
                      </h3>
                      <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="add-syukur{{$jadwal->id}}">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-4 md:p-5">
                      <form class="space-y-4" action="{{url('admin/persembahan/tambah')}}" method="POST" >
                        @csrf
                        @method('POST')
                          <div>
                            <input name="tipe" value="syukur" type="hidden">
                            <input name="jadwal_id" value="{{$jadwal->id}}" type="hidden">
                          </div>
                        <div>
                          <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 ">Jumlah</label>
                          <input type="number" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "  ></input>
                        </div>
                          <button type="submit" class="w-full uppercase text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
          <tr>
              <th scope="col" class="px-6 py-3">
                  Deskripsi
              </th>
              <th scope="col" class="px-6 py-3">
                  Foto
              </th>
              <th scope="col" class="px-6 py-3">
                  Waktu
              </th>
              <th scope="col" class="px-6 py-3">
                  Aksi
              </th>
          </tr>
      </thead>
      <tbody>
          <tr class="bg-white border-b  hover:bg-gray-50 ">
              <td class="px-6 py-3">
                {{$jadwal->deskripsi}}
              </td>
              <td class="px-6 py-3">
                <div class="flex">
                    @foreach (explode(',', $jadwal->foto) as $image)
                    <img src="{{ asset('foto/' . $image) }}" width="100px">
                @endforeach
                </div>
              </td>
              <td class="px-6 py-3">
                {{$jadwal->waktu}}
              </td>
              <td class="flex px-6 py-3">
                  <a href={{url('admin/riwayat/'.$jadwal->id.'/edit')}} class="font-medium text-blue-600  hover:underline">
                    <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                  </svg>
                  </a> 
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
                        <div class="mb-4">
                            <strong>Waktu:</strong>
                            <p>{{$jadwal->waktu}}</p>
                        </div>
                        <div class="mb-4">
                            <strong>Pembawa Firman:</strong>
                            <p>{{$jadwal->pembawafirman->nama}}</p>
                        </div>
                        <div class="mb-4">
                            <strong>Proyektor:</strong>
                            <p>{{$jadwal->lcdjemaat->nama}}</p>
                        </div>
                        <div class="mb-4">
                            <strong>Keyboard:</strong>
                            <p>{{$jadwal->keyboardjemaat->nama}}</p>
                        </div>
                        <div class="mb-4">
                            <strong>Warta:</strong>
                            <p>{{$jadwal->warta_id}}</p>
                        </div>
                        <div class="mb-4">
                          <strong>Dokumentasi:</strong>
                          <div class="flex gap-1">
                            @foreach (explode(',', $jadwal->foto) as $image)
                                <img src="{{ asset('foto/' . $image) }}" width="100px" alt="Gambar jadwal" class="rounded-md">
                            @endforeach
                        </div>
                        </div>
                        
                    </div>
                       </div>                  
                     </div>
                 </div>
             </div>   
              </td>

          </tr>
      </tbody>
  </table>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg  mb-6">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
          <tr>
            <th scope="col" class="px-6 py-2">
              Persembahan
          </th>
          <th scope="col" class="px-6 py-2">
              Jemaat
          </th>
          <th scope="col" class="px-6 py-2">
              Jumlah
          </th>
          <th scope="col" class="px-6 py-2">
              Aksi
          </th>
          </tr>
      </thead>
      <tbody>
        @foreach ($persembahan as $item)
        @if ($item->jadwal_id == $jadwal->id)
        <tr class="bg-white border-b  hover:bg-gray-50 ">
              <td class="px-6 py-2">
                  {{$item->tipe}}
              </td>
              <td class="px-6 py-2">
                  {{$item->jemaat->nama ?? '-'}}
              </td>
              <td class="px-6 py-2">
                  Rp.{{$item->jumlah}}
              </td>
              <td class="px-6 py-2">
                <a data-modal-target="delete-modal-{{ $item->id }}" data-modal-toggle="delete-modal-{{ $item->id }}" class="font-medium text-blue-600  hover:underline cursor-pointer">
                  <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                </svg>
                </a>
                <div id="delete-modal-{{ $item->id }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative w-full max-w-sm max-h-full ">
                      <!-- Modal content -->
                      <div class="relative text-center bg-secondary rounded-lg shadow-md ">
                        <!-- Modal body -->
                        <div class="p-3">
                          <svg class="mx-auto mb-2 text-gray-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                         </svg>
                              <h2 class="font-semibold text-lg mb-2 text-dark">Yakin Ingin Hapus <b>{{$item->nama}}</b> ?</h2>    
                              <div class="flex justify-between text-white">
                                <button type="button" class="py-1 px-2 bg-red-700 font-semibold rounded-lg block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" data-modal-hide="delete-modal-{{ $item->id }}">Tidak</button>
                                <a class="py-1 px-6 bg-primary font-semibold rounded-lg block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" href={{url('admin/persembahan/'.$item->id.'/delete')}} >Ya</a>
                              </div>
                        </div>        
                      </div>
                  </div>
              </div>
              </td>
          </tr>   
          @endif
        @endforeach
      </tbody>
  </table>
</div>

@endforeach
@endsection