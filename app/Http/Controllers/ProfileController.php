<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class ProfileController extends Controller
{
    
    public function index()
    {
        return view('profile');
    }
    public function edit()
    {
        $user = auth()->user();
        return view('profile.edit', compact('user'));
    }

    public function store(Request $request)
{
    $user = User::create($request->all());
    return redirect()->route('profile');
}

public function update(Request $request, $id)
{
    $user = User::findOrFail($id);
    $user->update($request->all());
    return redirect()->route('profile');
}

}