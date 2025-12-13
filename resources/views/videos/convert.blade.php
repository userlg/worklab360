<x-layouts.app title="Convertidor de videos">

    <div class="flex bg-gray-100 h-full">

        {{-- SIDEBAR --}}
        <x-dashboard.aside />

        {{-- CONTENIDO PRINCIPAL --}}
        <div class="flex-1 py-6 px-6 md:px-10">

            <div id="video-converter-container">

                <div class="max-w-xl mx-auto bg-white shadow-lg rounded-xl p-8 border border-indigo-100">

                    <h2 class="text-2xl font-bold text-indigo-700 mb-6 text-center">
                        Convertidor AVI → MP4
                    </h2>

                    {{-- Área drag & drop --}}
                    <div id="dropZone"
                        class="border-2 border-dashed border-indigo-300 rounded-lg p-10 text-center text-gray-500 cursor-pointer hover:border-indigo-500 transition mb-4">
                        Arrastra tu video AVI aquí o haz clic para seleccionar
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
                    <div class="w-full bg-gray-200 rounded-full h-4 mb-4 overflow-hidden">
                        <div id="progressBar" class="bg-green-600 h-4 w-0 transition-all"></div>
                    </div>

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
        {{-- FFmpeg --}}
        <script src="https://unpkg.com/@ffmpeg/ffmpeg@0.11.8/dist/ffmpeg.min.js" onload="initVideoConverter()"></script>

        <script>
            function initVideoConverter() {
                if (typeof FFmpeg === 'undefined') {
                    console.error('FFmpeg no se cargó correctamente');
                    return;
                }

                const {
                    createFFmpeg,
                    fetchFile
                } = FFmpeg;
                const ffmpeg = createFFmpeg({
                    log: true
                });

                const dropZone = document.getElementById('dropZone');
                const fileInput = document.getElementById('fileInput');
                const convertBtn = document.getElementById('convertBtn');
                const status = document.getElementById('status');
                const progressBar = document.getElementById('progressBar');
                const downloadLink = document.getElementById('downloadLink');

                let file = null;

                // Función para seleccionar archivo
                function handleFile(selectedFile) {
                    if (!selectedFile) return;

                    if (!selectedFile.name.toLowerCase().endsWith('.avi')) {
                        alert('Solo se permiten archivos AVI.');
                        return;
                    }

                    file = selectedFile;
                    status.textContent = `Archivo seleccionado: ${file.name}`;
                    convertBtn.disabled = false;
                    progressBar.style.width = '0%';
                    downloadLink.innerHTML = '';
                }

                // Click para abrir input
                dropZone.addEventListener('click', () => fileInput.click());

                // Drag & drop
                dropZone.addEventListener('dragover', e => {
                    e.preventDefault();
                    dropZone.classList.add('bg-indigo-50');
                });

                dropZone.addEventListener('dragleave', () => {
                    dropZone.classList.remove('bg-indigo-50');
                });

                dropZone.addEventListener('drop', e => {
                    e.preventDefault();
                    dropZone.classList.remove('bg-indigo-50');
                    if (e.dataTransfer.files.length) {
                        handleFile(e.dataTransfer.files[0]);
                    }
                });

                fileInput.addEventListener('change', e => {
                    if (e.target.files.length) {
                        handleFile(e.target.files[0]);
                    }
                });

                // Conversión
                convertBtn.addEventListener('click', async () => {
                    if (!file) return;

                    try {
                        status.textContent = 'Cargando FFmpeg...';
                        if (!ffmpeg.isLoaded()) await ffmpeg.load();

                        status.textContent = 'Convirtiendo video...';

                        ffmpeg.FS('writeFile', 'input.avi', await fetchFile(file));
                        await ffmpeg.run('-i', 'input.avi', 'output.mp4');

                        const data = ffmpeg.FS('readFile', 'output.mp4');
                        const url = URL.createObjectURL(
                            new Blob([data.buffer], {
                                type: 'video/mp4'
                            })
                        );

                        downloadLink.innerHTML = `
                            <a href="${url}"
                               download="${file.name.replace(/\.avi$/i, '.mp4')}"
                               class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                                Descargar MP4
                            </a>
                        `;

                        status.textContent = 'Conversión completada ✅';
                        progressBar.style.width = '100%';

                    } catch (err) {
                        console.error(err);
                        status.textContent = 'Ocurrió un error durante la conversión ❌';
                        progressBar.style.width = '0%';
                    }
                });
            }
        </script>
    @endpush

</x-layouts.app>
