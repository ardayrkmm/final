<!-- Desktop sidebar -->
<aside class="z-20 flex-shrink-0 hidden w-64 overflow-y-auto bg-white md:block" aria-label="aside">
    <div class="text-serv-bg">
        <div class="" href="#">
            <img src="{{asset('assets/logo.svg')}}" alt="" class="object-center mx-auto my-8 ">
        </div>
        {{-- <div class="flex items-center pt-8 pl-5 space-x-2 border-t border-gray-100">
            <!--Author's profile photo-->
            <img class="object-cover object-center mr-1 rounded-full w-14 h-14"
                src="{{url('https://randomuser.me/api/portraits/men/1.jpg')}}" alt="random user" />
            <div>
                <!--Author name-->
                <p class="font-semibold text-gray-900 text-md">Alex Jones</p>
                <p class="text-sm font-light text-serv-text">
                    Website Developer
                </p>
            </div>
        </div> --}}
    
        <ul>
          
            
            <li class="relative px-6 py-3">
                @if (
                    request()->is('member/aktifitas')||
                    request()->is('member/aktifitas/*')||
                    request()->is('member/*/aktifitas')||
                    request()->is('member/*/aktifitas')
                )
                      <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800" href="{{route('aktifitas')}}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3.25" y="2.25" width="17.5" height="19.5" rx="4.75" stroke="#082431" stroke-width="1.5" />
                        <line x1="7.75" y1="7.25" x2="10.25" y2="7.25" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="11.25" x2="16.25" y2="11.25" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="15.25" x2="16.25" y2="15.25" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    <!-- Active Icons -->
                    <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="2" width="18" height="20" rx="4" fill="#082431" />
                        <line x1="7.75" y1="7.25" x2="10.25" y2="7.25" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="11.25" x2="16.25" y2="11.25" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="15.25" x2="16.25" y2="15.25" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                    </svg> -->
                    <span class="ml-4">Aktifitas</span>
                    <span class="inline-flex items-center justify-center px-3 py-2 ml-auto text-xs font-bold leading-none text-green-500 rounded-full bg-serv-green-badge">10</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (
                    request()->is('member/bobot')||
                    request()->is('member/bobot/*')||
                    request()->is('member/*/aktifitas')||
                    request()->is('member/*/aktifitas')
                )
                      <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800" href="{{route('aktifitas')}}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3.25" y="2.25" width="17.5" height="19.5" rx="4.75" stroke="#082431" stroke-width="1.5" />
                        <line x1="7.75" y1="7.25" x2="10.25" y2="7.25" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="11.25" x2="16.25" y2="11.25" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="15.25" x2="16.25" y2="15.25" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    <!-- Active Icons -->
                    <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="2" width="18" height="20" rx="4" fill="#082431" />
                        <line x1="7.75" y1="7.25" x2="10.25" y2="7.25" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="11.25" x2="16.25" y2="11.25" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="15.25" x2="16.25" y2="15.25" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                    </svg> -->
                    <span class="ml-4">Alternatif</span>
                    <span class="inline-flex items-center justify-center px-3 py-2 ml-auto text-xs font-bold leading-none text-green-500 rounded-full bg-serv-green-badge">10</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (
                    request()->is('member/aktifitas')||
                    request()->is('member/aktifitas/*')||
                    request()->is('member/*/aktifitas')||
                    request()->is('member/*/aktifitas')
                )
                      <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800" href="{{route('aktifitas')}}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3.25" y="2.25" width="17.5" height="19.5" rx="4.75" stroke="#082431" stroke-width="1.5" />
                        <line x1="7.75" y1="7.25" x2="10.25" y2="7.25" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="11.25" x2="16.25" y2="11.25" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="15.25" x2="16.25" y2="15.25" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    <!-- Active Icons -->
                    <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="2" width="18" height="20" rx="4" fill="#082431" />
                        <line x1="7.75" y1="7.25" x2="10.25" y2="7.25" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="11.25" x2="16.25" y2="11.25" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="15.25" x2="16.25" y2="15.25" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                    </svg> -->
                    <span class="ml-4">Perhitungan</span>
                    <span class="inline-flex items-center justify-center px-3 py-2 ml-auto text-xs font-bold leading-none text-green-500 rounded-full bg-serv-green-badge">10</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (
                    request()->is('member/aktifitas')||
                    request()->is('member/aktifitas/*')||
                    request()->is('member/*/aktifitas')||
                    request()->is('member/*/aktifitas')
                )
                      <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800" href="{{route('aktifitas')}}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3.25" y="2.25" width="17.5" height="19.5" rx="4.75" stroke="#082431" stroke-width="1.5" />
                        <line x1="7.75" y1="7.25" x2="10.25" y2="7.25" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="11.25" x2="16.25" y2="11.25" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="15.25" x2="16.25" y2="15.25" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    <!-- Active Icons -->
                    <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="2" width="18" height="20" rx="4" fill="#082431" />
                        <line x1="7.75" y1="7.25" x2="10.25" y2="7.25" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="11.25" x2="16.25" y2="11.25" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                        <line x1="7.75" y1="15.25" x2="16.25" y2="15.25" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                    </svg> -->
                    <span class="ml-4">Rangking</span>
                    <span class="inline-flex items-center justify-center px-3 py-2 ml-auto text-xs font-bold leading-none text-green-500 rounded-full bg-serv-green-badge">10</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (
                    request()->is('member/pengguna')||
                    request()->is('member/pengguna/*')||
                    request()->is('member/*/pengguna')||
                    request()->is('member/*/pengguna')
                )
                      <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg" aria-hidden="true"></span>
                @endif
                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800" href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2.25" y="1.25" width="19.5" height="21.5" rx="4.75" stroke="#082431" stroke-width="1.5" />
                        <rect x="11.3" y="7" width="1.4" height="10" rx="0.7" fill="#082431" />
                        <rect x="17" y="11" width="1.4" height="10" rx="0.7" transform="rotate(90 17 11)" fill="#082431" />
                    </svg>
                    <!-- Active Icons -->
                    <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2.25" y="1.25" width="19.5" height="21.5" rx="4.75" fill="#082431" stroke="#082431" stroke-width="1.5" />
                        <rect x="11" y="7" width="2" height="10" rx="1" fill="white" />
                        <rect x="17" y="11" width="2" height="10" rx="1" transform="rotate(90 17 11)" fill="white" />
                    </svg> -->
                    <span class="ml-4">Pengguna</span>
                    <span class="inline-flex items-center justify-center px-3 py-2 ml-auto text-xs font-bold leading-none text-green-500 rounded-full bg-serv-green-badge">{{auth()->user()->count()}}</span>

                </a>
            </li>
            <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800" href="/index.php">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="24" fill="white" />
                        <path d="M15 7.5V7C15 4.79086 13.2091 3 11 3H7C4.79086 3 3 4.79086 3 7V17C3 19.2091 4.79086 21 7 21H11C13.2091 21 15 19.2091 15 17V16.5" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M18.5 9.5L20.8586 11.8586C20.9367 11.9367 20.9367 12.0633 20.8586 12.1414L18.5 14.5" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M9.5 12L20 12" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    <span class="ml-4">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>