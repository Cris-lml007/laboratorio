<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'block',
        'teacher_id',
        'description'
    ];

    public function manager(){
        return $this->belongsTo(Teacher::class,'teacher_id','id');
    }

    public function assets(){
        return $this->hasMany(Asset::class,'laboratory_id','id');
    }
}
