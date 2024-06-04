@extends('layouts.guest')

@section('title', 'Home')

@section('content')

<div class="h-full w-full p-6">
    <!-- Header-->
    <div class="m-auto text-center">
        <h1 class="text-xl font-semibold txt-sekunder">Full Body Workout</h1>
        <div class="rounded-xl img-detail  overflow-hidden">
            <img src="{{asset('assets/lelah.svg')}}" class="w-full h-full object-cover" alt="">
        </div>
    </div>

    <!--Deskripsi--> 
    <div class="m-auto flex items-center deskripsi">
        <div class="flex-1 mr-4">
            <div class="rounded-xl mr-4 img-des overflow-hidden">
                <img src="{{asset('assets/lelah.svg')}}" class="w-full h-full object-cover" alt="">
            </div>
        </div>
        <div class="flex-1">
            <h1 class="text-xl font-semibold txt-sekunder">Deskripsi</h1>
            <div class="il-span"></div>
            <p class="text-l text-justify font-light ">Latihan tubuh penuh dirancang untuk melibatkan semua kelompok otot utama dalam satu sesi. Latihan ini efisien dan efektif untuk membangun kekuatan, meningkatkan daya tahan, dan meningkatkan kebugaran keseluruhan. Berikut adalah contoh latihan tubuh penuh yang bisa dilakukan dalam waktu sekitar 45-60 menit:</p>
        </div>
    </div>
</div>
<div class="w-96 m-auto">
    <h1 class="text-center text-xl font-semibold txt-sekunder">Gerakan</h1>
    <div class="il-span m-auto mb-6"></div>
</div>

<div class="color-primary  p-4 rounded-lg cursor-pointer dropdown-header">
    
    <div class="flex items-center">
        <div class="bg-yellow-400 w-8 h-8 flex items-center justify-center rounded-full text-white font-bold">1</div>
        <div class="ml-4 text-white font-semibold">Pemanasan</div>
        <div class="ml-auto">
            <svg class="w-6 h-6 text-white transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </div>
    </div>
</div>
    <div class="bg-white p-4 rounded-b-lg hidden dropdown-item mb-6">
    <div class="flex items-center mb-2">
        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
        </svg>
        <div class="ml-4 flex-1">Jumping jack</div>
        <div>1 Menit</div>
    </div>
    <div class="flex items-center mb-2">
        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
        </svg>
        <div class="ml-4 flex-1">Jumping jack</div>
        <div>1 Menit</div>
    </div>
        <div class="flex items-center">
            <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
        <div class="ml-4 flex-1">Jumping jack</div>
            <div>1 Menit</div>
        </div>
    </div>
    <div class="h-5"></div>
</div>


@endsection

@push('after-script')
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
            const dropdownHeaders = document.querySelectorAll('.dropdown-header');
            dropdownHeaders.forEach(header => {
                header.addEventListener('click', () => {
                    const content = header.nextElementSibling;
                    content.classList.toggle('hidden');
                });
            });
        });
    </script>
@endpush