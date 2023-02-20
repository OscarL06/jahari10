<?php

namespace App\Http\Livewire;

use App\Models\{Course, Progress};
use Livewire\Component;

class ResetCourse extends Component
{
    public $course_id;

    public function render()
    {
        return view('livewire.reset-course');
    }

    public function resetCourse(){

        $course = Course::find($this->course_id);

        $course->deleteProgress();

        return redirect()->route('course', ['id' => $this->course_id]);
    }
}
