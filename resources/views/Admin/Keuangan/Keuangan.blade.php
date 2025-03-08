@extends('Component.LayoutAdmin')

@section('content')
    
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-2">
    <div class="">
        <h2 class="uppercase text-xl p-2 font-bold">Data Keuangan Gereja | Total Kas {{$jumlahMasuk}}</h2> 
    </div>
    <div class="flex flex-row gap-1 ">
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
          @error('jumlah')
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
          @error('keterangan')
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
          @error('tanggal')
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
        <form action="{{url('admin/keuangan')}}" method="GET" class="flex ">
          @csrf
          <input type="month" value="{{ request('cari') }}" name="cari" id="cari" class="block   text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 " >
          <button type="submit" class="text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none px-2 focus:ring-blue-300 font-medium rounded-lg text-sm text-center ">Cari</button>
          <a href="{{ route('admin.keuangan.pdf', ['cari' => request('cari')]) }}"  class="font-medium text-blue-600 pt-2  hover:underline"><svg class="w-10 h-10 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M13 11.15V4a1 1 0 1 0-2 0v7.15L8.78 8.374a1 1 0 1 0-1.56 1.25l4 5a1 1 0 0 0 1.56 0l4-5a1 1 0 1 0-1.56-1.25L13 11.15Z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M9.657 15.874 7.358 13H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.358l-2.3 2.874a3 3 0 0 1-4.685 0ZM17 16a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z" clip-rule="evenodd"/>
          </svg>
          </a>    
        </form>
      <div class="pt-2">
        <button data-modal-target="adduser-modal" data-modal-toggle="adduser-modal" class="font-medium text-blue-600  hover:underline">
            <svg class="w-10 h-10 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
              </svg>
        </button>
        <div id="adduser-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-md max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow-sm ">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                      <h3 class="text-xl font-semibold text-gray-900 ">
                        Tambah Data Pengeluaran
                      </h3>
                      <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="adduser-modal">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-4 md:p-5">
                      <form class="space-y-4" action="{{url('admin/keuangan/keluar')}}" method="POST">
                        @csrf
                        @method('POST')
                          <div>
                              <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 ">Jumlah</label>
                              <input type="number" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "  />
                          </div>
                          <div>
                              <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 ">Keterangan</label>
                              <input type="text" name="keterangan" id="keterangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "  />
                              <input type="hidden" name="status" value="keluar" />
                          </div>
                          <div>
                              <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 ">Tanggal</label>
                              <input type="datetime-local" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "  />
                          </div>
                          <button type="submit" class="w-full uppercase text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-primary dark:focus:ring-blue-800">Simpan</button>
                      </form>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
          <tr>
              <th scope="col" class="px-6 py-2">
                  Id
              </th>
              <th scope="col" class="px-6 py-2">
                  Tipe
              </th>
              <th scope="col" class="px-6 py-2">
                  Jumlah
              </th>
              <th scope="col" class="px-6 py-2">
                  Keterangan
              </th>
              <th scope="col" class="px-6 py-2">
                  Tanggal
              </th>
              <th scope="col" class="px-6 py-2">
                  Aksi
              </th>
          </tr>
      </thead>
      <tbody>
     @foreach ($keuangan as $item)
          <tr class="bg-white border-b  hover:bg-gray-50 ">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                {{$item->id}}
              </th>
              <td class="px-6 py-3">
                 {{$item->status}}
              </td>
              <td class="px-6 py-3">
                 {{$item->jumlah}}
              </td>
              <td class="px-6 py-3">
                @if($item->status == 'masuk')
                  Persembahan {{$item->keterangan}} {{$item->jadwal->jenis ?? ''}} {{$item->jadwal->nama ?? ''}}
                @else
                {{$item->keterangan}}
                @endif
              </td>
              <td class="px-6 py-3">
                {{$item->tanggal}}
              </td>
              <td class="flex px-6 py-3">
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
                                <h2 class="font-semibold text-lg mb-2 text-dark">Yakin Ingin Hapus <b>{{$item->keterangan}}</b></h2>    
                                <div class="flex justify-between text-white">
                                  <button type="button" class="py-1 px-2 bg-red-700 font-semibold rounded-lg block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" data-modal-hide="delete-modal-{{ $item->id }}">Tidak</button>
                                  @if($item->status == 'masuk')
                                  <a class="py-1 px-6 bg-primary font-semibold rounded-lg block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" href={{url('admin/keuangan/'.$item->persembahan->id.'/delete')}} >Ya</a>
                                  @else
                                  <a class="py-1 px-6 bg-primary font-semibold rounded-lg block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" href={{url('admin/keuangan/'.$item->id.'/delete')}} >Ya</a>
                                  @endif
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
@endsection