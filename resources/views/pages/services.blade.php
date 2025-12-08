<x-layouts.app :title="'Servicios'">

    {{-- HERO SECTION --}}
    <section class="bg-gradient-to-r from-indigo-700 to-purple-500 text-white py-20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
                Servicios Profesionales para tu Clínica o Laboratorio Dental
            </h1>
            <p class="text-lg md:text-xl text-gray-100 max-w-3xl mx-auto">
                Soluciones de alta precisión especializadas en la creación de alineadores, planificación digital
                y flujos de trabajo modernos para elevar la calidad de tus tratamientos.
            </p>
        </div>
    </section>

    {{-- FEATURES / SERVICES GRID --}}
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">
                Nuestros Servicios Principales
            </h2>

            <div class="grid md:grid-cols-3 gap-10">

                {{-- SERVICE 1 --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition duration-300 group">
                    <div
                        class="w-16 h-16 bg-indigo-600 text-white flex items-center justify-center rounded-full mb-6
                                group-hover:bg-purple-600 transition">
                        🦷
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Escaneo y Digitalización 3D</h3>
                    <p class="text-gray-600">
                        Digitalizamos modelos dentales con escáneres de alta precisión, obteniendo archivos STL listos
                        para planificación o impresión 3D.
                    </p>
                </div>

                {{-- SERVICE 2 --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition duration-300 group">
                    <div
                        class="w-16 h-16 bg-indigo-600 text-white flex items-center justify-center rounded-full mb-6
                                group-hover:bg-purple-600 transition">
                        🧪
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Planificación Digital de Alineadores</h3>
                    <p class="text-gray-600">
                        Realizamos setups digitales, movimientos dentales progresivos y
                        diseño completo de series de alineadores para tu tratamiento.
                    </p>
                </div>

                {{-- SERVICE 3 --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition duration-300 group">
                    <div
                        class="w-16 h-16 bg-indigo-600 text-white flex items-center justify-center rounded-full mb-6
                                group-hover:bg-purple-600 transition">
                        🖨️
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Impresión 3D para Modelos Dentales</h3>
                    <p class="text-gray-600">
                        Impresiones 3D de alta precisión para modelos de trabajo, alineadores, retenedores
                        y prototipos dentales.
                    </p>
                </div>

                {{-- SERVICE 4 --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition duration-300 group">
                    <div
                        class="w-16 h-16 bg-indigo-600 text-white flex items-center justify-center rounded-full mb-6
                                group-hover:bg-purple-600 transition">
                        🛠️
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Fabricación de Alineadores</h3>
                    <p class="text-gray-600">
                        Producción profesional de alineadores transparentes con materiales certificados,
                        entregando resultados clínicos estéticos y confiables.
                    </p>
                </div>

                {{-- SERVICE 5 --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition duration-300 group">
                    <div
                        class="w-16 h-16 bg-indigo-600 text-white flex items-center justify-center rounded-full mb-6
                                group-hover:bg-purple-600 transition">
                        📈
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Optimización de Flujos Digitales</h3>
                    <p class="text-gray-600">
                        Implementamos sistemas CAD/CAM, protocolos digitales y automatización
                        para mejorar tu eficiencia y reducir tiempos operativos.
                    </p>
                </div>

                {{-- SERVICE 6 --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition duration-300 group">
                    <div
                        class="w-16 h-16 bg-indigo-600 text-white flex items-center justify-center rounded-full mb-6
                                group-hover:bg-purple-600 transition">
                        🎓
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Capacitación y Acompañamiento</h3>
                    <p class="text-gray-600">
                        Formación personalizada para clínicas y laboratorios en escaneo 3D,
                        software de alineadores y manejo de flujos digitales.
                    </p>
                </div>

            </div>
        </div>
    </section>


    {{-- CALL TO ACTION --}}
    <section class="py-16 bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                ¿Listo para transformar tu consulta o laboratorio?
            </h2>
            <p class="text-gray-100 mb-8 max-w-3xl mx-auto">
                En WorkLab360 te ayudamos a adoptar la odontología digital de forma eficiente y profesional.
            </p>

            <a href="{{ route('Contact') }}"
                class="inline-block bg-white text-indigo-700 font-semibold px-6 py-3 rounded-xl shadow-md
                      hover:bg-gray-100 hover:shadow-xl transition-all duration-300">
                Contáctanos Hoy
            </a>
        </div>
    </section>

</x-layouts.app>
