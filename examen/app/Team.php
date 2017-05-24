<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Team
 */
class Team extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
