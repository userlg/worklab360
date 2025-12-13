<nav x-data="{ open: false }" class="bg-indigo-800 text-indigo-50 shadow-md sticky top-0 z-50">

    <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">

        {{-- LOGO --}}
        <a href="{{ route('welcome') }}" class="text-xl font-semibold tracking-wide hover:text-purple-200 transition">
            WorkLab360
        </a>

        {{-- MENU DESKTOP --}}
        @guest
            <div class="hidden md:flex space-x-6 text-sm font-medium">

                <a href="{{ route('welcome') }}" class="hover:text-purple-300 transition">Inicio</a>
                <a href="{{ route('services') }}" class="hover:text-purple-300 transition">Servicios</a>
                <a href="{{ route('about') }}" class="hover:text-purple-300 transition">Nosotros</a>
                <a href="{{ route('contact') }}" class="hover:text-purple-300 transition">Contacto</a>
                <a href="{{ route('login') }}" class="hover:text-purple-300 transition">Acceder</a>

            </div>

            {{-- BOTÓN HAMBURGUESA --}}
            <button class="md:hidden focus:outline-none" @click="open = !open">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>

        </div>

        {{-- MENU MOBILE --}}
        <div class="md:hidden px-6 bg-indigo-800 overflow-hidden transition-all duration-300 ease-out"
            :class="open ? 'max-h-96 opacity-100' : 'max-h-0 opacity-0'">

            <ul class="divide-y divide-indigo-700/40">
                <li class="group">
                    <a href="{{ route('welcome') }}" @click="open = false"
                        class="block py-3 pl-3 relative transition group-hover:text-purple-200">
                        Inicio
                        <span
                            class="absolute left-0 top-0 h-full w-1 bg-purple-300 scale-y-0
                        group-hover:scale-y-100 origin-top transition-transform duration-300"></span>
                    </a>
                </li>

                <li class="group">
                    <a href="{{ route('services') }}" @click="open = false"
                        class="block py-3 pl-3 relative transition group-hover:text-purple-200">
                        Servicios
                        <span
                            class="absolute left-0 top-0 h-full w-1 bg-purple-300 scale-y-0
                        group-hover:scale-y-100 origin-top transition-transform duration-300"></span>
                    </a>
                </li>

                <li class="group">
                    <a href="{{ route('about') }}" @click="open = false"
                        class="block py-3 pl-3 relative transition group-hover:text-purple-200">
                        Nosotros
                        <span
                            class="absolute left-0 top-0 h-full w-1 bg-purple-300 scale-y-0
                        group-hover:scale-y-100 origin-top transition-transform duration-300"></span>
                    </a>
                </li>

                <li class="group">
                    <a href="{{ route('contact') }}" @click="open = false"
                        class="block py-3 pl-3 relative transition group-hover:text-purple-200">
                        Contacto
                        <span
                            class="absolute left-0 top-0 h-full w-1 bg-purple-300 scale-y-0
                        group-hover:scale-y-100 origin-top transition-transform duration-300"></span>
                    </a>
                </li>
            </ul>
        @endguest
    </div>

</nav>
