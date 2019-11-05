<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Corredor extends Model
{
    // Configuro la tabla.
    protected $table = "corredores";
    // Configuro la PK.
    protected $primaryKey = 'id_corredor';

    /** @var array La lista de campos que se pueden cargar masivamente. */
    protected $fillable = ['nombre', 'apellido', 'fecha_nac','domicilio','dni','id_nacionalidad','email','telefono','id_equipo','comentarios','id_ciudad','id_provincia'];

    /** @var array Las reglas de validación. */
    /* alpha = The field under validation must be entirely alphabetic characters. 
       date = The field under validation must be a valid, non-relative date according to the strtotime PHP function.
       alpha_num = The field under validation must be entirely alpha-numeric characters.
       numeric = The field under validation must be numeric.
    */
    public static $rules = [
        'nombre' => 'required|alpha|min:3',
        'apellido' => 'required|alpha|min:3',
        'fecha_nac' => 'required|date',
        'domicilio' => 'required|alpha_num|min:10',
        'dni' => 'required|numeric|min:8',
        'id_nacionalidad' => 'required|integer|exists:nacionalidades',
        'email' => 'required|email',
        'telefono' => 'required|regex:/^([1,5]{2})-[0-9]{4}-[0-9]{4}$/',
        'id_equipo' => 'required|integer|exists:equipos',
        'comentarios' => 'required|alpha|min:6',
        'id_ciudad' => 'required|integer|exists:ciudades',
        'id_provincia' => 'required|integer|exists:provincias'
    ];

    /** @var array Los mensajes de error de las $rules */
    public static $errorMessages = [
        'nombre.required' => 'El nombre del corredor debe tener un valor.',
        'nombre.alpha' => 'El nombre del corredor solo acepta valores alfabéticos',
        'nombre.min' => 'El nombre del corredor debe tener al menos :min caracteres.',
        'apellido.required' => 'El apellido del corredor debe tener un valor.',
        'apellido.alpha' => 'El apellido del corredor solo acepta valores alfabéticos',
        'apellido.min' => 'El apellido del corredor debe tener al menos :min caracteres.',
        'fecha_nac.required' => 'La fecha de nacimiento debe tener un valor.',
        'fecha_nac.date' => 'La fecha de nacimiento debe tener un valor válido.',
        'domicilio.required' => 'El domicilio del corredor debe tener un valor.',
        'domicilio.alpha_num' => 'El domicilio del corredor solo acepta valores alfabéticos númericos',
        'domicilio.min' => 'El domicilio del corredor debe tener al menos :min caracteres.',
        'id_nacionalidad.required' => 'El corredor debe tener una nacionalidad.',
        'id_nacionalidad.integer' => 'La nacionalidad debe ser un número.',
        'id_nacionalidad.exists' => 'La nacionalidad seleccionada no existe.',
        'email.required' => 'El email del corredor debe tener un valor.',
        'email.email' => 'El email del corredor solo acepta formato email',
        'telefono.required' => 'El telefono del corredor debe tener un valor.',
        'telefono.regex' => 'El telefono del corredor solo acepta formato Ejemplo: 99-9999-9999',
        'id_equipo.required' => 'El corredor debe seleccionar un equipo.',
        'id_equipo.integer' => 'El equipo debe ser un número.',
        'id_equipo.exists' => 'El equipo seleccionado no existe.',
        'comentarios.required' => 'El comentario debe tener un valor.',
        'comentarios.alpha' => 'El comentarios solo acepta valores alfabéticos',
        'comentarios.min' => 'El comentarios debe tener al menos :min caracteres.',
        'id_ciudad.required' => 'El corredor debe seleccionar una ciudad.',
        'id_ciudad.integer' => 'La ciudad debe ser un número.',
        'id_ciudad.exists' => 'La ciudad seleccionada no existe.',
        'id_provincia.required' => 'El corredor debe seleccionar una provincia.',
        'id_provincia.integer' => 'La provincia debe ser un número.',
        'id_provincia.exists' => 'La provincia seleccionada no existe.'
    ];

}
