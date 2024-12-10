<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'laboratory_id',
        'type',
        'description',
        'active',
        'date'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function detailMaintenance(){
        return $this->hasMany(DetailMaintenance::class);
    }

    public function laboratory(){
        return $this->belongsTo(Laboratory::class);
    }

}
