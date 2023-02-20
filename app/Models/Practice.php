<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;

    protected $table = 'practice';

    protected $fillable = [
        'user_id',
        'duration',
        'name',
    ];

        public function user(){
        return $this->belongsTo(User::class);
    }
}
