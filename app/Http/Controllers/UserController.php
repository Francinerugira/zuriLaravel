<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function createUser(Request $request){
        $name = "John Smith";
        $email = "smith@gmail.com";
        $phone = "0123456789";

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->phone = $phone;
        $save = $user->save();

        if($save){
            return ('Create user successfully.');
        }else{
            return ("Create user fail");
        }

    }

    public function editUser($id){
        $user = User::find($id);
        return view('editUser', compact('user'));
    }

    public function updateUser(Request $request){
        $id = $request->id;

        $user = User::find($id);
        $user->update($request->all());

            if($user){
            return ('Update user successfully.');
            }else{
                return ('not updated');
            }
    }


    public function deleteUser($id){

        $user = User::find($id);
        $user->delete();

            if($user){
            return ('Delete user successfully.');
            }else{
                return ('not Deleted');
            }
    }

    public function getUsers(){

        $users = User::all();
        return view('users', with(['users'=> $users]));

    }
}
