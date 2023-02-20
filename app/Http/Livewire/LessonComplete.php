<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Events\CourseCompleted;
use App\Models\{Progress, Material, CourseCompleted as Completed};
use Illuminate\Support\Facades\Auth;

class LessonComplete extends Component
{
    public $lesson_id;

    public function render()
    {
        return view('livewire.lesson-complete');
    }

    public function complete(){

        $this->updateProgress();

        $lesson = Material::find($this->lesson_id);
        $course = $lesson->course;

        if ($this->isCourseCompleted($course)) {
            $this->dispatchCourseCompletedEvent($course);
        }

        return redirect()->route('lesson', ['id' => $this->lesson_id])->with('status', 'Completed');
    }

    protected function updateProgress(){

        $progress = Progress::firstOrCreate([
            'user_id' => Auth::user()->id,
            'material_id' => $this->lesson_id,
        ]);

        $progress->update(['completed' => 1]);
    }

    protected function isCourseCompleted($course){

        return $course->completedMaterialCount() / $course->materialCount() * 100 === 100;
    }

    protected function dispatchCourseCompletedEvent($course){

        if (!Completed::where(['user_id' => Auth::user()->id, 'course_id' => $course->id])->exists()) {
            CourseCompleted::dispatch(Auth::user()->id, $course->id);
        }
    }
}
