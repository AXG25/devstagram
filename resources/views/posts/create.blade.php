@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@extends('layouts.app')

@section('titulo')
    Crear Post
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="{{ route('imagenes.store') }}" method="POST" enctype="multipart/form-data" id="dropzone"
                class="dropzone border-dashed border-2 border-zinc-950 w-full h-96 rounded flex flex-col justify-center items-center font-bold"
                action="">
                @csrf
            </form>
        </div>

        <div class="md:w-1/2 p-10 rounded-lg shadow-xl bg-white mt-10 md:mt-0">
            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf

                @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
                @endif

                <div class="mb-5">
                    <label for="titulo" class="block mb-2 uppercase font-bold text-gray-500">
                        Titulo
                    </label>
                    <input id="titulo" type="text" name="titulo" placeholder="Ingrese el titulo para este post"
                        class="border p-3 w-full rounded-lg @error('titulo') border-red-500 @enderror"
                        value="{{ old('titulo') }}" />
                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="descripcion" class="block mb-2 uppercase font-bold text-gray-500">
                        Descripcion
                    </label>
                    <textarea id="descripcion" name="descripcion" placeholder="Ingrese la descripción para este post"
                        class="border p-3 w-full rounded-lg @error('descripcion') border-red-500 @enderror">{{ old('titulo') }}</textarea>
                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" name="" id="" value="Publicar"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
