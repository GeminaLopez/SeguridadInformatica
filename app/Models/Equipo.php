<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    // Configuro la tabla.
    protected $table = "equipos";
    // Configuro la PK.
    protected $primaryKey = 'id_equipo';

    /**
     * Define la relación con corredores.
     * Crea la propiedad "corredores"
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function corredores()
    {
        return $this->hasMany(Corredor::class, 'id_equipo', 'id_equipo');
    }
}
