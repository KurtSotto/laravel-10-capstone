<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Student;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userHome(){
        return view('home');
    }

    public function adminHome(){
        $classCount = Classes::count();
        $studentCount = Student::count();

        // Pass the counts to the view
        return view('dashboard', compact('classCount', 'studentCount'));
    }
}
