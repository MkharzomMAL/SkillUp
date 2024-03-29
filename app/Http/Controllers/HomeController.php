<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::orderby('id','DESC')->get();

        return Inertia::render('Dashboard', [
        'users' => $users,
    ]);
    }

    public function profile()
    {

        return Inertia::render('Profile');
    }

    public function show(){

    }
    
}
