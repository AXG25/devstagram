<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(User $user)
    {
        return view('dashboard', ['user' => $user]);
    }

    public function create() {
        return view('posts.create');
    }
}
