<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function update($subscription)
    {
        $user = Auth::user();

        $user->subscription($subscription)->resume();

        return redirect()->route('membership')->with('success', "You resumed your $subscription subscription!");
    }

    public function destroy($subscription)
    {
        $user = Auth::user();

        $user->subscription($subscription)->cancel();

        return redirect()->route('membership')->with('success', 'You successfully cancelled you subscription!');
    }
}
