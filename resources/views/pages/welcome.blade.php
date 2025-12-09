<x-layouts.app title="Inicio">

    {{-- HERO SECTION --}}
    <section
        class="pt-20 pb-16 bg-gradient-to-r from-indigo-800 to-purple-600 text-indigo-50 rounded-xl shadow-lg mx-4 md:mx-10 mt-6">
        <div class="max-w-6xl mx-auto text-center px-6">

            <h1 class="text-4xl md:text-5xl font-bold tracking-tight drop-shadow-md">
                Odontología Digital a tu Alcance con <span class="text-purple-200">WorkLab360</span>
            </h1>

            <p class="mt-4 text-lg md:text-xl text-white/90 max-w-3xl mx-auto">
                La plataforma diseñada para clínicas y laboratorios dentales que buscan mejorar su flujo digital,
                optimizar procesos y ofrecer alineadores de alta precisión.
            </p>

            <a href="{{ route('Services') }}"
                class="inline-block mt-8 px-8 py-3 text-lg font-semibold bg-white text-indigo-700 
          border border-indigo-200 rounded-lg shadow-md hover:bg-indigo-50 transition">
                Ver Servicios
            </a>

        </div>
    </section>

    {{-- SECCIÓN DE BENEFICIOS --}}
    <section class="max-w-6xl mx-auto mt-20 px-6">
        <h2 class="text-3xl font-bold text-indigo-700 text-center mb-10">Soluciones para tu Clínica o Laboratorio</h2>

        <div class="grid md:grid-cols-4 gap-8"> {{-- 4 columnas ahora para incluir la tarjeta de registro --}}

            {{-- CARD 1 --}}
            <div
                class="bg-white shadow-lg rounded-xl p-6 border border-indigo-100 hover:shadow-xl hover:-translate-y-1 transition">
                <div class="text-purple-600 text-4xl mb-4">🦷</div>
                <h3 class="text-xl font-semibold text-gray-800">Digitalización de Modelos</h3>
                <p class="mt-2 text-gray-600">
                    Obtén modelos 3D precisos listos para planificación, impresión o creación de alineadores.
                </p>
            </div>

            {{-- CARD 2 --}}
            <div
                class="bg-white shadow-lg rounded-xl p-6 border border-indigo-100 hover:shadow-xl hover:-translate-y-1 transition">
                <div class="text-indigo-600 text-4xl mb-4">🧬</div>
                <h3 class="text-xl font-semibold text-gray-800">Setups y Planificación de Alineadores</h3>
                <p class="mt-2 text-gray-600">
                    Diseño digital completo del tratamiento: movimientos progresivos, etapas y optimización clínica.
                </p>
            </div>

            {{-- CARD 3 --}}
            <div
                class="bg-white shadow-lg rounded-xl p-6 border border-indigo-100 hover:shadow-xl hover:-translate-y-1 transition">
                <div class="text-indigo-600 text-4xl mb-4">🖨️</div>
                <h3 class="text-xl font-semibold text-gray-800">Impresión 3D Profesional</h3>
                <p class="mt-2 text-gray-600">
                    Modelos dentales listos para termoformado, pruebas, planificación o uso clínico.
                </p>
            </div>

            {{-- CARD 4: Registro --}}
            <div
                class="bg-white shadow-lg rounded-xl p-6 border border-indigo-100 hover:shadow-xl hover:-translate-y-1 transition text-center">
                <div class="text-green-600 text-4xl mb-4">📝</div>
                <h3 class="text-xl font-semibold text-gray-800">Crea tu Cuenta</h3>
                <p class="mt-2 text-gray-600">
                    Regístrate en WorkLab360 y empieza a digitalizar tu flujo clínico o de laboratorio de forma rápida y
                    segura.
                </p>
                <a href="{{ route('register') }}"
                    class="inline-block mt-4 px-6 py-2 text-sm font-semibold rounded-lg bg-indigo-700 text-white shadow-md hover:bg-indigo-800 transition">
                    Registrarse
                </a>
            </div>

        </div>
    </section>

    {{-- SECCIÓN SERVICIOS DESTACADOS --}}
    <section id="servicios" class="max-w-6xl mx-auto mt-20 px-6">
        <h2 class="text-3xl font-bold text-indigo-700 text-center mb-10">
            Servicios Especializados en Alineadores Dentales
        </h2>

        <div class="grid md:grid-cols-4 gap-8"> {{-- 4 columnas, agregamos registro como CTA destacado --}}

            {{-- CARD 1 --}}
            <div
                class="bg-white shadow-lg rounded-xl p-6 border border-indigo-100 hover:shadow-xl hover:-translate-y-1 transition">
                <div class="text-indigo-600 text-4xl mb-4">👓</div>
                <h3 class="text-xl font-semibold text-gray-800">Fabricación de Alineadores</h3>
                <p class="mt-2 text-gray-600">
                    Alineadores transparentes con materiales certificados, precisión y estética superior.
                </p>
            </div>

            {{-- CARD 2 --}}
            <div
                class="bg-white shadow-lg rounded-xl p-6 border border-indigo-100 hover:shadow-xl hover:-translate-y-1 transition">
                <div class="text-indigo-600 text-4xl mb-4">🔄</div>
                <h3 class="text-xl font-semibold text-gray-800">Gestión de Flujos Digitales</h3>
                <p class="mt-2 text-gray-600">
                    Optimización del proceso interno: desde el escaneo hasta la entrega del alineador final.
                </p>
            </div>

            {{-- CARD 3 --}}
            <div
                class="bg-white shadow-lg rounded-xl p-6 border border-indigo-100 hover:shadow-xl hover:-translate-y-1 transition">
                <div class="text-indigo-600 text-4xl mb-4">🎓</div>
                <h3 class="text-xl font-semibold text-gray-800">Capacitación para Clínicas y Laboratorios</h3>
                <p class="mt-2 text-gray-600">
                    Aprende a integrar tecnologías CAD/CAM, impresión 3D y software de alineadores.
                </p>
            </div>

            {{-- CARD 4: CTA Registro --}}
            <div
                class="bg-white shadow-lg rounded-xl p-6 border border-indigo-100 hover:shadow-xl hover:-translate-y-1 transition text-center">
                <div class="text-green-600 text-4xl mb-4">📝</div>
                <h3 class="text-xl font-semibold text-gray-800">Únete a WorkLab360</h3>
                <p class="mt-2 text-gray-600">
                    Crea tu cuenta hoy mismo y empieza a optimizar tu flujo digital clínico o de laboratorio.
                </p>
                <a href="{{ route('register') }}"
                    class="inline-block mt-4 px-6 py-2 text-sm font-semibold rounded-lg bg-indigo-700 text-white shadow-md hover:bg-indigo-800 transition">
                    Registrarse
                </a>
            </div>

        </div>
    </section>

    {{-- CTA FINAL --}}
    <section class="max-w-5xl mx-auto mt-24 mb-16 text-center px-6">
        <h2 class="text-3xl font-bold text-indigo-700">¿Listo para digitalizar tu práctica?</h2>
        <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
            Da el siguiente paso hacia la odontología moderna y ofrece servicios de calidad superior a tus pacientes.
        </p>

        <a href="{{ route('Contact') }}"
            class="inline-block mt-6 px-10 py-3 text-lg font-semibold rounded-lg bg-indigo-700 text-white shadow-md hover:bg-indigo-800 transition">
            Contáctanos
        </a>
    </section>

</x-layouts.app>
