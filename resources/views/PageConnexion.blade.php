@extends('layouts.app1')

@section('content')
@endsection

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">


                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
<x-auth-card>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Nom')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus />
        </div>
        <div>
            <x-label for="prenoms" :value="__('prenoms')" />

            <x-input id="prenoms" class="block mt-1 w-full" type="text" name="prenoms" :value="old('prenoms')" required
                autofocus />
        </div>
        <div>
            <select name="fonction" id="fonction" required class="form-control my-2" id="">
                <option value="">Choisir une fonction</option>
                <option value="Procureur">Procureur</option>
                <option value="BOP">Bureau d'ordre pénal</option>
                <option value="OPJ">Officier de police</option>
            </select>

        </div>
        <div>
            <x-label for="tel1" :value="__('Phone1')" />

            <x-input id="tel1" class="block mt-1 w-full" type="text" name="tel1" :value="old('tel1')" required
                autofocus />
        </div>
        <div>
            <x-label for="tel2" :value="__('Phone2')" />

            <x-input id="tel2" class="block mt-1 w-full" type="text" name="tel2" :value="old('tel2')" required
                autofocus />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')" />

            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                required />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <input type="submit" value="Envoyer">
        </div>
    </form>
</x-auth-card>
