<x-layouts.app title="Inicio">


    {{-- HERO SECTION --}}
    <section
        class="pt-20 pb-16 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-xl shadow-lg mx-4 md:mx-10 mt-6">
        <div class="max-w-6xl mx-auto text-center px-6">

            <h1 class="text-4xl md:text-5xl font-bold tracking-tight drop-shadow-md">
                Bienvenido a <span class="text-purple-200">WorkLab360</span>
            </h1>

            <p class="mt-4 text-lg md:text-xl text-white/90 max-w-2xl mx-auto">
                La plataforma donde la productividad, la tecnología y la eficiencia se unen para llevar tu proyecto
                al siguiente nivel.
            </p>

            <a href="#servicios"
                class="inline-block mt-8 px-8 py-3 text-lg font-semibold bg-white text-indigo-700 rounded-lg shadow-md hover:bg-indigo-50 transition">
                Descubrir más
            </a>

        </div>
    </section>

    {{-- SECCIÓN DE SERVICIOS --}}
    <section id="servicios" class="max-w-6xl mx-auto mt-16 px-6">
        <h2 class="text-3xl font-bold text-indigo-700 text-center mb-10">Nuestros Servicios</h2>

        <div class="grid md:grid-cols-3 gap-8">

            {{-- CARD 1 --}}
            <div
                class="bg-white shadow-lg rounded-xl p-6 border border-indigo-100 hover:shadow-xl hover:-translate-y-1 transition">
                <div class="text-indigo-600 text-4xl mb-4">
                    ⭐
                </div>
                <h3 class="text-xl font-semibold text-gray-800">Optimización de Procesos</h3>
                <p class="mt-2 text-gray-600">
                    Mejoramos tus tiempos, flujo de trabajo y organización para aumentar tu productividad.
                </p>
            </div>

            {{-- CARD 2 --}}
            <div
                class="bg-white shadow-lg rounded-xl p-6 border border-indigo-100 hover:shadow-xl hover:-translate-y-1 transition">
                <div class="text-indigo-600 text-4xl mb-4">
                    ⚙️
                </div>
                <h3 class="text-xl font-semibold text-gray-800">Automatización Inteligente</h3>
                <p class="mt-2 text-gray-600">
                    Implementamos soluciones automatizadas que reducen errores y mejoran la eficiencia.
                </p>
            </div>

            {{-- CARD 3 --}}
            <div
                class="bg-white shadow-lg rounded-xl p-6 border border-indigo-100 hover:shadow-xl hover:-translate-y-1 transition">
                <div class="text-indigo-600 text-4xl mb-4">
                    🚀
                </div>
                <h3 class="text-xl font-semibold text-gray-800">Transformación Digital</h3>
                <p class="mt-2 text-gray-600">
                    Te ayudamos a migrar a herramientas modernas para escalar tu proyecto.
                </p>
            </div>

        </div>
    </section>

    {{-- CTA FINAL --}}
    <section class="max-w-5xl mx-auto mt-20 mb-16 text-center px-6">
        <h2 class="text-3xl font-bold text-indigo-700">¿Listo para comenzar?</h2>
        <p class="text-gray-600 mt-3 max-w-xl mx-auto">
            Permítenos ayudarte a transformar tus ideas en resultados reales.
        </p>

        <a href="#"
            class="inline-block mt-6 px-10 py-3 text-lg font-semibold rounded-lg bg-indigo-700 text-white shadow-md hover:bg-indigo-800 transition">
            Contáctanos
        </a>
    </section>


</x-layouts.app>
