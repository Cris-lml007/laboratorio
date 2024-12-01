<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'description',
        'price',
        'laboratory_id',
        'operative'
    ];

    public function laboratory(){
        return $this->belongsTo(Laboratory::class,'laboratory_id','id');
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
