<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empleado
 */
class Empleado extends Model
{
    use UuidForKey,SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'id_empleado',
        'nombre',
        'email',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'updated_at',
        'deleted_at',
    ];

    /**
     * @param $value
     *
     * @return mixed
     */
    public function setDescripcionAttribute($value)
    {
        return $this->attributes['nombre'] = ucfirst($value);
    }
}
