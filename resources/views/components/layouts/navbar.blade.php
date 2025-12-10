<nav class="bg-indigo-800 text-indigo-50 shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">

        {{-- LOGO --}}
        <a href="{{ route('Welcome') }}" class="text-xl font-semibold tracking-wide hover:text-purple-200 transition">
            WorkLab360
        </a>

        {{-- MENU DESKTOP --}}
        @guest
        <div class="hidden md:flex space-x-6 text-sm font-medium">

                <a href="{{ route('Welcome') }}" class="hover:text-purple-300 transition ease-in duration-300">Inicio</a>
                <a href="{{ route('Services') }}" class="hover:text-purple-300 transition ease-in duration-300">Servicios</a>
                <a href="{{ route('About') }}" class="hover:text-purple-300 transition ease-in duration-300">Nosotros</a>
                <a href="{{ route('Contact') }}" class="hover:text-purple-300 transition ease-in duration-300">Contacto</a>
                <a href="{{ route('login') }}" class="hover:text-purple-300 transition ease-in duration-300">Acceder</a>
        </div>
            
        {{-- BOTÓN HAMBURGUESA --}}
        <button id="nav-toggle" class="md:hidden focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>


        </button>

    </div>

    {{-- MENU MOBILE --}}
    <div id="mobile-menu"
        class="max-h-0 overflow-hidden opacity-0 md:hidden px-6 bg-indigo-800 transition-all duration-300 ease-out">

        <ul class="divide-y divide-indigo-700/40">
            {{-- ITEM --}}
            <li class="group">
                <a href="{{ route('Welcome') }}"
                    class="block py-3 pl-3 transition-all duration-200 group-hover:text-purple-200
                       relative">
                    Inicio

                    {{-- Línea animada izquierda --}}
                    <span
                        class="absolute left-0 top-0 h-full w-1 bg-purple-300 scale-y-0 
                            group-hover:scale-y-100 origin-top transition-transform duration-300"></span>
                </a>
            </li>

            <li class="group">
                <a href="{{ route('Services') }}"
                    class="block py-3 pl-3 transition-all duration-200 group-hover:text-purple-200
                       relative">
                    Servicios
                    <span
                        class="absolute left-0 top-0 h-full w-1 bg-purple-300 scale-y-0 
                            group-hover:scale-y-100 origin-top transition-transform duration-300"></span>
                </a>
            </li>

            <li class="group">
                <a href="{{ route('About') }}"
                    class="block py-3 pl-3 transition-all duration-200 group-hover:text-purple-200
                       relative">
                    Nosotros
                    <span
                        class="absolute left-0 top-0 h-full w-1 bg-purple-300 scale-y-0 
                            group-hover:scale-y-100 origin-top transition-transform duration-300"></span>
                </a>
            </li>

            <li class="group">
                <a href="{{ route('Contact') }}"
                    class="block py-3 pl-3 transition-all duration-200 group-hover:text-purple-200
                       relative">
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

<script>
    const toggle = document.getElementById('nav-toggle');
    const menu = document.getElementById('mobile-menu');

    let isOpen = false;

    toggle.addEventListener('click', () => {
        isOpen = !isOpen;

        if (isOpen) {
            menu.classList.remove('max-h-0', 'opacity-0');
            menu.classList.add('max-h-96', 'opacity-100');
        } else {
            menu.classList.remove('max-h-96', 'opacity-100');
            menu.classList.add('max-h-0', 'opacity-0');
        }
    });
</script>
