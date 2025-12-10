<div>
    <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('{{ $formId }}').submit();"
        {{ $attributes->merge(['class' => 'hover:text-purple-300 transition ease-in duration-300']) }}>
        {{ $slot }}
    </a>

    <form id="{{ $formId }}" method="POST" action="{{ route('logout') }}" class="hidden">
        @csrf
    </form>
</div>
