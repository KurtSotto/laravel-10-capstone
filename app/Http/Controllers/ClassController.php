<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Student;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classes::orderBy('id', 'ASC')->get();
 
        return view('classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Classes::create($request->all());
 
        return redirect()->route('classes.index')->with('created', 'Class added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $product = Classes::findOrFail($id);
 
        // return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $class = Classes::findOrFail($id);
 
        return view('classes.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $class = Classes::findOrFail($id);
 
        $class->update($request->all());
 
        return redirect()->route('classes.index')->with('update', 'Class updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Student $student)
    {
        $class = Classes::findOrFail($id);
 
        $class->delete();
        
        return redirect()->route('classes.index')->with('delete', 'Class deleted successfully');
    }
}
