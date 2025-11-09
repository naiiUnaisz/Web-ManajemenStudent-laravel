<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Courses;
use App\Models\Student;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $courses = Course::all();
        return view ('courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
      Course::create($input);
        return redirect('courses')->with('flash_message', 'Courses Addedd!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $course = Student::find($id);
        return view('courses.show')->with('courses', $course);
    }
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        
        $courses = Course::find($id);
        return view('courses.edit')->with('courses', $courses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $courses = Course::find($id);
        $input = $request->all();
        $courses->update($input);
        return redirect('courses')->with('flash_message', 'Courses Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        
        Course::destroy($id);
        return redirect('courses')->with('flash_message', 'Course deleted!');
    }
}
