<x-layouts.app title="Dashboard">

    <div class="flex bg-gray-100">

        <x-dashboard.aside />

        {{-- CONTENIDO PRINCIPAL --}}
        <div class="py-2 px-6">

            {{-- TÍTULO --}}
            <h1 class="text-3xl font-bold text-indigo-700">
                Bienvenido nuevamente, {{ auth()->user()->name }} 👋
            </h1>

            <p class="text-gray-600 mt-1">
                Aquí tienes un resumen general de tus actividades.
            </p>

            {{-- TARJETAS DE ESTADÍSTICAS --}}
            <div class="grid md:grid-cols-3 gap-6 mt-10">

                {{-- CARD 1 --}}
                <div
                    class="bg-white rounded-xl shadow-lg border border-indigo-100 p-6 hover:shadow-xl transition hover:-translate-y-1">
                    <div class="text-indigo-600 text-4xl mb-3">🦷</div>
                    <h3 class="text-xl font-semibold text-gray-800">Casos Activos</h3>
                    <p class="text-gray-600 mt-2">Total de tratamientos en curso.</p>
                    <p class="text-3xl font-bold text-indigo-700 mt-3">12</p>
                </div>

                {{-- CARD 2 --}}
                <div
                    class="bg-white rounded-xl shadow-lg border border-indigo-100 p-6 hover:shadow-xl transition hover:-translate-y-1">
                    <div class="text-purple-600 text-4xl mb-3">📈</div>
                    <h3 class="text-xl font-semibold text-gray-800">Consultas Recientes</h3>
                    <p class="text-gray-600 mt-2">Nuevos clientes contactando.</p>
                    <p class="text-3xl font-bold text-purple-700 mt-3">5</p>
                </div>

                {{-- CARD 3 --}}
                <div
                    class="bg-white rounded-xl shadow-lg border border-indigo-100 p-6 hover:shadow-xl transition hover:-translate-y-1">
                    <div class="text-green-600 text-4xl mb-3">🧬</div>
                    <h3 class="text-xl font-semibold text-gray-800">Setups Procesados</h3>
                    <p class="text-gray-600 mt-2">Planificaciones completadas.</p>
                    <p class="text-3xl font-bold text-green-700 mt-3">8</p>
                </div>
            </div>

            {{-- SECCIÓN ADICIONAL --}}
            <section class="mt-14 bg-white rounded-xl shadow-lg p-8 border border-indigo-100">
                <h2 class="text-2xl font-bold text-indigo-700">
                    Actividad Reciente
                </h2>
                <p class="text-gray-600 mt-2 mb-6">
                    Últimas acciones registradas en tu cuenta.
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="text-indigo-600 text-2xl">📥</span>
                        <div>
                            <p class="font-semibold text-gray-800">Se subió un nuevo modelo 3D (STL)</p>
                            <p class="text-gray-500 text-sm">Hace 2 horas</p>
                        </div>
                    </li>

                    <li class="flex items-start gap-3">
                        <span class="text-purple-600 text-2xl">🧾</span>
                        <div>
                            <p class="font-semibold text-gray-800">Nuevo caso clínico agregado</p>
                            <p class="text-gray-500 text-sm">Hace 5 horas</p>
                        </div>
                    </li>

                    <li class="flex items-start gap-3">
                        <span class="text-green-600 text-2xl">🧬</span>
                        <div>
                            <p class="font-semibold text-gray-800">Setup revisado y aprobado</p>
                            <p class="text-gray-500 text-sm">Ayer</p>
                        </div>
                    </li>
                </ul>
            </section>

        </div>

    </div>

</x-layouts.app>
