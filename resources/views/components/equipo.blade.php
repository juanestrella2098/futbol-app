<div class="equipo border rounded-lg shadow-md p-4 bg-white">
    @if ($escudo)
       <p>
            <img src="{{ asset('storage/' . $escudo) }}" alt="Escudo de {{ $nombre }}" class="h-8 w-8 object-cover rounded-full">
        </p>
    @endif
    <h2 class="text-xl font-bold text-blue-800">{{ $nombre }}</h2>
    <p><strong>Estadio:</strong> {{ $estadio }}</p>
    <p><strong>Títulos:</strong> {{ $titulos }}</p>
</div>