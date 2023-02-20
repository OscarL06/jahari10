<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Note;

class NotesController extends Controller
{
    public function show() {

        $notes = Note::where('user_id', Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
        
        return view('notes', compact('notes'));
    }
}
