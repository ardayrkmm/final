@extends('layouts.guest')

@section('title', 'Home')

@section('content')
<div class="h-auto">

<div class="color-primary jumbroton  w-full flex content-center p-6 relative mb-20" >
<div class="grow-0">
<h1 class="txt-jumbroton text-white font-semibold">Ayo <span class="txt-primary">olahraga</span>,<br/> Agar selalu <span class="txt-primary">Sehat</span></h1>
<p class="text-white text-xl">Kami membantu kamu dalam berolahraga yang baik</p>
<button class="bg-sekunder btn-new1 mt-3 txt-sekunder font-semibold">
Rekomendasi
</button>
</div>
<div class="grow-1 flex  justify-end ">
    <img src="{{asset('assets/il_1.svg')}}" style="width: 400px; position: relative; top: -140px; z-index: 0; right: -290px; " alt="">
    <div class="il-jumbroton color-primary absolute ">
<img src="{{asset('assets/run.png')}}" style="width: 800px; position: relative; top: 40px" alt="">
    </div>
    <img src="{{asset('assets/il_2.svg')}}" style="width: 60px; position: relative; top: 100px; right: 160px; z-index: 0;" alt="">
    </div>
</div>
<div class="h-20">

</div>
<div class="flex w-full p-6 mt-20 h-auto items-center">
    
    <div class="flex-1">
    <img src="{{asset('assets/about.svg')}}"  style="width: 750px; height: 600px;" alt="">
    </div>
    <div class="flex-1 text-justify">
    <h1 class="text-3xl font-semibold txt-sekunder">FitSolusi</h1>
    <p class="text-justify">FitSolusi adalah platform olahraga yang menyediakan solusi terbaik untuk mencapai kesehatan dan kebugaran optimal Anda. Dengan FitSolusi, Anda akan mendapatkan rekomendasi aktivitas olahraga yang disesuaikan dengan kondisi kesehatan dan tujuan fitness Anda. Dibangun dengan teknologi canggih dan didukung oleh para ahli kebugaran, FitSolusi membantu Anda menemukan aktivitas yang tepat untuk meningkatkan kesehatan jasmani dan mental Anda. Mulai sekarang dan temukan solusi terbaik untuk hidup sehat dan aktif bersama FitSolusi!</p>
    </div>
    </div>
    <div class="h-20">

    </div>
    </div>

@endsection