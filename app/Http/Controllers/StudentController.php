<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Auth;
class StudentController extends Controller
{
  
    public function index()
    {
        $data['checkStudent'] = Student::where("user_id",Auth::id())->first();
        return view("studentPanel.profile",$data);
    }

   
    public function create()
    {
        if(Student::where("user_id",Auth::id())->exists()){
            return redirect()->route('student.index');   
        }

        return view("public.apply");
    }

      public function store(Request $request)
        {
            $request->validate([
                'fatherName' => 'required',
                'motherName' => 'required',
                'dob' => 'required',
                'education' => 'required',
                'gender' => 'required',
                'address' => 'required',
            ]);

        $data = new Student();
        $data->user_id = Auth::id();
        $data->father_name = $request->fatherName;
        $data->mother_name = $request->motherName;
        $data->address = $request->address;
        $data->gender = $request->gender;
        $data->dob = $request->dob;
        $data->education = $request->education;
        $data->save();
        return redirect()->route("student.index");
    }

    
    public function show(Student $student)
    {
        //
    }

   
    public function edit(Student $student)
    {
        //
    }

    public function update(Request $request, Student $student)
    {
        //
    }

    public function destroy(Student $student)
    {
        //
    }
}
