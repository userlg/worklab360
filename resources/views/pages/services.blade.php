<x-layouts.app :title="'Servicios'">

    {{-- HERO SECTION --}}
    <section class="bg-gradient-to-r from-indigo-800 to-purple-600 text-indigo-50 py-20 rounded-xl">
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

    {{-- SERVICES GRID --}}
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">
                Nuestros Servicios Principales
            </h2>

            <div class="grid md:grid-cols-3 gap-10">

                <x-ui.service-card icon="🦷" title="Escaneo y Digitalización 3D"
                    text="Digitalizamos modelos dentales con escáneres de alta precisión,
                          obteniendo archivos STL listos para planificación o impresión 3D." />

                <x-ui.service-card icon="🧪" title="Planificación Digital de Alineadores"
                    text="Realizamos setups digitales, movimientos dentales progresivos
                          y diseño completo de series de alineadores para tu tratamiento." />

                <x-ui.service-card icon="🖨️" title="Impresión 3D para Modelos Dentales"
                    text="Impresiones 3D de alta precisión para modelos de trabajo,
                          alineadores, retenedores y prototipos dentales." />

                <x-ui.service-card icon="🛠️" title="Fabricación de Alineadores"
                    text="Producción profesional de alineadores transparentes utilizando
                          materiales certificados para resultados confiables." />

                <x-ui.service-card icon="📈" title="Optimización de Flujos Digitales"
                    text="Implementamos sistemas CAD/CAM y protocolos digitales para mejorar
                          la eficiencia de tu práctica y reducir tiempos operativos." />

                <x-ui.service-card icon="🎓" title="Capacitación y Acompañamiento"
                    text="Formación personalizada para clínicas y laboratorios en escaneo 3D,
                          software de alineadores y manejo de flujos digitales." />

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
