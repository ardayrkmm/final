 
 @extends('layouts.app')

 @section('title', 'My Servivce')
 
 @section('content')
 
  @if (count($gerakan))
 <main class="h-full overflow-y-auto">
    <div class="container mx-auto">
        <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
            <div class="col-span-8">
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    My Services
                </h2>
                <p class="text-sm text-gray-400">
                    {{count($gerakan)}} Total Gerakan
                </p>
            </div>
            <div class="col-span-4 lg:text-right">
                <div class="relative mt-0 md:mt-6">
                    <a href="{{route('dashboard.tambah.f')}}" class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button">
                        + Tambah Gerakan
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
                                
                                <th class="py-4" scope="">Nama</th>
                                <th class="py-4" scope="">Repitisi</th>
                                <th class="py-4" scope="">Set</th>
                                <th class="py-4" scope="">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                          @foreach ($gerakan as $item)
                          <tr class="text-gray-700 border-b">
                           
                            <td class="px-1 py-5 text-sm">
                                {{$item->nama}}
                            </td>
                            <td class="px-1 py-5 text-sm">
                                {{$item->repitisi}}
                            </td>
                            <td class="px-1 py-5 text-sm text-green-500 text-md">
                                {{$item->set}}
                            </td>
                            <td class="px-1 py-5 text-sm">
                                <a href="{{route('dashboard.update.f', $item->id)}}" class="mr-4 px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-email">
                                    Edit Gerakan
                                </a>
                                <form action="{{ route('dashboard.delete', $item->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"  class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-email" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                          @endforeach
                            
                         
                        </tbody>
                    </table>
                    {{ $gerakan->links() }}
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
            It seems that you haven’t provided any service. <br>
            Let’s create your first service!
        </p>

        <div class="relative mt-0 md:mt-6">
            <a href="{{route('dashboard.tambah.f')}}">
                <button class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button">
                    + Add Services
                </button>
            </a>
       
        </div>
    </div>
</div>
@endif

       
@endsection