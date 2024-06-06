<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materials;
use App\Models\Subjects;

class MaterialsController extends Controller
{
    public function index()
    {
        // Retrieve all materials
        $materials = Materials::all();
        return response()->json($materials);
    }

    public function show($id)
    {
        // Retrieve a single material
        $material = Materials::findOrFail($id);
        return response()->json($material);
    }

    public function store(Request $request, $subjectId)
    {
        // Create a new material for a subject
        $subject = Subjects::findOrFail($subjectId);
        $material = $subject->materials()->create($request->all());
        return response()->json($material, 201);
    }

    public function update(Request $request, $id)
    {
        // Update a material
        $material = Materials::findOrFail($id);
        $material->update($request->all());
        return response()->json($material);
    }

    public function destroy($id)
    {
        // Delete a material
        $material = Materials::findOrFail($id);
        $material->delete();
        return response()->json(null, 204);
    }
}
