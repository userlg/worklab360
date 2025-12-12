@props([
    'icon' => '❔',
    'title' => 'Título del servicio',
    'text' => 'Descripción del servicio',
])

<div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition duration-300 group">

    {{-- ICONO --}}
    <div
        class="w-16 h-16 bg-indigo-600 text-white flex items-center justify-center rounded-full mb-6
                group-hover:bg-purple-600 transition text-3xl">
        {{ $icon }}
    </div>

    {{-- TÍTULO --}}
    <h3 class="text-xl font-semibold mb-3 text-gray-800">
        {{ $title }}
    </h3>

    {{-- DESCRIPCIÓN --}}
    <p class="text-gray-600">
        {{ $text }}
    </p>
</div>
