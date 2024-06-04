@extends('layouts.guest')

@section('title', 'Home')

@section('content')
<div class="h-auto w-auto container p-6 flex">
    <div class="flex-none mr-4">
        

<h1 class="text-3xl font-semibold ">Hasilnya dari rekomendasi</h1>
<p class="text-2xl font-light">Jika tidak sesuai bisa cari ulang</p>
        <button class="btn-small bg-sekunder">Cari ulang
        </button>
    </div>
    <div class="flex-1 flex">
        <div class="card-new">
   
            <div class="img-card rounded-md overflow-hidden mb-4">
                <img src="{{asset('assets/lelah.svg')}}" alt="" class="w-full h-full object-cover">
                
            </div>
            <div class="flex justify-between items-center">
                <div class="mb-2">
                    <h1 class="text-base font-semibold ">Full bodyworkout</h1>
                    <p class="text-sm font-light">Ini bagian deskripsi</p>
                </div>
                <div class="text-center mb-2">
                    <h1 class="text-sm font-light ">2000</h1>
                    <p class="text-base font-semibold text-yellow-400">Kalori</p>
                </div>
                
            </div>
            <h1>120 Menit</h1>
            <button class="btn-small bg-sekunder">
        Latian
            </button>
        </div>
        <div class="card-new">
   
            <div class="img-card rounded-md overflow-hidden mb-4">
                <img src="{{asset('assets/lelah.svg')}}" alt="" class="w-full h-full object-cover">
                
            </div>
            <div class="flex justify-between items-center">
                <div class="mb-2">
                    <h1 class="text-base font-semibold ">Full bodyworkout</h1>
                    <p class="text-sm font-light">Ini bagian deskripsi</p>
                </div>
                <div class="text-center mb-2">
                    <h1 class="text-sm font-light ">2000</h1>
                    <p class="text-base font-semibold text-yellow-400">Kalori</p>
                </div>
                
            </div>
            <h1>120 Menit</h1>
            <button class="btn-small bg-sekunder">
        Latian
            </button>
        </div>
    </div>


</div>


@endsection