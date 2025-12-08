<x-layouts.app title="Nosotros">

    {{-- HERO --}}
    <section
        class="pt-20 pb-16 bg-gradient-to-r from-indigo-700 to-purple-500 text-white rounded-xl shadow-lg mx-4 md:mx-10 mt-6">
        <div class="max-w-6xl mx-auto px-6 text-center">

            <h1 class="text-4xl md:text-5xl font-bold drop-shadow-md">
                Conoce a <span class="text-purple-200">WorkLab360</span>
            </h1>

            <p class="mt-4 text-lg md:text-xl text-white/90 max-w-3xl mx-auto">
                Una plataforma creada para transformar la manera en que clínicas y laboratorios dentales trabajan
                con tecnología digital, impresión 3D y alineadores.
            </p>

        </div>
    </section>

    {{-- QUIÉNES SOMOS --}}
    <section class="max-w-6xl mx-auto mt-20 px-6">
        <div class="grid md:grid-cols-2 gap-10 items-center">

            {{-- TEXT --}}
            <div>
                <h2 class="text-3xl font-bold text-indigo-700 mb-4">¿Quiénes Somos?</h2>

                <p class="text-gray-700 mb-4">
                    WorkLab360 nació con el propósito de acercar la odontología digital a clínicas y laboratorios
                    que buscan trabajar con precisión, rapidez y flujos de trabajo modernos.
                </p>
                <p class="text-gray-700 mb-4">
                    Nuestro equipo combina experiencia en tecnología, escaneo 3D, diseño dental y fabricación de
                    alineadores,
                    ofreciendo soluciones adaptadas a las necesidades de cada profesional.
                </p>
                <p class="text-gray-700">
                    Creemos en la innovación, la transparencia y la eficiencia como pilares para elevar la calidad
                    del tratamiento ortodóntico y garantizar mejores resultados para tus pacientes.
                </p>
            </div>

            {{-- IMAGE --}}
            <div>
                <img src="{{ asset('images/image1.png') }}" alt="Descripción profesional"
                    class="rounded-xl shadow-lg w-full object-cover">

            </div>
        </div>
    </section>

    {{-- MISIÓN Y VISIÓN --}}
    <section class="max-w-6xl mx-auto px-6 mt-24">
        <div class="grid md:grid-cols-2 gap-10">

            {{-- MISIÓN --}}
            <div class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100 hover:shadow-xl transition">
                <h3 class="text-2xl font-bold text-indigo-700 mb-4">Nuestra Misión</h3>
                <p class="text-gray-700">
                    Facilitar la adopción de flujos digitales en la odontología, brindando herramientas y servicios de
                    alta precisión
                    que permitan a cada profesional ofrecer tratamientos de calidad superior con tecnología moderna.
                </p>
            </div>

            {{-- VISIÓN --}}
            <div class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100 hover:shadow-xl transition">
                <h3 class="text-2xl font-bold text-indigo-700 mb-4">Nuestra Visión</h3>
                <p class="text-gray-700">
                    Convertirnos en el aliado tecnológico más confiable para clínicas y laboratorios dentales en
                    Latinoamérica,
                    posicionando la odontología digital como un estándar accesible, eficiente y rentable.
                </p>
            </div>

        </div>
    </section>

    {{-- VALORES --}}
    <section class="max-w-6xl mx-auto px-6 mt-24">
        <h2 class="text-3xl font-bold text-indigo-700 text-center mb-12">Nuestros Valores</h2>

        <div class="grid md:grid-cols-3 gap-10">

            {{-- CARD --}}
            <div
                class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100 hover:shadow-xl transition text-center">
                <div class="text-indigo-600 text-4xl mb-4">🔍</div>
                <h4 class="text-xl font-semibold mb-2">Precisión</h4>
                <p class="text-gray-600 text-sm">
                    Todo lo que hacemos está orientado a la exactitud y confiabilidad de los resultados.
                </p>
            </div>

            {{-- CARD --}}
            <div
                class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100 hover:shadow-xl transition text-center">
                <div class="text-indigo-600 text-4xl mb-4">⚙️</div>
                <h4 class="text-xl font-semibold mb-2">Innovación</h4>
                <p class="text-gray-600 text-sm">
                    Apostamos por la tecnología como camino hacia una odontología más eficiente y moderna.
                </p>
            </div>

            {{-- CARD --}}
            <div
                class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100 hover:shadow-xl transition text-center">
                <div class="text-indigo-600 text-4xl mb-4">🤝</div>
                <h4 class="text-xl font-semibold mb-2">Compromiso</h4>
                <p class="text-gray-600 text-sm">
                    Acompañamos a cada cliente para garantizar un flujo de trabajo claro, estable y profesional.
                </p>
            </div>

        </div>
    </section>

    {{-- EQUIPO --}}
    <section class="max-w-6xl mx-auto px-6 mt-24 mb-20">
        <h2 class="text-3xl font-bold text-indigo-700 text-center mb-10">Nuestro Equipo</h2>

        <p class="text-gray-600 text-center max-w-3xl mx-auto mb-12">
            Somos un grupo de profesionales apasionados por la tecnología dental, el diseño digital,
            la impresión 3D y la ortodoncia moderna. Nuestra meta es hacer que cada proceso sea más rápido,
            preciso y accesible para todos.
        </p>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-10">

            {{-- MEMBER --}}
            <div
                class="bg-white rounded-xl shadow-lg p-6 text-center border border-indigo-100 hover:shadow-xl transition">
                <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?q=80&w=400" alt="Odontólogo"
                    class="rounded-full w-28 h-28 mx-auto object-cover mb-4">
                <h4 class="text-lg font-semibold text-gray-800">Especialista en Diseño Dental</h4>
                <p class="text-gray-600 text-sm mt-2">
                    Experto en setups, movimientos dentales y planificación de alineadores.
                </p>
            </div>

            {{-- MEMBER --}}
            <div
                class="bg-white rounded-xl shadow-lg p-6 text-center border border-indigo-100 hover:shadow-xl transition">
                <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?q=80&w=400" alt="Técnico dental"
                    class="rounded-full w-28 h-28 mx-auto object-cover mb-4">
                <h4 class="text-lg font-semibold text-gray-800">Técnico en Impresión 3D</h4>
                <p class="text-gray-600 text-sm mt-2">
                    Especialista en producción de modelos para alineadores y prototipos dentales.
                </p>
            </div>

            {{-- MEMBER --}}
            <div
                class="bg-white rounded-xl shadow-lg p-6 text-center border border-indigo-100 hover:shadow-xl transition">
                <img src="https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?q=80&w=400" alt="Ingeniero"
                    class="rounded-full w-28 h-28 mx-auto object-cover mb-4">
                <h4 class="text-lg font-semibold text-gray-800">Ingeniero Digital</h4>
                <p class="text-gray-600 text-sm mt-2">
                    Responsable de automatización, flujo digital y soporte tecnológico.
                </p>
            </div>

        </div>
    </section>

</x-layouts.app>
