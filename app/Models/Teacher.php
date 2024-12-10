<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public $fillable = [
        'ci',
        'surname',
        'name',
        'specialty',
        'cellular'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function laboratories(){
        return $this->hasMany(Laboratory::class,'teacher_id','id');
    }
}
