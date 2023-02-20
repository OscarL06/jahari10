<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'image',
        'description',
        'level',
        'time',
        'sort_order',
    ];

    public function materials() {
        return $this->hasMany(Material::class)->orderBy('sort_order');
    }

    public function video() {
        return $this->hasOne(Material::class)->orderBy('sort_order');
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function hasProgress(){
        return Progress::where('user_id', auth()->id())
            ->whereIn('material_id', $this->materials->pluck('id'))
            ->exists();
    }

    public function materialCount() {
        return $this->materials()->count();
    }

    public function completedMaterialCount(){
        return $this->materials->filter(function($material){
                return $material->progress()->where('completed', 1)->exists();
            })->count();
    }

    public function deleteProgress() {
        Progress::where('user_id', auth()->id())
            ->whereIn('material_id', $this->materials->pluck('id'))
            ->delete();
    }
}
