<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Notes extends Component
{
    public $notes, $lesson_id;

    public function render()
    {
        $notes = Note::where('user_id', Auth::user()->id)->where('material_id', $this->lesson_id)->first();
        
        if(!empty($notes)){
            $this->notes = $notes->notes;
        }

        return view('livewire.notes');
    }

    public function saveNotes() {
        
        $notes = Note::firstOrCreate([
            'user_id' => Auth::user()->id,
            'material_id' => $this->lesson_id,
            ],['notes' => '']);

        $notes->update(['notes' => $this->notes]);

        $this->dispatchBrowserEvent('noteSaved');
    }
}
