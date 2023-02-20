<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Practice;
use Illuminate\Support\Facades\Auth;

class PracticeLogs extends Component
{
    public $logs;

    protected $listeners = ['practiceLogs'];

    public function render()
    {
        $this->practiceLogs();

        return view('livewire.practice-logs');
    }

    public function practiceLogs() {
        
        $this->logs = Practice::with('user')->where('user_id', Auth::id())->latest()->get();

    }

    public function removeLog($id){

        $practice = Practice::where('id', $id)->where('user_id', Auth::id())->first();

        if (!$practice) {
            return redirect()->back()->with('error', 'You do not have permission to delete this practice');
        }

        $practice->delete();

        return redirect()->back()->with('practice-deleted', 'Practice session deleted successfully');
    }
}
