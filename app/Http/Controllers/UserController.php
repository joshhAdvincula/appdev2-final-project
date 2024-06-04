<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return user::all(); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        // the error says does not have a default value so we need to validate
        // the request base don sa mga field na need

        return user::create($request->all());
        //all request will inserted in users table
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return user::find($id);
        //retur user by id
    }

    /**
     * Update the specified r  esource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = user::find($id);
        //first get the users
        $user->update($request->all());
        //next is update the user
        return $user;
        //then returm the updated user
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return user::destroy($id);
    }

    public function search($name){
        return user::where('firstname', 'like', '%'.$name.'%')
                    ->orWhere('lastname', 'like', '%'.$name.'%')
                    ->get();
    }
}
