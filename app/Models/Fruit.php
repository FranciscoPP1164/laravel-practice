<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;

    //default name of model in plural
    protected $table = 'fruit';

    //default id
    protected $primaryKey = 'id';

    //default true
    public $incrementing = true;

    //default int
    // protected $keyType = 'string';

    //default true
    public $timestamps = true;

    //default i don't know
    // protected $dateFormat = 'U';

    //default created_at
    const CREATED_AT = 'created_at';

    //default updated_at
    const UPDATED_AT = 'updated_at';

    //default the connection especify in config
    protected $connection = 'mysql';

    //default not defined
    protected $attributes = [
        'name' => 'Apple',
        'price' => 500,
        'stock' => 0,
    ];
}
