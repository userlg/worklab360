<x-layouts.app title="Recuperar Contraseña">

    {{-- HERO --}}
    <section
        class="pt-20 pb-16 bg-gradient-to-r from-indigo-800 to-purple-600 text-indigo-50 rounded-xl shadow-lg mx-4 md:mx-10 mt-6">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h1 class="text-4xl md:text-5xl font-bold drop-shadow-md">
                Recupera tu cuenta en <span class="text-purple-200">WorkLab360</span>
            </h1>
            <p class="mt-4 text-lg md:text-xl text-white/90 max-w-2xl mx-auto">
                Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña de forma segura.
            </p>
        </div>
    </section>

    {{-- FORMULARIO DE RECUPERACIÓN --}}
    <section class="max-w-3xl mx-auto mt-20 px-6">
        <div class="bg-white rounded-xl shadow-lg p-8 border border-indigo-100">

            <h2 class="text-2xl font-bold text-indigo-700 mb-6 text-center">Restablecer Contraseña</h2>

            @if (session('status'))
                <div class="mb-4 text-green-600 font-semibold text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                {{-- Email --}}
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Correo electrónico</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- BOTÓN ENVIAR --}}
                <div class="text-center">
                    <button type="submit"
                        class="w-full md:w-auto px-8 py-3 bg-indigo-700 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-800 transition">
                        Enviar enlace de recuperación
                    </button>
                </div>

            </form>

            {{-- LOGIN LINK --}}
            <p class="text-center text-gray-600 mt-6">
                ¿Recordaste tu contraseña?
                <a href="{{ route('login') }}" class="text-indigo-700 font-semibold hover:underline">Inicia sesión</a>
            </p>

            {{-- REGISTER LINK --}}
            <p class="text-center text-gray-600 mt-2">
                ¿No tienes cuenta?
                <a href="{{ route('register') }}" class="text-indigo-700 font-semibold hover:underline">Regístrate
                    aquí</a>
            </p>

        </div>
    </section>

</x-layouts.app>
