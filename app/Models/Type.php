<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    public $fillable = [
        'name'
    ];

    public function Assets(){
        return $this->hasMany(Asset::class);
    }
}
