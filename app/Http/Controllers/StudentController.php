<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        // dd($students); //for debugging
        // return view("display", ['students' => $students]); // same as compact("students")
        return view("display", compact("students"));
    }
    public function create(){
        return view("register");
    }
    public function store(Request $request){
        $request->validate([
            "name"=> "required|string",
            "pwd"=> "required|string",
        ]);
        
        $student = new Student();//importing model
        $student->name = $request->name;
        $student->pwd = $request->pwd;
        $student->save();

        return redirect("students/create")->with("success","Student created sucessfully!!");
    }

    public function update(Request $request, Student $student){
        $request->validate([
            "name"=> "required|string",
            "pwd"=> "required|string",
        ]);

        $student->name = $request->name;
        $student->pwd = $request->pwd;

        $student->save();

        return redirect("students")->with("success","Student updated sucessfully!!");
    }

    public function destroy(Student $student){
        $student->delete();
        return redirect("students")->with("success","delete_bhayo");
    }

    public function edit(Student $student){
        return view("update", compact("student"));
    }


    
}