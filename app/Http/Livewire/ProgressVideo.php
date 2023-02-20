<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{Progress, Material};
use Illuminate\Support\Facades\Auth;

class ProgressVideo extends Component
{
    public $lesson, $lesson_id;

    protected $listeners = ['updateProgress'];

    public function render()
    {
        $this->lesson = Material::with('video')->where('id', $this->lesson_id)->first();

        return view('livewire.progress-video');
    }

    public function updateProgress() {
        
        $progress = Progress::firstOrCreate(
            ['user_id' => Auth::user()->id, 'material_id' => $this->lesson_id],
            ['time' => null]
        );
    }
}
