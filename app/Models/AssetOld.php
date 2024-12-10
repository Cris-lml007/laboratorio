<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetOld extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'description',
        'price',
        'laboratory_id',
        'type_id',
        'operative',
        'user_id'
    ];
}
