# WorkLab360

Aplicación web desarrollada con Laravel 12 y Livewire 3 para la conversión de videos AVI a MP4 usando FFmpeg.wasm en el cliente.

## 🚀 Características

- **Conversión de Videos**: Convierte archivos AVI a MP4 directamente en el navegador usando FFmpeg.wasm
- **Autenticación Completa**: Sistema de autenticación con Laravel Fortify
  - Registro de usuarios
  - Inicio de sesión
  - Recuperación de contraseña
  - Verificación de email
  - Autenticación de dos factores (2FA)
- **Interfaz Moderna**: Diseño responsive con Tailwind CSS
- **Seguridad**: Rate limiting, validación de datos, protección CSRF
- **Optimizado**: Código limpio y bien estructurado

## 📋 Requisitos

- PHP >= 8.2
- Composer
- Node.js >= 18 y npm
- SQLite (por defecto) o MySQL/PostgreSQL

## 🔧 Instalación

1. **Clonar el repositorio**
   ```bash
   git clone <repository-url>
   cd worklab360
   ```

2. **Instalar dependencias de PHP**
   ```bash
   composer install
   ```

3. **Instalar dependencias de Node.js**
   ```bash
   npm install
   ```

4. **Configurar el entorno**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configurar la base de datos**
   
   Para SQLite (por defecto):
   ```bash
   touch database/database.sqlite
   ```
   
   Para MySQL/PostgreSQL, edita el archivo `.env` con tus credenciales.

6. **Ejecutar migraciones**
   ```bash
   php artisan migrate
   ```

7. **Compilar assets**
   ```bash
   npm run build
   ```

8. **Iniciar el servidor de desarrollo**
   ```bash
   php artisan serve
   ```

   O usar el script de desarrollo que incluye Vite:
   ```bash
   composer run dev
   ```

## 🛠️ Desarrollo

### Scripts disponibles

- `composer run dev` - Inicia el servidor PHP, queue worker y Vite en modo desarrollo
- `composer run test` - Ejecuta los tests
- `npm run dev` - Inicia Vite en modo desarrollo
- `npm run build` - Compila los assets para producción

### Estructura del Proyecto

```
app/
├── Actions/Fortify/      # Acciones de autenticación
├── Http/Controllers/      # Controladores
├── Models/                # Modelos Eloquent
├── Notifications/         # Notificaciones por email
├── Providers/            # Service Providers
└── View/Components/      # Componentes Blade

resources/
├── css/                  # Estilos CSS
├── js/                   # JavaScript
│   ├── app.js           # Entrada principal
│   └── video-converter.js  # Lógica del convertidor
└── views/               # Vistas Blade

routes/
└── web.php              # Rutas web
```

## 🔐 Seguridad

- **Rate Limiting**: 
  - Login: 5 intentos por minuto por email/IP
  - Registro: 3 intentos por minuto por IP
  - Two-Factor: 5 intentos por minuto

- **Validación**: Todos los inputs son validados antes de procesarse
- **CSRF Protection**: Protección CSRF habilitada en todas las rutas
- **Password Hashing**: Contraseñas hasheadas con bcrypt

## 📝 Conversión de Videos

El convertidor de videos funciona completamente en el cliente usando FFmpeg.wasm:

- **Formato soportado**: AVI → MP4
- **Límite de tamaño**: 500MB por archivo
- **Proceso**: 
  1. El usuario selecciona o arrastra un archivo AVI
  2. El archivo se valida (extensión y tamaño)
  3. FFmpeg.wasm se carga en el navegador
  4. La conversión se realiza en el cliente
  5. El archivo MP4 resultante está listo para descargar

**Nota**: La conversión puede tardar varios minutos dependiendo del tamaño del archivo y la potencia del dispositivo.

## 🧪 Testing

Ejecutar los tests:

```bash
composer run test
```

O directamente con PHPUnit:

```bash
./vendor/bin/phpunit
```

## 📦 Tecnologías Utilizadas

- **Backend**: Laravel 12
- **Frontend**: Livewire 3, Tailwind CSS 4
- **Autenticación**: Laravel Fortify
- **Video Processing**: FFmpeg.wasm (@ffmpeg/ffmpeg)
- **Build Tool**: Vite
- **Base de Datos**: SQLite (por defecto)

## 📄 Licencia

Este proyecto está bajo la licencia MIT.

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Por favor:

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## 📧 Soporte

Para soporte, por favor abre un issue en el repositorio.

---

Desarrollado con ❤️ usando Laravel y Livewire
