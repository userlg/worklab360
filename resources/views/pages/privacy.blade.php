<x-layouts.app title="Política de Privacidad">

    {{-- HERO --}}
    <section
        class="pt-20 pb-16 bg-gradient-to-r from-indigo-800 to-purple-600 text-indigo-50 rounded-xl shadow-lg mx-4 md:mx-10 mt-6">
        <div class="max-w-6xl mx-auto text-center px-6">

            <h1 class="text-4xl md:text-5xl font-bold tracking-tight drop-shadow-md">
                Tu Privacidad es Nuestra Prioridad en <span class="text-purple-200">WorkLab360</span>
            </h1>

            <p class="mt-4 text-lg md:text-xl text-white/90 max-w-3xl mx-auto">
                Entérate de cómo protegemos, gestionamos y usamos tu información personal dentro de nuestra plataforma
                digital especializada en servicios odontológicos.
            </p>

        </div>
    </section>

    {{-- INTRO --}}
    <section class="max-w-6xl mx-auto mt-20 px-6">
        <h2 class="text-3xl font-bold text-indigo-700 text-center mb-10">Compromiso con tus Datos</h2>
        <p class="text-gray-700 text-lg leading-relaxed max-w-4xl mx-auto text-center">
            En WorkLab360 trabajamos con información sensible y profesional. Por eso implementamos estrictos protocolos
            de seguridad tecnológica y administrativa para ofrecer una experiencia confiable y transparente.
        </p>
    </section>

    {{-- SECTIONS --}}
    <section class="max-w-6xl mx-auto mt-20 px-6 grid md:grid-cols-2 gap-10">

        {{-- CARD 1 --}}
        <div class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100 hover:shadow-xl transition">
            <div class="text-purple-600 text-4xl mb-4">🔒</div>
            <h3 class="text-xl font-semibold text-gray-800">Información que Recopilamos</h3>
            <p class="mt-2 text-gray-600">
                Solo recopilamos datos necesarios para garantizar el correcto funcionamiento de la plataforma y la
                prestación de nuestros servicios.
            </p>
            <ul class="list-disc list-inside mt-3 text-gray-600 space-y-1">
                <li>Datos de contacto y registro.</li>
                <li>Archivos clínicos o modelos digitales cargados por los usuarios.</li>
                <li>Información técnica para mejorar rendimiento y seguridad.</li>
            </ul>
        </div>

        {{-- CARD 2 --}}
        <div class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100 hover:shadow-xl transition">
            <div class="text-indigo-600 text-4xl mb-4">🧮</div>
            <h3 class="text-xl font-semibold text-gray-800">Cómo Usamos tu Información</h3>
            <p class="mt-2 text-gray-600">
                Tu información se utiliza exclusivamente para optimizar procesos, mejorar la experiencia de usuario y
                ofrecer resultados de alta precisión en servicios digitales dentales.
            </p>
        </div>

        {{-- CARD 3 --}}
        <div class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100 hover:shadow-xl transition">
            <div class="text-indigo-600 text-4xl mb-4">⚙️</div>
            <h3 class="text-xl font-semibold text-gray-800">Protección de Datos</h3>
            <p class="mt-2 text-gray-600">
                Implementamos cifrado, controles de acceso y auditorías periódicas para evitar accesos no autorizados,
                pérdida o alteración de datos sensibles.
            </p>
            <p class="mt-2 text-gray-600">
                Tu información clínica o profesional siempre será almacenada con seguridad y manejada bajo estricta
                confidencialidad.
            </p>
        </div>

        {{-- CARD 4 --}}
        <div class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100 hover:shadow-xl transition">
            <div class="text-purple-600 text-4xl mb-4">🤝</div>
            <h3 class="text-xl font-semibold text-gray-800">Compartir Información</h3>
            <p class="mt-2 text-gray-600">
                No vendemos ni compartimos tus datos con terceros.
                Solo se compartirán en casos estrictamente necesarios para la prestación del servicio o cumplimiento
                legal.
            </p>
        </div>

    </section>

    {{-- DERECHOS --}}
    <section class="max-w-6xl mx-auto mt-24 px-6">
        <h2 class="text-3xl font-bold text-indigo-700 text-center mb-10">Tus Derechos como Usuario</h2>

        <div class="grid md:grid-cols-3 gap-8">

            <div
                class="bg-white shadow-lg rounded-xl p-6 border border-indigo-100 text-center hover:shadow-xl transition">
                <div class="text-indigo-600 text-4xl mb-4">📄</div>
                <h3 class="text-xl font-semibold text-gray-800">Acceso</h3>
                <p class="text-gray-600 mt-2">
                    Puedes solicitar información sobre los datos que almacenamos sobre ti.
                </p>
            </div>

            <div
                class="bg-white shadow-lg rounded-xl p-6 border border-indigo-100 text-center hover:shadow-xl transition">
                <div class="text-indigo-600 text-4xl mb-4">✏️</div>
                <h3 class="text-xl font-semibold text-gray-800">Rectificación</h3>
                <p class="text-gray-600 mt-2">
                    Puedes modificar o actualizar tu información cuando lo necesites.
                </p>
            </div>

            <div
                class="bg-white shadow-lg rounded-xl p-6 border border-indigo-100 text-center hover:shadow-xl transition">
                <div class="text-indigo-600 text-4xl mb-4">🗑️</div>
                <h3 class="text-xl font-semibold text-gray-800">Eliminación</h3>
                <p class="text-gray-600 mt-2">
                    Puedes solicitar la eliminación de tus datos en cualquier momento bajo solicitud formal.
                </p>
            </div>

        </div>
    </section>

    {{-- CTA FINAL --}}
    <section class="max-w-5xl mx-auto mt-24 mb-16 text-center px-6">
        <h2 class="text-3xl font-bold text-indigo-700">¿Tienes preguntas sobre tu privacidad?</h2>
        <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
            Nuestro equipo está disponible para ayudarte a comprender cómo cuidamos tus datos y cómo puedes ejercer tus
            derechos.
        </p>

        <a href="{{ route('Contact') }}"
            class="inline-block mt-6 px-10 py-3 text-lg font-semibold rounded-lg bg-indigo-700 text-white shadow-md hover:bg-indigo-800 transition">
            Contáctanos
        </a>
    </section>

</x-layouts.app>
