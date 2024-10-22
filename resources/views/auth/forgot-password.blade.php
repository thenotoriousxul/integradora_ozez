<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('¿Olvidaste tu contraseña? No hay problema. Solo necesitamos tu dirección de correo electrónico y te enviaremos un enlace para restablecer tu contraseña que te permitirá elegir una nueva.') }}
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />


    <form method="POST" action="{{ route('password.email') }}" class="w-full" novalidate>
        @csrf

        <div>
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Enviar enlace para restablecer la contraseña') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
            let emailInput = document.getElementById('email');
            if (!emailInput.value) {
                event.preventDefault();
                alert('Por favor, ingresa tu dirección de correo electrónico.');
            }
        });
    </script>
</x-guest-layout>
