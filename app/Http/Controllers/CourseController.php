<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




use App\Models\Course;

class CourseController extends Controller
{
    public function manageCourses()
    {
        $courses = Course::all();
        return view('admin/manage-courses', compact('courses'));
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('admin/edit-course', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());
        return redirect()->route('admin/manage-courses')->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('admin/manage-courses')->with('success', 'Course deleted successfully.');
    }

    public function createCourse(Request $request)
    {
        if ($request->isMethod('post')) {

            Course::create([
                'course_code' => $request->input('cc'),
                'course_sn' => $request->input('cns'),
                'course_fn' => $request->input('cnf'),
            ]);

            return redirect()->route('admin/manage-courses')->with('success', 'Course added successfully.');
        }

        return view('admin/add-course'); // The view for adding a new course
    }

}
