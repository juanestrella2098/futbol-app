@extends('layouts.app')
@section('title', "Guía de equipos")
@section('content')
<form action="{{ route('equipos.update', $equipo->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $equipo->nombre) }}" required
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 
            @error('nombre') border-red-500 @enderror" />
        @error('nombre')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="titulos" class="block text-sm font-medium text-gray-700 mb-1">Títulos:</label>
        <input type="number" name="titulos" id="titulos" value="{{ old('titulos', $equipo->titulos) }}" required
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 
            @error('titulos') border-red-500 @enderror" />
        @error('titulos')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="estadio_id" class="block text-sm font-medium text-gray-700 mb-1">Estadio:</label>
        <select name="estadio_id" id="estadio_id" required
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 
            @error('estadio_id') border-red-500 @enderror">
            @foreach ($estadios as $estadio)
                <option value="{{ $estadio->id }}" {{ $estadio->id == $equipo->estadio_id ? 'selected' : '' }}>
                    {{ $estadio->nombre }}
                </option>
            @endforeach
        </select>
        @error('estadio_id')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="escudo" class="block text-sm font-medium text-gray-700 mb-1">Escudo:</label>
        <input type="file" name="escudo" id="escudo" 
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
        @if ($equipo->escudo)
            <p class="mt-2 text-sm text-gray-500">Escudo actual:</p>
            <img src="{{ asset('storage/' . $equipo->escudo) }}" alt="Escudo de {{ $equipo->nombre }}" class="h-16 mt-2">
        @endif
    </div>

    <button type="submit"
        class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-lg shadow hover:bg-blue-600 focus:ring focus:ring-blue-300">
        Actualizar Equipo
    </button>
</form>
@endsection 