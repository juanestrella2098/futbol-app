@extends('layouts.app')
@section('title', " Guía de Equipos" )
@section('content')
<x-equipo
   :nombre="$equipo['nombre']"
   :estadio="$estadio"
   :titulos="$equipo['titulos']"
   :escudo="$equipo['escudo'] ?? ''" 
/>
<p class="mt-4 text-center">
   <a href="/equipos" class="text-blue-700 hover:underline">Volver</a>
</p>
@endsection