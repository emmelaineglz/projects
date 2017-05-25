<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empleado
 */
class Domicilio extends Model
{
    use UuidForKey,SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'empleado_id',
        'calle',
        'colonia',
        'cp',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'updated_at',
        'deleted_at',
    ];

    /**
     * @return BelongsTo
     */
    public function empleado() : BelongsTo
    {
        return $this->belongsTo(Empleado::class);
    }
}
