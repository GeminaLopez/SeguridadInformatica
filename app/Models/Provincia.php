<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    // Configuro la tabla.
    protected $table = "provincias";
    // Configuro la PK.
    protected $primaryKey = 'id_provincia';

    /**
     * Define la relación con corredores.
     * Crea la propiedad "corredores"
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function corredores()
    {
        return $this->hasMany(Corredor::class, 'id_provincia', 'id_provincia');
    }
}
