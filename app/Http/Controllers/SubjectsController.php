<?php

namespace App\Http\Controllers;
use App\Models\Subjects;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all subjects
        $subjects = Subjects::all();
        return response()->json($subjects);
    }

    public function show($id)
    {   
       // Retrieve a subject and its materials
        $subject = Subjects::with('materials')->findOrFail($id);
        return response()->json($subject);
    }

    public function store(Request $request)
    {
        // Create a new subject
        $subject = Subjects::create($request->all());
        return response()->json($subject, 201);
    }

    public function update(Request $request, $id)
    {
        //update a subject
         // Find the subject
         $subject = Subjects::findOrFail($id);

         // Update the subject's name and description
         $subject->name = $request->input('name');
         $subject->description = $request->input('description');
 
         // Save the changes
         $subject->save();
 
         // Return the updated subject as JSON
         return response()->json($subject);
    }

    public function destroy($id)
    {
        // Delete a subject
        $subject = Subjects::findOrFail($id);
        $subject->delete();
        return response()->json(null, 204);
    }
   
}
