@extends('Component.LayoutAdmin')

@section('content')
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between">
  <div class="flex">
      <h2 class="uppercase text-xl p-2 font-bold">Update Data Jadwal {{$jadwal->jenis}}</h2>   
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
<form class="space-y-4 mx-auto pl-2" action="{{url('admin/jadwal/'.$jadwal->id.'/edit')}}" method="POST"  enctype="multipart/form-data">
  @csrf
  @method('POST')
  <div class="grid grid-cols-2 gap-4 mb-2">
    <div>
        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 ">Nama</label>
        <input type="text" name="nama" value="{{$jadwal->nama}}" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "  />
    </div>
    <div>
      <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900 ">Jenis</label>
      <select name="jenis" id="jenis" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  ">
            <option value="ibadah">Ibadah</option>
            <option value="kegiatan">Kegiatan</option>
      </select>
  </div>
  </div>
  <div>
    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 ">Deskripsi</label>
    <textarea type="text"  name="deskripsi" id="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "> {{$jadwal->deskripsi}}</textarea>
  </div>
  <div class="grid grid-cols-2 gap-4 mb-2">
    
    <div>
        <label for="waktu" class="block mb-2 text-sm font-medium text-gray-900 ">Waktu</label>
        <input type="datetime-local" name="waktu" id="waktu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "  />
    </div>
    <div>
      <label for="warta_id" class="block mb-2 text-sm font-medium text-gray-900 ">Warta</label>
      <select name="warta_id" id="warta_id" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  ">
        @foreach ($wartaadd as $wartaadd)
            <option value="{{ $wartaadd->id }}">{{ $wartaadd->warta }}</option>
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
      <label for="foto" class="block mb-2 text-sm font-medium text-gray-900">Foto</label>
      <div class="pb-2">
        @if ($jadwal->foto)
          <div class="grid lg:grid-cols-6 md:grid-cols-2">
          @foreach (explode(',', $jadwal->foto) as $image)
              <img src="{{ asset('foto/' . $image) }}"  width="100px">
          @endforeach
      </div>
        @endif
      </div>
      <input id="foto" name="foto[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none " type="file" multiple>
    </div>
    <div>
        <label for="keyboard" class="block mb-2 text-sm font-medium text-gray-900 ">Keyboard</label>
        <select name="keyboard" id="keyboard" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  ">
          @foreach ($keyboard as $keyboard)
              <option value="{{ $keyboard->id }}">{{ $keyboard->nama }}</option>
          @endforeach
        </select>
    </div>
    
  </div> 
    <button type="submit" class=" uppercase text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
</form>

@endsection