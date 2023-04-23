<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


use App\Models\User;
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
        return view('home');
    }

    public function adminindex()
    {
        return view('admin_home');
    }


    public function profile()
    {
        return view('profile');
    }

    public function ulistIndex()
    {
        $users = User::all();
        return view('admin_userList', ['users' => $users]);
    }
    



}
