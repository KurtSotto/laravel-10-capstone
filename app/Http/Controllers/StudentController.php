<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::orderBy('id', 'ASC')->get();
 
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = Classes::get();
        return view('students.create', compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first' => 'required',
            'last' => 'required',
            'class_id' => 'required'
        ]);

        $class = Classes::find($data['class_id']);
        $data['level'] = $class->level;
        $data['section'] = $class->section;

        Student::create($data);
        return redirect(route('student.index'))->with('created', 'student created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $classes = Classes::all();

        // return view('students.edit', compact('student', 'classes'));
        dd($student);    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);

        $class = Classes::find($student['class_id']);
        $student['level'] = $class->level;
        $student['section'] = $class->section;

        $class->update($request->all());   
        // dd($data);
        return redirect(route('student.index'))->with('created', 'student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
 
        $student->delete();
        
        return redirect()->route('student.index')->with('delete', 'student deleted successfully');
    }
}
