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

            <a href="{{ route('services') }}"
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
            <x-ui.welcome-card icon="🦷" title="Digitalización de Modelos"
                text="Obtén modelos 3D precisos listos para planificación, impresión o creación de alineadores." />

            {{-- CARD 2 --}}
            <x-ui.welcome-card icon="🧬" title="Setups y Planificación de Alineadores"
                text="Diseño digital completo del tratamiento: movimientos progresivos, etapas y optimización clínica." />

            {{-- CARD 3 --}}
            <x-ui.welcome-card icon="🖨️" title="Impresión 3D Profesional"
                text="Modelos dentales listos para termoformado, pruebas, planificación o uso clínico." />


            {{-- CARD 4: Registro --}}
            <x-ui.welcome-card icon="📝" title="Crea tu Cuenta"
                text="Regístrate en WorkLab360 y empieza a digitalizar tu flujo clínico o de laboratorio de forma rápida y
                    segura."
                center="true" link="{{ route('register') }}" button="Registrarse" />

        </div>
    </section>

    {{-- SECCIÓN SERVICIOS DESTACADOS --}}
    <section id="servicios" class="max-w-6xl mx-auto mt-20 px-6">
        <h2 class="text-3xl font-bold text-indigo-700 text-center mb-10">
            Servicios Especializados en Alineadores Dentales
        </h2>

        <div class="grid md:grid-cols-4 gap-8"> {{-- 4 columnas, agregamos registro como CTA destacado --}}

            {{-- CARD 1 --}}
            <x-ui.welcome-card icon="👓" title="Fabricación de Alineadores"
                text="Alineadores transparentes con materiales certificados, precisión y estética superior." />

            {{-- CARD 2 --}}
            <x-ui.welcome-card icon="🔄" title="Gestión de Flujos Digitales"
                text="Optimización del proceso interno: desde el escaneo hasta la entrega del alineador final." />

            {{-- CARD 3 --}}
            <x-ui.welcome-card icon="🎓" title="Capacitación para Clínicas y Laboratorios"
                text="Aprende a integrar tecnologías CAD/CAM, impresión 3D y software de alineadores." />

            {{-- CARD 4: CTA Registro --}}
            <x-ui.welcome-card icon="📝" title="Únete a WorkLab360"
                text="Crea tu cuenta hoy mismo y empieza a optimizar tu flujo digital clínico o de laboratorio."
                center="true" link="{{ route('register') }}" button="Registrarse" />

        </div>
    </section>

    {{-- CTA FINAL --}}
    <section class="max-w-5xl mx-auto mt-24 mb-16 text-center px-6">
        <h2 class="text-3xl font-bold text-indigo-700">¿Listo para digitalizar tu práctica?</h2>
        <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
            Da el siguiente paso hacia la odontología moderna y ofrece servicios de calidad superior a tus pacientes.
        </p>

        <a href="{{ route('contact') }}"
            class="inline-block mt-6 px-10 py-3 text-lg font-semibold rounded-lg bg-indigo-700 text-white shadow-md hover:bg-indigo-800 transition">
            Contáctanos
        </a>
    </section>

</x-layouts.app>
