<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
  
    public function index()
    {
        //
        $data['courses'] = Course::all();
        return view("admin/manageCourse",$data);
    }

    public function create()
    {
        return view("admin.insertCourse");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'fee' => 'required',
            'discount_fee' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        Course::create($data);
        return redirect()->route('course.index');


    }

    public function show(Course $course)
    {
        //
    }

    public function edit(Course $course)
    {
        $data['course'] = $course;
        return view("admin/editCourse",$data);
    }

    public function update(Request $request, Course $course)
    {
        $data = $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'fee' => 'required',
            'discount_fee' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        $course->update($data);
        return redirect()->route('course.index');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index');
    }
}
