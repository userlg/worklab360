<x-layouts.app title="Restablecer contraseña">

    {{-- HERO RESET PASSWORD --}}
    <section
        class="pt-20 pb-16 bg-gradient-to-r from-indigo-800 to-purple-600 text-indigo-50 rounded-xl shadow-lg mx-4 md:mx-10 mt-6">
        <div class="max-w-4xl mx-auto text-center px-6">

            <h1 class="text-4xl md:text-5xl font-bold drop-shadow-md">
                Restablece tu contraseña
            </h1>

            <p class="mt-4 text-lg md:text-xl text-white/90 max-w-2xl mx-auto">
                Crea una nueva contraseña segura para volver a acceder a tu cuenta en
                <span class="text-purple-200 font-semibold">WorkLab360</span>.
            </p>

        </div>
    </section>

    {{-- FORMULARIO --}}
    <section class="max-w-3xl mx-auto mt-20 px-6">
        <div class="bg-white rounded-xl shadow-lg p-8 border border-indigo-100">

            <h2 class="text-2xl font-bold text-indigo-700 mb-6 text-center">
                Nueva contraseña
            </h2>

            {{-- ERRORES --}}
            @if ($errors->any())
                <div class="mb-6 bg-red-50 border border-red-200 text-red-700 rounded-lg p-4 text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                {{-- TOKEN --}}
                <input type="hidden" name="token" value="{{ request()->route('token') }}">

                {{-- EMAIL --}}
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">
                        Correo electrónico
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email', request()->email) }}"
                        required autofocus
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- PASSWORD --}}
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">
                        Nueva contraseña
                    </label>
                    <input id="password" type="password" name="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                    @error('password')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- CONFIRM PASSWORD --}}
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">
                        Confirmar contraseña
                    </label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                </div>

                {{-- BOTÓN --}}
                <div class="text-center">
                    <button type="submit"
                        class="w-full md:w-auto px-8 py-3 bg-indigo-700 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-800 transition">
                        Restablecer contraseña
                    </button>
                </div>

            </form>

            {{-- LOGIN LINK --}}
            <p class="text-center text-gray-600 mt-6">
                ¿Recordaste tu contraseña?
                <a href="{{ route('login') }}" class="text-indigo-700 font-semibold hover:underline">
                    Inicia sesión
                </a>
            </p>

        </div>
    </section>

</x-layouts.app>
