<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Category, Course, Material};

class CategoriesController extends Controller
{
    public function categories(){

        $categories = Category::orderBy('sort_order')->get();

        return view('courses.categories', compact('categories'));
    }

    public function courses($id){
        
        $course = Course::with('materials')->where('id', $id)->first();
        
        $completed = $course->completedMaterialCount() / $course->materialCount() * 100;

        return view('courses.courses', compact('course', 'id', 'completed'));
    }

    public function lessons($id) {
        
        $lesson = Material::with('video', 'slices')->where('id', $id)->first();

        $completed = $lesson->course->completedMaterialCount() / $lesson->course->materialCount() * 100;

        $nextLesson = $lesson->nextLesson();

        return view('courses.lessons', compact('lesson', 'id', 'nextLesson', 'completed'));
    }
}
