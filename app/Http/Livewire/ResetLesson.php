<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Progress;
use Livewire\Component;

class ResetLesson extends Component
{
    public $lesson, $lesson_id;

    public function render()
    {
        return view('livewire.reset-lesson');
    }

    public function resetLesson() {
        
        $progress = Progress::where([
        'user_id' => Auth::user()->id,
        'material_id' => $this->lesson_id
        ])->first();


        if ($progress !== null) {
            $progress->delete();
        }

        return redirect()->route('lesson', ['id' => $this->lesson_id]);
    }
}
