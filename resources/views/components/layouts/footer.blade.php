<div class="bg-gradient-to-r bg-indigo-800 text-indigo-50 mt-10">
    <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row justify-between items-center gap-4">

        <div class="text-sm">
            © {{ date('Y') }} WorkLab360.
        </div>

        @guest
            <div class="flex gap-4">
                <a href="{{ route('terms') }}" class="hover:text-gray-200 transition">Términos</a>
                <a href="{{ route('privacy') }}" class="hover:text-gray-200 transition">Privacidad</a>
                <a href="{{ route('contact') }}" class="hover:text-gray-200 transition">Contacto</a>
            </div>
        @endguest

    </div>
</div>
