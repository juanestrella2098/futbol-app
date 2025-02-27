@extends('layouts.app')
@section('title', 'Guía de equipos')
@section('content')

    <h1 class="text-3xl font-bold text-blue-800 mb-6">Guía de Equipos</h1>

    @if (session('mensaje'))
        <div id='toast'
            class="fixed bottom-5 right-5 flex items-center bg-green-600 text-white text-sm font-semibold px-6 py-3 rounded-lg shadow-lg animate-slide-in">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
            </svg>
            {{ session('mensaje') }}
        </div>

        <!-- Script para desaparecer el toast después de 3 segundos -->
        <script>
            setTimeout(() => {
                document.getElementById('toast').classList.add('opacity-0');
                setTimeout(() => document.getElementById('toast').remove(), 500);
            }, 3000);
        </script>
    @endif
    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="border border-gray-300 p-2">Nombre</th>
                <th class="border border-gray-300 p-2">Estadio</th>
                <th class="border border-gray-300 p-2">Títulos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $key => $equipo)
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 p-2">
                        <a href="{{ route('equipos.show', $equipo->id) }}"
                            class="text-blue-700 hover:underline">{{ $equipo->nombre }}</a>
                    </td>
                    <td class="border border-gray-300 p-2">{{ $equipo->estadio->nombre }}</td>
                    <td class="border border-gray-300 p-2">{{ $equipo->titulos }}</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <a href="{{ route('equipos.edit', $equipo->id) }}" class="text-blue-700 hover:underline">📝</a>
                        <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-700 hover:underline">❌</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p class="mt-10 text-center">
        <a href="/equipos/create" class="bg-blue-700 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full">Crear
            equipo</a>
    </p>
@endsection
