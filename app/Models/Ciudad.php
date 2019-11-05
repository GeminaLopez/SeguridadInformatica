<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    // Configuro la tabla.
    protected $table = "ciudades";
    // Configuro la PK.
    protected $primaryKey = 'id_ciudad';

    /**
     * Define la relación con corredores.
     * Crea la propiedad "corredores"
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function corredores()
    {
        return $this->hasMany(Corredor::class, 'id_ciudad', 'id_ciudad');
    }
}
