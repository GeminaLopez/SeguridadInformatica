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
    protected $fillable = ['nombre', 'apellido', 'fecha_nac','domicilio','dni','id_nacionalidad','email','telefono','id_equipo','comentarios','id_ciudad','id_provincia','como_me_entere'];

    /** @var array Las reglas de validación. */
    /* 
        * NOMBRE: requerido, con 3 letras minimo, maximo 30, acepta letras y espacios.
        * APELLIDO: requerido, con 3 letras minimo, maximo 30, acepta letras y espacios.
        * DOMICILIO: requerido, letras mayusculas, minusculas, numeros y acentos con espacio
        * DNI: requerido, solo numeros, cantida de digitos 8
        * NACIONALIDAD: requerido, solo numero y esa seleccion debe ser valida en la tabla de nacionalidades
        * EMAIL: requerido, formato email, maximo 50 caracteres.
        * TELEFONO: requerido, con expresion regular que solo acepta (11) o (15) y -9999-9999
        * EQUIPOS: requerido, solo numero y esa seleccion debe ser valida en la tabla de equipos
        * COMENTARIOS: requerido, regex letras mayusculas, minusculas, numeros y acentos con ?,!, espacio y -
        * CIUDAD: requerido, solo numero y esa seleccion debe ser valida en la tabla de ciudades
        * PROVINCIA: requerido, solo numero y esa seleccion debe ser valida en la tabla de provincias
        * COMO_ME_ENTERE: requerido, regex letras mayusculas, minusculas y acentos con espacios

        letras mayusculas, minusculas y acentos con espacios => PARA NOMBRE, APELLIDO, COMO ME ENTERE
            /^[\pL\s]+$/
        letras mayusculas, minusculas y acentos con espacios y coma y guiones por si quiere poner mas de un lugar => PARA COMO ME ENTERE
            /^[\w*áéíóú, -]+$/
        letras mayusculas, minusculas, numeros y acentos con espacio => PARA DOMICILIO
            /^[\w*áéíóú ]+$/
        letras mayusculas, minusculas, numeros y acentos con ?,!,espacio y - => PARA COMENTARIOS
            /^[\w*áéíóú?!, -]+$/
    */
    public static $rules = [
        'nombre' => 'required|regex:/^[\pL\s]+$/|min:3|max:30',
        'apellido' => 'required|regex:/^[\pL\s]+$/|min:3|max:30',
        'fecha_nac' => 'required|date',
        'domicilio' => 'required|regex:/^[\w*áéíóú ]+$/|min:10|max:100',
        'dni' => 'required|numeric|digits_between:7,8',
        'id_nacionalidad' => 'required|integer|exists:nacionalidades',
        'email' => 'required|email|min:5|max:50',
        'telefono' => 'required|regex:/^[1,5]{2}-[0-9]{4}-[0-9]{4}$/',
        'id_equipo' => 'required|integer|exists:equipos',
        'comentarios' => 'required|regex:/^[\w*áéíóú?!, -]+$/|min:3|max:140',
        'id_ciudad' => 'required|integer|exists:ciudades',
        'id_provincia' => 'required|integer|exists:provincias',
        'como_me_entere' => 'required|regex:/^[\w*áéíóú, -]+$/|min:3|max:140'
    ];

    /** @var array Los mensajes de error de las $rules */
    public static $errorMessages = [
        'nombre.required' => 'El nombre debe tener un valor.',
        'nombre.regex' => 'El nombre solo acepta valores alfabéticos',
        'nombre.min' => 'El nombre debe tener como mínimo :min caracteres.',
        'nombre.max' => 'El nombre puede tener como máximo :max caracteres.',
        'apellido.required' => 'El apellido debe tener un valor.',
        'apellido.regex' => 'El apellido solo acepta valores alfabéticos',
        'apellido.min' => 'El apellido debe tener como mínimo :min caracteres.',
        'apellido.max' => 'El apellido puede tener como máximo :max caracteres.',
        'fecha_nac.required' => 'La fecha de nacimiento debe tener un valor.',
        'fecha_nac.date' => 'La fecha de nacimiento debe tener un valor válido.',
        'domicilio.required' => 'El domicilio debe tener un valor.',
        'domicilio.regex' => 'El domicilio solo acepta valores alfabéticos con la numeración',
        'domicilio.min' => 'El domicilio debe tener como mínimo :min caracteres.',
        'domicilio.max' => 'El domicilio puede tener como máximo :max caracteres.',
        'dni.required' => 'El dn debe tener un valor.',
        'dni.numeric' => 'El dni solo acepta valores númericos',
        'dni.digits_between' => 'El dni debe tener :min o :max números.',
        'id_nacionalidad.required' => 'El corredor debe tener una nacionalidad.',
        'id_nacionalidad.integer' => 'La nacionalidad debe ser un número.',
        'id_nacionalidad.exists' => 'La nacionalidad seleccionada no existe.',
        'email.required' => 'El email debe tener un valor.',
        'email.email' => 'El email solo acepta formato email',
        'email.min' => 'El email debe tener como mínimo :min caracteres.',
        'email.max' => 'El email puede tener como máximo :max caracteres.',
        'telefono.required' => 'El telefono debe tener un valor.',
        'telefono.regex' => 'El telefono solo acepta formato Ejemplo: 99-9999-9999',
        'id_equipo.required' => 'El corredor debe seleccionar un equipo.',
        'id_equipo.integer' => 'El equipo debe ser un número.',
        'id_equipo.exists' => 'El equipo seleccionado no existe.',
        'comentarios.required' => 'El comentario debe tener un valor.',
        'comentarios.regex' => 'El comentario solo acepta valores alfabéticos y solo acepta ?,!,-',
        'comentarios.min' => 'El comentario debe tener al menos :min caracteres.',
        'comentarios.max' => 'El comentario puede tener como máximo :max caracteres.',
        'id_ciudad.required' => 'El corredor debe seleccionar una ciudad.',
        'id_ciudad.integer' => 'La ciudad debe ser un número.',
        'id_ciudad.exists' => 'La ciudad seleccionada no existe.',
        'id_provincia.required' => 'El corredor debe seleccionar una provincia.',
        'id_provincia.integer' => 'La provincia debe ser un número.',
        'id_provincia.exists' => 'La provincia seleccionada no existe.',
        'como_me_entere.required' => 'Indicar como se enteró debe tener un valor.',
        'como_me_entere.regex' => 'Indicar como se enteró solo acepta valores alfabéticos y solo acepta coma o guión medio',
        'como_me_entere.min' => 'Indicar como se enteró debe tener al menos :min caracteres.',
        'como_me_entere.max' => 'Indicar como se enteró puede tener como máximo :max caracteres.'
    ];

    /**
     * Definimos la relación con ciudades.
     * Va a crear una propiedad "ciudad"
     */
    public function ciudades()
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad', 'id_ciudad');
    }

    /**
     * Definimos la relación con provincias.
     * Va a crear una propiedad "provincias"
     */
    public function provincias()
    {
        return $this->belongsTo(Provincia::class, 'id_provincia', 'id_provincia');
    }

    /**
     * Definimos la relación con nacionalidades.
     * Va a crear una propiedad "nacionalidades"
     */
    public function nacionalidades()
    {
        return $this->belongsTo(Nacionalidad::class, 'id_nacionalidad', 'id_nacionalidad');
    }

    /**
     * Definimos la relación con equipos.
     * Va a crear una propiedad "equipos"
     */
    public function equipos()
    {
        return $this->belongsTo(Equipo::class, 'id_equipo', 'id_equipo');
    }

}
