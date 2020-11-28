@section('titulo', 'Registro')

<x-guest-layout>
    

    
    <x-authentication-card>
        
        <x-slot name="logo2">
            <x-authentication-card-logo2-registro />
    
        </x-slot>

            <x-slot name="logo">
                <x-authentication-card-logo-registro />
                <p class="text-4xl font-black">REGISTRATE</p>
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Nombre') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        placeholder="Nombre" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="ap_paterno" value="{{ __('Apellido paterno') }}" />
                    <x-jet-input id="ap_paterno" class="block mt-1 w-full" type="text" name="ap_paterno"
                        :value="old('ap_paterno')" placeholder="Apellido Paterno" required autofocus autocomplete="ap_paterno" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="ap_materno" value="{{ __('Apellido materno') }}" />
                    <x-jet-input id="ap_materno" class="block mt-1 w-full" type="text" name="ap_materno"
                        :value="old('ap_materno')" placeholder="Apellido Materno" required autofocus
                        autocomplete="ap_materno" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Correo Electronico') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        placeholder="Correo Electrónico" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                        placeholder="*********" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" placeholder="*********" required
                        autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="id_tipo_usuario" value="{{ __('Tipo Usuario') }}" />
                    <select name="id_tipo_usuario" class="block mt-1 w-full" required>
                        <option>Seleccione uno...</option>
                        <option value="1">Alumno</option>
                        <option value="2">Docente</option>
                        <option value="3">Aspirante</option>
                    </select>

                <div class="flex items-center mt-4">

                    <x-jet-button
                        class="justify-center hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-screen">
                        {{ __('Registrate') }}
                    </x-jet-button>
                </div>

                <div class="flex  mt-4">
                    <a class="underline w-screen text-center text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>


                </div>
            </form>


    </x-authentication-card>
</x-guest-layout>