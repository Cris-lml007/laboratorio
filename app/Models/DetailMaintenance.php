<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMaintenance extends Model
{
    use HasFactory;
    public $fillable = [
        'maintenance_id',
        'asset_id',
        'description'
    ];

    public function maintenance(){
        return $this->belongsTo(Maintenance::class);
    }
}
