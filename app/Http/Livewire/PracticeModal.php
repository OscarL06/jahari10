<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Practice;

class PracticeModal extends Component
{
    public $name;
    public $duration = "00:00:00";

    protected $listeners = ['updateDuration', 'savePracticeSession'];

    public function render()
    {
        return view('livewire.practice-modal');
    }

    public function updateDuration($value){
        
        $this->duration = $value;
    }

    public function savePracticeSession(){
        
        Practice::create([
            'user_id' => Auth::user()->id,
            'duration' => $this->duration,
            'name' => $this->name,
        ]);

        $this->emit('practiceLogs');
        return redirect()->back()->with('success', 'Practice session saved successfully');
    }
}
