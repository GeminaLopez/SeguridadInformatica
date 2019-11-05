<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    /// Configuro la tabla.
    protected $table = "nacionalidades";
    // Configuro la PK.
    protected $primaryKey = 'id_nacionalidad';

    /**
     * Define la relación con corredores.
     * Crea la propiedad "corredores"
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function corredores()
    {
        return $this->hasMany(Corredor::class, 'id_nacionalidad', 'id_nacionalidad');
    }
}
