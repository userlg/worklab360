<div class="absolute z-[200] w-full">
    <div>
        {{-- Session Messages --}}
        @if (session('status'))
            <div id="session" role="alert"
                class="text-sm font-semibold text-green-900 dark:text-green-100 
        bg-green-100 dark:bg-green-800/80 
        border border-green-300 dark:border-green-600 
        w-full max-w-3xl mx-auto mt-4 p-4 
        rounded-xl shadow-md dark:shadow-green-600/30 
        transition-all duration-300 ease-in-out">

                <p class="text-center">
                    @if (session('status') === 'verification-link-sent')
                        {{ __('A new email verification link has been emailed to you!') }}
                    @elseif(session('resent'))
                        {{ __('Un nuevo email de verificación ha sido enviado.') }}
                    @else
                        {{ session('status') }}
                    @endif
                </p>
            </div>
        @endif
    </div>
</div>
