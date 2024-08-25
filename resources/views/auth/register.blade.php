@extends('layouts.app')

@section('titulo')
    Registro de Usuario
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-4">
        <div class="md:w-8/12">
            <img src="{{ asset('img/registrar.jpg') }}" alt="imagen registro de usuario">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="block mb-2 uppercase font-bold text-gray-500">
                        Nombre
                    </label>
                    <input id="name" type="text" name="name" placeholder="Ingrese su nombre"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}" />
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="block mb-2 uppercase font-bold text-gray-500">
                        Username
                    </label>
                    <input id="username" type="text" name="username" placeholder="Ingrese su nombre de usuario"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ old('username') }}" />
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

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
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"/>
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="block mb-2 uppercase font-bold text-gray-500">
                        Repetir Password
                    </label>
                    <input id="password_confirmation" type="password" name="password_confirmation"
                        placeholder="Ingrese nuevamente su contraseña"
                        class="border p-3 w-full rounded-lg @error('password_confirmation') border-red-500 @enderror" />
                    @error('password_confirmation')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" name="" id="" value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

            </form>
        </div>
    </div>
@endsection
