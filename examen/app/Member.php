<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Member
 */
class Member extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'image',
        'team_id',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
