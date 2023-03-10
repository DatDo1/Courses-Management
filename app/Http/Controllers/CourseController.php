<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCourse = Course::all();
        if (session('email')){
            return view('admin.courses.ListCourses', compact('listCourse'));
        }else {
            return redirect('admin/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cateList = Category::all();
        
        return view('admin.courses.CreateCourses', compact('cateList'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputData = $request->all();
        $course = Course::create($inputData);
        $imageName = time().'.'.$request->image->extension();  
        $course->image = $imageName;

        if ($course->save()){
            $request->image->move(public_path('users/image'), $imageName);
            Alert::success('Success', 'Create Course Successfully!!');
            return redirect('admin/list-course');
        }else {
            Alert::error('Error', 'Create Course Failurefully!!');
            return redirect('admin/create-course');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $cateList = Category::all();
        return View('admin.courses.EditCourses', compact('course','cateList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $inputData = $request->all();
        $courses = Course::find($request->id);
        if($courses->update($inputData)){
            return redirect('admin/list-course');
        }else{
            $cateList = Category::all();
            return View('admin.courses.EditCourses', compact('course','cateList'));
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        if($course->delete()){
            Alert::success('Delete Course Successfully');
            return redirect('admin/list-course');
        }else {
            Alert::error('Delete Course Failurefully');
            return redirect('admin/list-course');
        }
    }
}
