@extends('Component.LayoutAdmin')

@section('content')
@foreach ($info as $info)
<form class="mx-auto pl-2"  method="POST" action="{{url('admin/informasi/'.$info->id.'/edit')}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-2">
    <div class="flex">
        <h2 class="uppercase text-xl  font-bold">Data Informasi Gereja</h2> 
    </div>
    <div class="flex gap-4">
      <div class="pt-2">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
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
      </div>
      
    </div>
</div>
    <div class="relative z-0 w-full mb-5 group">
      <label for="sejarah" class="block mb-2 text-sm font-medium text-gray-900">Sejarah</label>
      <textarea type="text"  name="sejarah" id="sejarah" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 ">{{$info->sejarah}}</textarea>
      @error('sejarah')
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
    <div class="relative z-0 w-full mb-5 group">
      <label for="visi" class="block mb-2 text-sm font-medium text-gray-900">Visi</label>
      <textarea type="text" name="visi" id="visi" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">{{$info->visi}}</textarea>
      @error('visi')
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
    <div class="relative z-0 w-full mb-5 group">
      <label for="misi" class="block mb-2 text-sm font-medium text-gray-900">Misi</label>
      <textarea type="text"   name="misi" id="misi" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">{{$info->misi}}</textarea>
      @error('misi')
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
    <div class="grid grid-cols-2 gap-4 mb-2">
    <div class="relative z-0 w-full mb-5 group">
      <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
      <input type="text" value="{{$info->alamat}}"  name="alamat" id="alamt" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
      @error('alamat')
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

    <div class="relative z-0 w-full mb-5 group">
      <label for="wa" class="block mb-2 text-sm font-medium text-gray-900">WA</label>
      <input type="text" value="{{$info->wa}}"  name="wa" id="wa" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
      @error('wa')
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
    <div class="grid grid-cols-2 gap-4 mb-2">
    <div class="relative z-0 w-full mb-5 group">
      <label for="ig" class="block mb-2 text-sm font-medium text-gray-900">IG</label>
      <input type="text" value="{{$info->ig}}"  name="ig" id="ig" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
      @error('ig')
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


    <div class="relative z-0 w-full mb-5 group">
      <label for="fb" class="block mb-2 text-sm font-medium text-gray-900">fb</label>
      <input type="text" value="{{$info->fb}}"  name="fb" id="fb" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
      @error('fb')
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

<div class="grid grid-cols-2 gap-4 mb-2">
    <div class="relative z-0 w-full mb-5 group">
        <label for="galeri" class="block mb-2 text-sm font-medium text-gray-900">Galeri</label>
        <input id="galeri" name="galeri" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none " type="file" multiple>
        @error('galeri')
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
    <div class="relative z-0 w-full mb-5 group">
        <label for="logo" class="block mb-2 text-sm font-medium text-gray-900">Logo</label>
        <input id="logo" name="logo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none " type="file" multiple>
        @error('logo')
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
</form>
@endforeach
@endsection