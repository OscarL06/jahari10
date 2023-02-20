<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SubscribeController extends Controller
{
    public function subscribe(Request $request){
        $user = auth()->user();

        $payLink = $user->newSubscription('default', $month = 42335)
            ->returnTo(route('dash'))
            ->create();

        $payLinkSix = $user->newSubscription('default', $six = 42336)
            ->returnTo(route('dash'))
            ->create(); 

        $yearly = $user->newSubscription('default', $month = 42337)
            ->returnTo(route('dash'))
            ->create();

        $lifetime = $user->newSubscription('default', $six = 42339)
            ->returnTo(route('dash'))
            ->create();     
            
        return view('subscribe', compact('payLink','payLinkSix', 'yearly', 'lifetime'));    
    }
}
