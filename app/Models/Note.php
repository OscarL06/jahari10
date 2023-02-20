<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'material_id',
        'notes',
    ];

    public function material(){
        return $this->belongsTo(Material::class);
    }
}
