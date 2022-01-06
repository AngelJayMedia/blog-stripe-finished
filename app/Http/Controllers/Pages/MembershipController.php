<?php

namespace App\Http\Controllers\Pages;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MembershipController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $plans = Plan::all();
        $user = Auth::user();

        return view('pages.membership.index', compact('plans', 'user'));
    }
}
