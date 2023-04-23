<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserListController extends Controller
{
    public function deleteUser($id)
    {
        $user = User::find($id); 
        if(!is_null($user)){
            $user->delete(); 
        }
        return redirect('/admin/userlist'); 
    }

    public function editUser($id)
    {
        $user = User::find($id);
        if(is_null ($user))
        {
            return redirect ('/admin/list'); 
        }
        else
        {
            $data = compact('user'); 
            return view('admin_update')->with($data); 
        }

    }

    public function updateUser($id, Request $res){
        $user = User::find($id); 
        $user->name = $res['name'];
        $user->email = $res['email'];
        $user->profile_picture = $res['profile_picture'];
        $user->save();
        return $this->show();
    }
    
}
