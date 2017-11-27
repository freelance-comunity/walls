<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barber extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'barbers';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'last_name', 'photo', 'phone', 'address', 'birthday', 'status'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
