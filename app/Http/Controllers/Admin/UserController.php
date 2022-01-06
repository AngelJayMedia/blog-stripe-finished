<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Policies\UserPolicy;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $this->authorize(UserPolicy::SUPERADMIN, User::class);

        return view('admin.users.index', [
            'users' => User::paginate(5),
        ]);
    }
}
