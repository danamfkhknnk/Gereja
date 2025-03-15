@extends('Component.LayoutAdmin')
@section('content')
       <div class="grid lg:grid-cols-4 grid-cols-2 gap-4 mb-4">
          <div class="bg-white shadow-md rounded-lg p-2">
            <h2 class="text-xl font-semibold">Jumlah Jemaat</h2>
            
            <p class="text-md font-sm">{{$jemaat}} Jemaat </p>
          </div>
          <div class="bg-white shadow-md rounded-lg p-2">
            <h2 class="text-xl font-semibold">Jumlah Kas</h2>
            <p class="text-md font-sm ">RP.{{$total}}</p>
          </div>
          <div class="bg-white shadow-md rounded-lg p-2">
            <h2 class="text-xl font-semibold">Jumlah Warta</h2>
                <p class="text-md font-sm">{{$warta}}</p>
          </div>
          <div class="bg-white shadow-md rounded-lg p-2">
            <h2 class="text-xl font-semibold">Jumlah Kegiatan</h2>
            <p class="text-md font-sm ">{{$kegiatan}}</p>
          </div>
       </div>
       </div>
@endsection