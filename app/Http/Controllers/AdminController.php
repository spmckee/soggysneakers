<?php

namespace App\Http\Controllers;

use App\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            // Get the currently authenticated user...
            $user = Auth::user();

// Get the currently authenticated user's ID...
            $id = Auth::id();
            
            flash('Logged in!');
        }
        return view('admin.dashboard');
    }
}
