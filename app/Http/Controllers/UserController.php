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

        // Fetch the user with their materials and subjects
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Fetch the user with their materials
        
        $user = User::find($id);

    if (!$user) {
        return response()->json(['message' => 'User not found'], 404);
    }

    // Return the user
    return response()->json($user);

    }

   public function update(Request $request, string $id)
    {
        $users = User::find($id);
        $users->update($request->all());
        return response()->json(['message' => 'User updated successfully', 'user' => $users]);
    
    }
     /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        $deleted = user::destroy($id);
        
        if ($deleted){
            return response()->json(['message' => 'User Deleted Successfully', 'user' => $id]);

        }else{
            return response()->json(['message' => 'User Not Found', 'user' => $id], 404);

        }

    }

    public function search($name)
    {
        $users = User::where('FirstName', 'like', "%$name%")
                     ->orWhere('LastName', 'like', "%$name%")
                     ->get();

        return response()->json($users);
    }

    public function getUserWithSubjectsAndMaterials($id)
    {
        $user = User::with('subjects.material')->find($id);
        
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
    
        return response()->json($user);
    }
}


/*
 User has many Subjects.
Subject belongs to a User and has one Material.
Material belongs to a Subject.

*/
