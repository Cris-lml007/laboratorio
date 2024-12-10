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
        'type_id',
        'operative',
        'user_id'
    ];

    public function laboratory(){
        return $this->belongsTo(Laboratory::class,'laboratory_id','id');
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function createBy(){
        return $this->belongsTo(User::class);
    }
}
