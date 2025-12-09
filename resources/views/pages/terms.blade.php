<x-layouts.app title="Términos y Condiciones">

    {{-- HERO --}}
    <section
        class="pt-20 pb-16 bg-gradient-to-r from-indigo-800 to-purple-600 text-indigo-50 rounded-xl shadow-lg mx-4 md:mx-10 mt-6">
        <div class="max-w-6xl mx-auto px-6 text-center">

            <h1 class="text-4xl md:text-5xl font-bold drop-shadow-md">
                Términos y <span class="text-purple-200">Condiciones</span>
            </h1>

            <p class="mt-4 text-lg md:text-xl text-white/90 max-w-3xl mx-auto">
                Lee atentamente nuestros términos para comprender cómo protegemos tu información,
                cómo utilizamos nuestros servicios y cuáles son tus derechos como usuario.
            </p>

        </div>
    </section>

    {{-- INTRO --}}
    <section class="max-w-5xl mx-auto mt-20 px-6 text-gray-700">
        <p class="text-lg leading-relaxed">
            Bienvenido a <strong>WorkLab360</strong>. Estos Términos y Condiciones regulan el uso de nuestra
            plataforma y servicios digitales. Al acceder o utilizar nuestro sitio web, aceptas cumplir estas normas
            diseñadas para garantizar transparencia, seguridad y una experiencia profesional.
        </p>
    </section>

    {{-- SECTIONS --}}
    <section class="max-w-6xl mx-auto px-6 mt-16 space-y-14">

        {{-- USO ACEPTABLE --}}
        <div class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100 hover:shadow-xl transition">
            <h2 class="text-3xl font-bold text-indigo-700 mb-4">Uso Aceptable de la Plataforma</h2>
            <p class="text-gray-600 leading-relaxed">
                Los usuarios se comprometen a utilizar la plataforma de forma responsable, evitando actividades que
                puedan comprometer la integridad del sistema, la seguridad de otros usuarios o el correcto
                funcionamiento
                de los servicios.
            </p>
            <ul class="mt-4 text-gray-600 list-disc list-inside space-y-2">
                <li>No manipular, copiar o distribuir contenido sin autorización.</li>
                <li>No intentar acceder a información privada o restringida.</li>
                <li>No utilizar la plataforma para actividades ilegales o no autorizadas.</li>
            </ul>
        </div>

        {{-- PRIVACIDAD --}}
        <div class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100 hover:shadow-xl transition">
            <h2 class="text-3xl font-bold text-indigo-700 mb-4">Privacidad y Protección de Datos</h2>
            <p class="text-gray-600 leading-relaxed">
                En WorkLab360 respetamos tu privacidad. Toda la información proporcionada es tratada con estricta
                confidencialidad según las normativas vigentes sobre protección de datos personales.
            </p>
            <p class="text-gray-600 mt-4">
                Utilizamos la información únicamente para ofrecerte mejores servicios, optimizar nuestra plataforma y
                asegurar una experiencia personalizada.
            </p>
        </div>

        {{-- SERVICIOS --}}
        <div class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100 hover:shadow-xl transition">
            <h2 class="text-3xl font-bold text-indigo-700 mb-4">Servicios y Responsabilidades</h2>
            <p class="text-gray-600 leading-relaxed">
                Nos comprometemos a brindar herramientas digitales de alta calidad, diseño profesional y soporte técnico
                confiable. Sin embargo, algunos procesos dependen de terceros o de factores externos que podrían afectar
                la disponibilidad del servicio.
            </p>
            <p class="text-gray-600 mt-4">
                Nos reservamos el derecho de realizar mejoras, actualizaciones o cambios en cualquier momento para
                asegurar un producto más estable y eficiente para ti.
            </p>
        </div>

        {{-- PROPIEDAD INTELECTUAL --}}
        <div class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100 hover:shadow-xl transition">
            <h2 class="text-3xl font-bold text-indigo-700 mb-4">Propiedad Intelectual</h2>
            <p class="text-gray-600 leading-relaxed">
                Todo el contenido de WorkLab360, incluyendo textos, marcas, gráficos, herramientas y diseño visual,
                pertenece exclusivamente a la empresa y está protegido por derechos de autor.
            </p>
            <p class="text-gray-600 mt-4">
                Queda prohibida su reproducción total o parcial sin autorización expresa.
            </p>
        </div>

        {{-- MODIFICACIONES --}}
        <div class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100 hover:shadow-xl transition">
            <h2 class="text-3xl font-bold text-indigo-700 mb-4">Modificaciones de los Términos</h2>
            <p class="text-gray-600 leading-relaxed">
                Podremos actualizar estos términos para adaptarlos a nuevas tecnologías o normativas. Las versiones
                actualizadas estarán siempre disponibles en esta página.
            </p>
        </div>

        {{-- CONTACTO --}}
        <div class="text-center mt-20 mb-20">
            <h3 class="text-2xl font-bold text-indigo-700">¿Tienes dudas?</h3>
            <p class="text-gray-600 mt-3">
                Nuestro equipo está disponible para ayudarte. Contáctanos y resolveremos tus inquietudes.
            </p>

            <a href="/contact"
                class="inline-block mt-6 bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-xl shadow-lg transition font-medium">
                Contactar Soporte
            </a>
        </div>

    </section>

</x-layouts.app>
