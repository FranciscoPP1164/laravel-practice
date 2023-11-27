<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle_in_concessionaire extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $table = 'concessionaire_vehicle';

    protected $fillable = ['color', 'price', 'stock'];
}
