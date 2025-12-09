<x-layouts.app title="Registro">

    {{-- HERO REGISTRO --}}
    <section
        class="pt-20 pb-16 bg-gradient-to-r from-indigo-800 to-purple-600 text-indigo-50 rounded-xl shadow-lg mx-4 md:mx-10 mt-6">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h1 class="text-4xl md:text-5xl font-bold drop-shadow-md">
                Crea tu cuenta en <span class="text-purple-200">WorkLab360</span>
            </h1>
            <p class="mt-4 text-lg md:text-xl text-white/90 max-w-2xl mx-auto">
                Empieza a digitalizar tus flujos clínicos y de laboratorio. Regístrate ahora y accede a todas nuestras
                herramientas.
            </p>
        </div>
    </section>

    {{-- FORMULARIO DE REGISTRO --}}
    <section class="max-w-3xl mx-auto mt-20 px-6">
        <div class="bg-white rounded-xl shadow-lg p-8 border border-indigo-100">

            <h2 class="text-2xl font-bold text-indigo-700 mb-6 text-center">Registro de Usuario</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{-- Nombre --}}
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre completo</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                    @error('name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Correo electrónico</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Contraseña --}}
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Contraseña</label>
                    <input id="password" type="password" name="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                    @error('password')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Confirmar Contraseña --}}
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">Confirmar
                        Contraseña</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                </div>

                {{-- BOTÓN REGISTRARSE --}}
                <div class="text-center">
                    <button type="submit"
                        class="w-full md:w-auto px-8 py-3 bg-indigo-700 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-800 transition">
                        Crear Cuenta
                    </button>
                </div>

            </form>

            {{-- LOGIN LINK --}}
            <p class="text-center text-gray-600 mt-6">
                ¿Ya tienes cuenta?
                <a href="{{ route('login') }}" class="text-indigo-700 font-semibold hover:underline">Inicia sesión</a>
            </p>

        </div>
    </section>

</x-layouts.app>
