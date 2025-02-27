@extends('layouts.app')
@section('title', "Guía de equipos")
@section('content')
<form action="{{ route('equipos.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
    @csrf
    <div class="mb-4">
        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="titulos" class="block text-sm font-medium text-gray-700 mb-1">Títulos:</label>
        <input type="number" name="titulos" id="titulos" required
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="estadio_id" class="block text-sm font-medium text-gray-700 mb-1">Estadio:</label>
        <select name="estadio_id" id="estadio_id" required
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @foreach ($estadios as $estadio)
                <option value="{{ $estadio->id }}">{{ $estadio->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label for="escudo" class="block text-sm font-medium text-gray-700 mb-1">Escudo:</label>
        <input type="file" name="escudo" id="escudo"
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <button type="submit"
        class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-lg shadow hover:bg-blue-600 focus:ring focus:ring-blue-300">
        Crear Equipo
    </button>
</form>
@endsection 