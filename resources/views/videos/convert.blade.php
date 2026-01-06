<x-layouts.app title="Convertidor de videos">

    <div class="flex bg-gray-100 h-full">

        {{-- SIDEBAR --}}
        <x-dashboard.aside />

        {{-- CONTENIDO PRINCIPAL --}}
        <div class="flex-1 py-6 px-6 md:px-10">

            <div id="video-converter-container">

                <div class="max-w-xl mx-auto bg-white shadow-lg rounded-xl p-8 border border-indigo-100">

                    <h2 class="text-2xl font-bold text-indigo-700 mb-2 text-center">
                        Convertidor AVI → MP4
                    </h2>
                    <p class="text-sm text-gray-500 text-center mb-6">
                        Convierte tus videos AVI a formato MP4 directamente en tu navegador
                    </p>

                    {{-- Área drag & drop --}}
                    <div id="dropZone"
                        class="border-2 border-dashed border-indigo-300 rounded-lg p-10 text-center text-gray-500 cursor-pointer hover:border-indigo-500 transition mb-4">
                        <svg class="mx-auto h-12 w-12 text-gray-400 mb-2" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="text-base font-medium">Arrastra tu video AVI aquí</p>
                        <p class="text-sm mt-1">o haz clic para seleccionar</p>
                        <p class="text-xs mt-2 text-gray-400">Tamaño máximo: 500MB</p>
                    </div>

                    {{-- Input oculto --}}
                    <input type="file" id="fileInput" accept=".avi,video/x-msvideo" class="hidden">

                    {{-- Botón --}}
                    <button id="convertBtn"
                        class="px-6 py-2 bg-indigo-700 text-white rounded-lg hover:bg-indigo-800 transition w-full mb-4 disabled:opacity-50"
                        disabled>
                        Convertir a MP4
                    </button>

                    {{-- Barra de progreso --}}
                    <div class="w-full bg-gray-200 rounded-full h-4 mb-2 overflow-hidden">
                        <div id="progressBar" class="bg-green-600 h-4 w-0 transition-all duration-300"></div>
                    </div>
                    <p id="progressText" class="text-xs text-gray-500 text-center mb-4"></p>

                    {{-- Mensajes de estado --}}
                    <p id="status" class="text-gray-600 text-center mb-4"></p>

                    {{-- Enlace de descarga --}}
                    <div id="downloadLink" class="text-center"></div>

                </div>
            </div>

        </div>
    </div>

    {{-- SCRIPTS --}}
    @push('scripts')
        @vite(['resources/js/video-converter.js'])
    @endpush

</x-layouts.app>
