@props([
    'icon' => '❓',
    'title' => 'Título',
    'text' => 'Descripción del servicio',
    'center' => false,
    'link' => null,
    'button' => null,
])

<div
    class="bg-white shadow-lg rounded-xl p-6 border border-indigo-100 hover:shadow-xl hover:-translate-y-1 transition {{ $center ? 'text-center' : '' }}">

    <div class="text-indigo-600 text-4xl mb-4">
        {{ $icon }}
    </div>

    <h3 class="text-xl font-semibold text-gray-800">
        {{ $title }}
    </h3>

    <p class="mt-2 text-gray-600">
        {{ $text }}
    </p>

    @if ($link && $button)
        <a href="{{ $link }}"
            class="inline-block mt-4 px-6 py-2 text-sm font-semibold rounded-lg bg-indigo-700 text-white shadow-md hover:bg-indigo-800 transition">
            {{ $button }}
        </a>
    @endif
</div>
