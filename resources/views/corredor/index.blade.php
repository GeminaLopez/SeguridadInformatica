<?php
/** @var \App\Models\Corredor[] $corredores */

//var_dump($corredores);
?>
@extends('layouts.main')

@section('title', 'Listado de corredores')

@section('main')
    <h2>Corredores</h2>

    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    @if(empty($corredores))
        <p>Aún no hay inscriptos.</p>
    @else
        <table id="corredoresTable" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Corredor N°</th>
                <th>Nombre Completo</th>
                <th>Equipo</th>
                <th>Comentarios</th>
            </tr>
            </thead>
            <tbody>
                @foreach($corredores as $corredor)
                <tr>
                    <td>{{ $corredor->id_corredor }}</td>
                    <td>{{ $corredor->nombre }} {{ $corredor->apellido }}</td>
                    <td>{{ $corredor->equipos->equipo }}</td>
                    <td>{{ $corredor->comentarios }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
