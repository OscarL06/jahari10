<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Practice;

class PracticeController extends Controller
{
    public function show(){
        
        $logs = Practice::with('user')->where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();

        return view('practice-logs', compact('logs'));
    }

    public function destroy($id){
    
        $practice = Practice::where('id', $id)->where('user_id', Auth::id())->first();

        if (!$practice) {
            return redirect()->back()->with('error', 'You do not have permission to delete this practice');
        }

        $practice->delete();

        return redirect()->back()->with('practice-deleted', 'Practice session deleted successfully');
    }
}
