/**
 * Video Converter - AVI to MP4
 * Handles client-side video conversion using FFmpeg.wasm
 */

class VideoConverter {
    constructor() {
        this.ffmpeg = null;
        this.file = null;
        this.downloadUrl = null;
        this.maxFileSize = 500 * 1024 * 1024; // 500MB limit
        
        this.elements = {
            dropZone: document.getElementById('dropZone'),
            fileInput: document.getElementById('fileInput'),
            convertBtn: document.getElementById('convertBtn'),
            status: document.getElementById('status'),
            progressBar: document.getElementById('progressBar'),
            downloadLink: document.getElementById('downloadLink'),
        };

        this.init();
    }

    init() {
        if (!this.elements.dropZone) {
            return;
        }

        this.setupEventListeners();
        this.loadFFmpeg();
    }

    async loadFFmpeg() {
        try {
            // Use the version from package.json
            const { createFFmpeg, fetchFile } = await import('@ffmpeg/ffmpeg');
            
            this.ffmpeg = createFFmpeg({
                log: true,
                progress: (p) => this.updateProgress(p.ratio),
            });

            // Preload FFmpeg for better UX
            if (!this.ffmpeg.isLoaded()) {
                this.updateStatus('Cargando FFmpeg...', 'info');
                await this.ffmpeg.load();
            }
        } catch (error) {
            this.updateStatus('Error al cargar FFmpeg. Por favor, recarga la página.', 'error');
            console.error('FFmpeg loading error:', error);
        }
    }

    setupEventListeners() {
        // Click to open file input
        this.elements.dropZone.addEventListener('click', () => {
            this.elements.fileInput.click();
        });

        // Drag and drop handlers
        this.elements.dropZone.addEventListener('dragover', (e) => {
            e.preventDefault();
            e.stopPropagation();
            this.elements.dropZone.classList.add('bg-indigo-50', 'border-indigo-500');
        });

        this.elements.dropZone.addEventListener('dragleave', () => {
            this.elements.dropZone.classList.remove('bg-indigo-50', 'border-indigo-500');
        });

        this.elements.dropZone.addEventListener('drop', (e) => {
            e.preventDefault();
            e.stopPropagation();
            this.elements.dropZone.classList.remove('bg-indigo-50', 'border-indigo-500');
            
            if (e.dataTransfer.files.length) {
                this.handleFile(e.dataTransfer.files[0]);
            }
        });

        // File input change
        this.elements.fileInput.addEventListener('change', (e) => {
            if (e.target.files.length) {
                this.handleFile(e.target.files[0]);
            }
        });

        // Convert button
        this.elements.convertBtn.addEventListener('click', () => {
            this.convert();
        });
    }

    validateFile(file) {
        // Check file extension
        if (!file.name.toLowerCase().endsWith('.avi')) {
            this.showError('Solo se permiten archivos AVI.');
            return false;
        }

        // Check file size
        if (file.size > this.maxFileSize) {
            const maxSizeMB = (this.maxFileSize / (1024 * 1024)).toFixed(0);
            this.showError(`El archivo es demasiado grande. Tamaño máximo: ${maxSizeMB}MB`);
            return false;
        }

        // Check if file is empty
        if (file.size === 0) {
            this.showError('El archivo está vacío.');
            return false;
        }

        return true;
    }

    handleFile(selectedFile) {
        if (!selectedFile) return;

        if (!this.validateFile(selectedFile)) {
            return;
        }

        this.file = selectedFile;
        this.updateStatus(`Archivo seleccionado: ${this.formatFileSize(this.file.size)} - ${this.file.name}`, 'success');
        this.elements.convertBtn.disabled = false;
        this.resetProgress();
        this.clearDownloadLink();
    }

