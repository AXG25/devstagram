@extends('layouts.app')

@section('titulo')
    Iniciar Sesion
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-4 md:items-center">
        <div class="md:w-8/12">
            <img src="{{ asset('img/login.jpg') }}" alt="imagen login de usuario">
        </div>
        <div class="md:w-4/12 p-6 rounded-lg shadow-xl bg-white">
            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf

                @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
                @endif

                <div class="mb-5">
                    <label for="email" class="block mb-2 uppercase font-bold text-gray-500">
                        Email
                    </label>
                    <input id="email" type="email" name="email" placeholder="Ingrese su correo electronico"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}" />
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="block mb-2 uppercase font-bold text-gray-500">
                        Password
                    </label>
                    <input id="password" type="password" name="password" placeholder="Ingrese su contraseña"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" />
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5 ">
                    <input type="checkbox" name="remember" id="remember" />
                    <label for="remember" class="text-sm text-gray-500">Recordarme</label>
                </div>

                <input type="submit" name="" id="" value="Iniciar Sesion"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

            </form>
        </div>
    </div>
@endsection
