<x-layouts.app title="Contacto">

    {{-- HERO --}}
    <section
        class="pt-20 pb-16 bg-gradient-to-r from-indigo-700 to-purple-500 text-white rounded-xl shadow-lg mx-4 md:mx-10 mt-6">
        <div class="max-w-6xl mx-auto px-6 text-center">

            <h1 class="text-4xl md:text-5xl font-bold drop-shadow-md">
                Contáctanos
            </h1>

            <p class="mt-4 text-lg md:text-xl text-white/90 max-w-3xl mx-auto">
                Estamos listos para ayudarte a implementar o mejorar tu flujo de trabajo digital y de alineadores.
            </p>

        </div>
    </section>

    {{-- CONTACT FORM & INFO --}}
    <section class="max-w-6xl mx-auto px-6 mt-20 grid md:grid-cols-2 gap-12">

        {{-- FORM --}}
        <div class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100">
            <h2 class="text-2xl font-bold text-indigo-700 mb-6">Envíanos un mensaje</h2>

            <form action="#" method="POST" class="space-y-5">

                {{-- NAME --}}
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Nombre</label>
                    <input type="text" name="name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 
                                  focus:ring-indigo-500 focus:outline-none transition"
                        placeholder="Tu nombre">
                </div>

                {{-- EMAIL --}}
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Correo electrónico</label>
                    <input type="email" name="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 
                                  focus:ring-indigo-500 focus:outline-none transition"
                        placeholder="tucorreo@ejemplo.com">
                </div>

                {{-- PHONE --}}
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Teléfono (opcional)</label>
                    <input type="text" name="phone"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 
                                  focus:ring-indigo-500 focus:outline-none transition"
                        placeholder="+506 0000 0000">
                </div>

                {{-- MESSAGE --}}
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Mensaje</label>
                    <textarea name="message" rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 
                                     focus:ring-indigo-500 focus:outline-none transition"
                        placeholder="Cuéntanos cómo podemos ayudarte"></textarea>
                </div>

                <button
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-lg 
                           transition shadow-md">
                    Enviar mensaje
                </button>

            </form>
        </div>

        {{-- CONTACT INFO --}}
        <div class="space-y-10">

            <div class="bg-white shadow-lg rounded-xl p-8 border border-indigo-100">
                <h2 class="text-2xl font-bold text-indigo-700 mb-6">Información de contacto</h2>

                <div class="space-y-6 text-gray-700">

                    <div>
                        <h4 class="font-semibold text-indigo-600">Teléfono</h4>
                        <p>+506 0000 0000</p>
                    </div>

                    <div>
                        <h4 class="font-semibold text-indigo-600">Correo electrónico</h4>
                        <p>contacto@worklab360.com</p>
                    </div>

                    <div>
                        <h4 class="font-semibold text-indigo-600">Dirección</h4>
                        <p>City, State — Costa Rica</p>
                    </div>

                </div>
            </div>

            {{-- MAP --}}
            <div class="rounded-xl overflow-hidden shadow-lg border border-indigo-100">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3934.075613968218!2d-84.09171348557444!3d9.928069876315785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e33e9658c1f1%3A0x7f65c0e2d7e8d8be!2sSan%20Jos%C3%A9%2C%20Costa%20Rica!5e0!3m2!1ses-419!2scr!4v1700000000000"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>


        </div>

    </section>

    {{-- FINAL MESSAGE --}}
    <section class="max-w-6xl mx-auto px-6 mt-16 mb-20 text-center">
        <h3 class="text-2xl font-bold text-indigo-700 mb-4">¿Listo para transformar tu práctica?</h3>
        <p class="text-gray-600 max-w-2xl mx-auto mb-6">
            Estamos aquí para ayudarte a digitalizar tu laboratorio o consultorio y ofrecer tratamientos modernos,
            rápidos y precisos.
        </p>

        <a href="#"
            class="inline-flex items-center gap-2 border-2 border-indigo-600 text-indigo-700 
          hover:bg-indigo-600 hover:text-white font-semibold py-3 px-8 rounded-lg 
          transition shadow-md">
            Agenda una asesoría
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </section>

</x-layouts.app>
