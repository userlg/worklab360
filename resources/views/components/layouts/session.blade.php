@if (session('status') || session('resent'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = true, 50)" x-show="show" x-transition.opacity.duration.400ms
        x-transition.scale.origin.top.duration.400ms class="fixed top-6 inset-x-0 z-[200] flex justify-center px-4">

        <div
            class="
            max-w-md w-full
            bg-white dark:bg-gray-900
            border border-indigo-200 dark:border-indigo-700/40
            shadow-xl dark:shadow-indigo-900/40
            rounded-xl p-4 flex items-center gap-3
        ">
            {{-- Icono --}}
            <div class="text-indigo-600 dark:text-indigo-300 text-2xl">
                @if (session('status') === 'verification-link-sent' || session('resent'))
                    ✉️
                @else
                    ✅
                @endif
            </div>

            {{-- Mensaje --}}
            <p class="text-gray-700 dark:text-gray-100 font-medium text-sm">
                @if (session('status') === 'verification-link-sent')
                    {{ __('A new email verification link has been emailed to you!') }}
                @elseif(session('resent'))
                    {{ __('Un nuevo email de verificación ha sido enviado.') }}
                @else
                    {{ session('status') }}
                @endif
            </p>
        </div>
    </div>
@endif
