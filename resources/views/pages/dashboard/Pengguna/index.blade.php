 
 @extends('layouts.app')

 @section('title', 'My Servivce')
 
 @section('content')
 
 @if (count($pengguna))
 <main class="h-full overflow-y-auto">
    <div class="container mx-auto">
        <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
            <div class="col-span-8">
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    Daftar Pengguna
                </h2>
                <p class="text-sm text-gray-400">
                    {{count($pengguna)}} Total Pengguna
                </p>
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
                                {{-- <th class="py-4" scope="">Data Pengguna</th> --}}
                                <th class="py-4" scope="">Role</th>
                                <th class="py-4" scope="">Nama</th>
                                <th class="py-4" scope="">Email</th>
                                <th class="py-4" scope="">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($pengguna as $t)
                            <tr class="text-gray-700 border-b">
                                {{-- <td class="w-2/6 px-1 py-5">
                                    <div class="flex items-center text-sm">
                                        {{-- <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded" src="{{url('https://randomuser.me/api/portraits/men/3.jpg')}}" alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div> --}}
                                        {{-- <div>
                                            <a href="#" class="font-medium text-black">
                                                {{$it->role}}
                                            </a>
                                        </div> --}}
                                    {{-- </div>
                                </td>  --}}
                                <td class="px-1 py-5 text-sm">
                                    {{$t->role}}
                                </td>
                                <td class="px-1 py-5 text-sm">
                                    {{$t->nama}}
                                </td>
                                <td class="px-1 py-5 text-sm text-green-500 text-md">
                                   {{$t->email}}
                                </td>
                                <td class="px-1 py-5 text-sm">
                                    <a href="#" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-email">
                                        Edit Pengguna
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                          
                         
                           
                        </tbody>
                    </table>
                     
                {{ $pengguna->links() }}
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
          Belum Terdapat Pengguna 
        </h2>
        <p class="text-sm text-gray-400">
            It seems that you haven’t provided any Pengguna. <br>
            Cari Pengguna dahulu
        </p>

       
    </div>
</div>
 @endif

       
@endsection