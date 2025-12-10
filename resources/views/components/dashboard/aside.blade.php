<div x-data="{ open: false }" class="relative">

    <!-- BOTÓN HAMBURGUESA - Solo en mobile -->
    <button class="md:hidden p-3 text-indigo-700" @click="open = true">
        <!-- Heroicon Bars 3 -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-7 h-7">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </button>

    <!-- OVERLAY (fondo oscuro) -->
    <div class="fixed inset-0 bg-black/40 z-40 md:hidden" x-show="open" x-transition.opacity @click="open = false">
    </div>

    <!-- SIDEBAR -->
    <aside
        class="w-64 min-h-[76vh] bg-white border-r border-gray-200 shadow-sm rounded-xl
               fixed inset-y-0 left-0 z-50 transform transition-all duration-300
               -translate-x-full md:translate-x-0 md:relative md:block"
        :class="{ '-translate-x-full': !open }">
        <div class="p-6 md:pl-6">
            <h2 class="text-2xl font-bold text-indigo-700">WorkLab360</h2>
            <p class="text-sm text-gray-500 mt-1">Panel de control</p>
        </div>

        <nav class="mt-6 space-y-1 px-4">
            <a href="#"
                class="flex items-center gap-3 px-4 py-2 rounded-lg text-indigo-700 bg-indigo-100 font-semibold">
                📊 Dashboard
            </a>

            <a href="#"
                class="flex items-center gap-3 px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-100 transition">
                🦷 Casos
            </a>

            <a href="#"
                class="flex items-center gap-3 px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-100 transition">
                📁 Archivos 3D
            </a>

            <a href="#"
                class="flex items-center gap-3 px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-100 transition">
                🏥 Laboratorio / Clínica
            </a>

            <a href="#"
                class="flex items-center gap-3 px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-100 transition">
                👤 Perfil
            </a>

            <x-logout-link
                class="w-full flex items-center gap-3 px-4 py-2 rounded-lg text-red-600 hover:bg-red-50 transition">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                    </svg>

                </div>
                Cerrar sesión

            </x-logout-link>
        </nav>

    </aside>

</div>
