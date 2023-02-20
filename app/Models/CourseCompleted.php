<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCompleted extends Model
{
    use HasFactory;

    protected $table = 'courses_completed';

    protected $primaryKey = 'id';

    protected $fillable = ['id', 'course_id', 'user_id'];
}
