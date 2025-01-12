<section
    class="h-full w-full border-box transition-all duration-500 linear lg:px-16 md:px-20 px-8 py-8 color-primary">
    <div class="navbar-1-1" style="font-family: 'Poppins', sans-serif">
        <div class=" mx-auto flex flex-wrap flex-row items-center justify-between">

            <a href="#" class="flex text-3xl font-bold items-center">
                SERV
            </a>

            <label for="menu-toggle" class="cursor-pointer lg:hidden block">
                <svg class="w-6 h-6" fill="none" stroke="#092A33" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </label>

            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden lg:flex lg:items-center lg:w-auto w-full lg:ml-auto lg:mr-auto flex-wrap items-center text-base justify-center"
                id="menu">
                <nav
                    class="lg:space-x-12 space-x-0 lg:flex items-center justify-between text-base pt-8 lg:pt-0 lg:space-y-0 space-y-6">
                    <a href="#" class="block txt-primary">Home</a>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-block">Rekomendasi</button>
                    </form>
                    <a href="#" class="block nav-link text-white"></a>
                </nav>
                @auth
                <hr class="block lg:hidden">
                <a href="#" class="block lg:hidden nav-link text-serv-text">Kmu login</a>

                
                </a>
            @endauth
            </div>
@guest
<div class="hidden lg:flex lg:items-center lg:w-auto" id="menu">
   
    <button   onclick="toggleModal('loginModal')" class="txt-primary items-center border-0 block lg:inline-block lg:py-3 lg:px-10 focus:outline-none rounded-2xl font-medium text-base mt-6 lg:mt-0">
        Log In
    </button>
    
   
        <button onclick="toggleModal('registerModal')"
        
        class="bg-sekunder  txt-sekunder items-center border-0 block lg:inline-block  lg:py-3 lg:px-10 focus:outline-none rounded-2xl font-medium mt-6 lg:mt-0">
        Sign Up
    </button>
    
   
</div>
@endguest
                    @auth
                        <hr class="block lg:hidden">
                        <a href="#" class="block lg:hidden nav-link text-serv-text">Dashboard</a>

                        <a href="#" class="block lg:hidden nav-link text-serv-text" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                            <form action="#" id="logout-form" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    @endauth

                </nav>
            </div>

            

        </div>
    </div>
</section>
