 
 @extends('layouts.app')

 @section('title', 'My Servivce')
 
 @section('content')
 
 @if (count($aktifitas))
 <main class="h-full overflow-y-auto">
    <div class="container mx-auto">
        <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
            <div class="col-span-8">
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    My Services
                </h2>
                <p class="text-sm text-gray-400">
                    {{count($aktifitas)}} Total Services
                </p>
            </div>
            <div class="col-span-4 lg:text-right">
                <div class="relative mt-0 md:mt-6">
                    <a href="{{route('aktifitas.tambah.f')}}" class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button">
                        + Add Service
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="container px-6 mx-auto mt-5">
        <div class="grid gap-5 md:grid-cols-12">
            <main class="col-span-12 p-4 md:pt-0">
                <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                    <table class="w-full" aria-label="Table">
                        <thead>
                            <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                <th class="py-4" scope="">Aktifitas Details</th>
                                <th class="py-4" scope="">Nama</th>
                                <th class="py-4" scope="">Gerakan</th>
                                <th class="py-4" scope="">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                             @forelse ($aktifitas as $key => $item)
                            <tr class="text-gray-700 border-b">
                                <td class="w-2/6 px-1 py-5">
                                    <div class="flex items-center text-sm">
                                        {{-- <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                            @if($item->gambar)
                                            <img src="{{ url(Storage::url($item->gambar)) }}" alt="{{ $item->nama }}" width="100">
                                        @else
                                            Tidak ada gambar
                                        @endif --}}
                                            {{-- @if (isset($item->gambar->gambar) != null)
                                                            
                                                        @else
                                                            <svg class="object-cover w-full h-full rounded text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                            </svg>
                                                        @endif --}}
                                                        <img class="object-cover w-full h-full rounded" src="{{ asset('fotoAktifitas/' .$item->gambar) }}" alt="thumbnail" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <a href="#" class="font-medium text-black">
                                                Design WordPress <br>E-Commerce Modules
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-1 py-5 text-sm">
                                    {{$item->nama}}
                                </td>
                                <td class="px-1 py-5 text-sm">
                                    @if (isset($item->gerakan[1]->nama) != null)
                                    <h1>{{$item->gerakan[1]->nama}}</h1>
                                @else
                                
                                <p>tidak ada</p>
                                @endif
                              
                                </td>
                               
                                <td class="px-1 py-5 text-sm">
                                    <a href="#" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-email">
                                        Edit Service
                                    </a>
                                </td>
                            </tr>
                            @empty

                            @endforelse
                           
                        
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </section>
</main>  
  @else 
     
 <div class="flex h-screen">
    <div class="m-auto text-center">
        <img src="/images/empty-illustration.svg" alt="" class="w-48 mx-auto">
        <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
            There is No Requests Yet
        </h2>
        <p class="text-sm text-gray-400">
            It seems that you haven’t provided any Aktifitas. <br>
            Let’s create your first service!
        </p>

        <div class="relative mt-0 md:mt-6">
            <a href="{{route('aktifitas.tambah.f')}}">
            <button class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button">
                + Add Services
            </button>
            </a>
        </div>
    </div>
</div>
 @endif 

       
@endsection