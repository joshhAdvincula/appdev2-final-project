<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
         $users = User::all();
        return response()->json($users);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return user::find($id);
        //retur user by id
    }

   public function update(Request $request, string $id)
    {
        $users = User::find($id);
        $users->update($request->all());
        return $users;
        // if (!$user) {
        //     return response()->json(['message' => 'User not found'], 404);
        // } 
    
        // $user->update($request->all());
    
        // return response()->json(['message' => 'User updated successfully', 'user' => $user]);
    
    }
     /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        return user::destroy($id);
    }

    public function search($name)
    {
        $users = User::where('firstname', 'like', "%$name%")
                     ->orWhere('lastname', 'like', "%$name%")
                     ->get();

        return response()->json($users);
    }
}
