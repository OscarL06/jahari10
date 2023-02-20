<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'name',
        'type',
        'description',
        'sort_order',
    ];

    public function video() {
        return $this->hasOne(Video::class);
    }

    public function slices() {
        return $this->hasMany(Slice::class)->orderBy('sort_order');
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function progress(){
        return $this->hasOne(Progress::class)
            ->where('user_id', Auth::user()->id)
            ->where('material_id', $this->id);
    }

    public function nextLesson(){
        return static::where('course_id', $this->course_id)
            ->where('id', '>', $this->id)
            ->first();
    }
}
