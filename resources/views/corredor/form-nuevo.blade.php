<?php
use App\Models\Ciudad;
use App\Models\Provincia;
use App\Models\Nacionalidad;
use App\Models\Equipo;
use App\Models\Corredor;
/** @var Corredor $corredor */
/** @var Ciudad[] $ciudades */
/** @var Provincia[] $provincias */
/** @var Nacionalidad[] $nacionalidades */
/** @var Equipo[] $equipos */
?>
@extends('layouts.main')

@section('title', 'Inscripción corredor')

@section('main')
    <h1>Formulario de Inscripción</h1>

    <form id="crear" action="{{ url('corredor/nuevo') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}">
            @if($errors->has('nombre'))
            <div class="alert alert-danger">{{ $errors->first('nombre') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" class="form-control" value="{{ old('apellido') }}">
            @if($errors->has('apellido'))
            <div class="alert alert-danger">{{ $errors->first('apellido') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="fecha_nac">Fecha de nacimiento</label>
            <input type="date" id="fecha_nac" name="fecha_nac" class="form-control" value="{{ old('fecha_nac') }}">
            @if($errors->has('fecha_nac'))
                <div class="alert alert-danger">{{ $errors->first('fecha_nac') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="domicilio">Domicilio</label>
            <input type="text" id="domicilio" name="domicilio" class="form-control" value="{{ old('domicilio') }}">
            @if($errors->has('domicilio'))
                <div class="alert alert-danger">{{ $errors->first('domicilio') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="id_ciudad">Ciudad</label>
            <select name="id_ciudad" id="id_ciudad" class="form-control">
                <option value="">Elegí la ciudad</option>
                @foreach($ciudades as $ciudad)
                    <option value="{{ $ciudad->id_ciudad }}">{{ $ciudad->ciudad }}</option>
                @endforeach
            </select>
            @if($errors->has('id_ciudad'))
                <div class="alert alert-danger">{{ $errors->first('id_ciudad') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="id_provincia">Provincia</label>
            <select name="id_provincia" id="id_provincia" class="form-control">
                <option value="">Elegí la provincia</option>
                @foreach($provincias as $provincia)
                    <option value="{{ $provincia->id_provincia }}">{{ $provincia->provincia }}</option>
                @endforeach
            </select>
            @if($errors->has('id_provincia'))
                <div class="alert alert-danger">{{ $errors->first('id_provincia') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="dni">DNI / Pasaporte</label>
            <input type="number" id="dni" name="dni" class="form-control" value="{{ old('dni') }}">
            @if($errors->has('dni'))
            <div class="alert alert-danger">{{ $errors->first('dni') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="id_nacionalidad">Nacionalidad</label>
            <select name="id_nacionalidad" id="id_nacionalidad" class="form-control">
                <option value="">Elegí nacionalidad</option>
                @foreach($nacionalidades as $nacionalidad)
                    <option value="{{ $nacionalidad->id_nacionalidad }}">{{ $nacionalidad->nacionalidad }}</option>
                @endforeach
            </select>
            @if($errors->has('id_nacionalidad'))
                <div class="alert alert-danger">{{ $errors->first('id_nacionalidad') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
            @if($errors->has('email'))
            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" class="form-control" value="{{ old('telefono') }}"
                placeholder="Ejemplo de formato 11-9999-9999 o 15-9999-9999">
            @if($errors->has('dni'))
            <div class="alert alert-danger">{{ $errors->first('telefono') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="como_me_entere">Indicar cómo se enteró del evento</label>
            <input type="text" id="como_me_entere" name="como_me_entere" class="form-control" value="{{ old('como_me_entere') }}">
            @if($errors->has('como_me_entere'))
            <div class="alert alert-danger">{{ $errors->first('como_me_entere') }}</div>
            @endif
        </div>      
        <div class="form-group">
            <label for="id_equipo">En qué equipo desea participar? </label>
            <select name="id_equipo" id="id_equipo" class="form-control">
                <option value="">Elegí el equipo</option>
                @foreach($equipos as $equipo)
                    <option value="{{ $equipo->id_equipo }}">{{ $equipo->equipo }}</option>
                @endforeach
            </select>
            @if($errors->has('id_equipo'))
                <div class="alert alert-danger">{{ $errors->first('id_equipo') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="comentarios">Comentarios / Sugerencias</label>
            <textarea id="comentarios" name="comentarios" class="form-control">{{ old('comentarios') }}</textarea>
            @if($errors->has('comentarios'))
                <div class="alert alert-danger">{{ $errors->first('comentarios') }}</div>
            @endif
        </div>
        <button class="btn btn-primary btn-block">Inscribirme</button>
    </form>
@endsection