    async convert() {
        if (!this.file) {
            this.showError('Por favor, selecciona un archivo primero.');
            return;
        }

        if (!this.ffmpeg) {
            this.updateStatus('FFmpeg aún se está cargando. Por favor, espera...', 'info');
            await this.loadFFmpeg();
        }

        try {
            this.elements.convertBtn.disabled = true;
            this.updateStatus('Preparando conversión...', 'info');

            // Ensure FFmpeg is loaded
            if (!this.ffmpeg.isLoaded()) {
                this.updateStatus('Cargando FFmpeg...', 'info');
                await this.ffmpeg.load();
            }

            this.updateStatus('Escribiendo archivo en memoria...', 'info');
            const fileData = await this.ffmpeg.fetchFile(this.file);
            this.ffmpeg.FS('writeFile', 'input.avi', fileData);

            this.updateStatus('Convirtiendo video a MP4... Esto puede tardar varios minutos.', 'info');
            await this.ffmpeg.run(
                '-i', 'input.avi',
                '-c:v', 'libx264',
                '-c:a', 'aac',
                '-preset', 'medium',
                '-crf', '23',
                'output.mp4'
            );

            this.updateStatus('Leyendo archivo convertido...', 'info');
            const data = this.ffmpeg.FS('readFile', 'output.mp4');

            // Clean up old download URL
            this.cleanupDownloadUrl();

            // Create download link
            const blob = new Blob([data.buffer], { type: 'video/mp4' });
            this.downloadUrl = URL.createObjectURL(blob);
            
            const outputFileName = this.file.name.replace(/\.avi$/i, '.mp4');
            this.showDownloadLink(this.downloadUrl, outputFileName);

            this.updateStatus('Conversión completada exitosamente ✅', 'success');
            this.updateProgress(1);

            // Clean up input file from memory
            this.ffmpeg.FS('unlink', 'input.avi');
            this.ffmpeg.FS('unlink', 'output.mp4');

            this.elements.convertBtn.disabled = false;

        } catch (error) {
            console.error('Conversion error:', error);
            this.updateStatus('Ocurrió un error durante la conversión. Por favor, intenta con otro archivo.', 'error');
            this.resetProgress();
            this.elements.convertBtn.disabled = false;
        }
    }

    updateProgress(ratio) {
        const percentage = Math.min(Math.max(ratio * 100, 0), 100);
        this.elements.progressBar.style.width = `${percentage}%`;
        
        // Update progress text if element exists
        const progressText = document.getElementById('progressText');
        if (progressText) {
            if (percentage > 0 && percentage < 100) {
                progressText.textContent = `${Math.round(percentage)}% completado`;
            } else if (percentage >= 100) {
                progressText.textContent = 'Completado';
            } else {
                progressText.textContent = '';
            }
        }
    }

    resetProgress() {
        this.elements.progressBar.style.width = '0%';
    }

    updateStatus(message, type = 'info') {
        this.elements.status.textContent = message;
        
        // Remove previous status classes
        this.elements.status.classList.remove('text-gray-600', 'text-green-600', 'text-red-600', 'text-blue-600');
        
        // Add appropriate class based on type
        switch (type) {
            case 'success':
                this.elements.status.classList.add('text-green-600');
                break;
            case 'error':
                this.elements.status.classList.add('text-red-600');
                break;
            case 'info':
                this.elements.status.classList.add('text-blue-600');
                break;
            default:
                this.elements.status.classList.add('text-gray-600');
        }
    }

    showError(message) {
        this.updateStatus(message, 'error');
        setTimeout(() => {
            this.updateStatus('', 'info');
        }, 5000);
    }

    showDownloadLink(url, fileName) {
        this.elements.downloadLink.innerHTML = `
            <a href="${url}"
               download="${fileName}"
               class="inline-block px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition font-medium">
                Descargar MP4
            </a>
        `;
    }

    clearDownloadLink() {
        this.elements.downloadLink.innerHTML = '';
        this.cleanupDownloadUrl();
    }

    cleanupDownloadUrl() {
        if (this.downloadUrl) {
            URL.revokeObjectURL(this.downloadUrl);
            this.downloadUrl = null;
        }
    }

    formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return Math.round(bytes / Math.pow(k, i) * 100) / 100 + ' ' + sizes[i];
    }
}

// Initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        new VideoConverter();
    });
} else {
    new VideoConverter();
}
