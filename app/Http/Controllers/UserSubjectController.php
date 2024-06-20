<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            $user = User::with('subjects.material')->find($id);
            
            if (!$user) {
                return response()->json(['message' => 'User not found'], 404);
            }
        
            return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
