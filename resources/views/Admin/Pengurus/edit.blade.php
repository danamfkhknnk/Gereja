@extends('Component.LayoutAdmin')

@section('content')
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between">
  <div class="flex">
      <h2 class="uppercase text-xl p-2 font-bold">Update Data Pengurus</h2>    
  </div>  
</div>
<form class="space-y-4 mx-auto pl-2" action="{{url('admin/pengurus/'.$pengurus->id.'/edit')}}" method="POST">
  @csrf
  @method('POST')
  <div>
    <label for="jemaat_id" class="block mb-2 text-sm font-medium text-gray-900 ">Nama</label>
    <select name="jemaat_id" id="jemaat_id" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  ">
      <option value="" >-</option>
      @foreach($jemaat as $jemaat)
      <option value="{{ $jemaat->id }}" {{ $jemaat->id == $pengurus->jemaat_id ? 'selected' : '' }}>{{ $jemaat->nama }}</option>
      @endforeach
    </select>
    @error('jemaat_id')
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
<div>
    <label for="posisi" class="block mb-2 text-sm font-medium text-gray-900 ">Posisi</label>
    <input disabled type="text" name="posisi" id="posisi" value="{{$pengurus->posisi}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "  />
    @error('posisi')
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
    <button type="submit" class=" uppercase text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
</form>

@endsection