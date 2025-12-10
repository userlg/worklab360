<div>
    {{-- SIDEBAR --}}
    <aside class="w-64 min-h-screen bg-white border-r border-gray-200 shadow-sm hidden md:block rounded-xl">
        <div class="p-6">
            <h2 class="text-2xl font-bold text-indigo-700">
                WorkLab360
            </h2>
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

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    class="w-full flex items-center gap-3 px-4 py-2 rounded-lg text-red-600 hover:bg-red-50 transition">
                    🚪 Cerrar sesión
                </button>
            </form>
        </nav>
    </aside>

</div>
