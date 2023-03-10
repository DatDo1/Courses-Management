<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryList = Category::all();
        if (session('email')){
            return view('admin.category.ListCategory', compact('categoryList'));
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
        return View('admin.category.CreateCategory');
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
        $category = Category::create($inputData);
        if ($category){
            Alert::success('Success', 'Create Category Successfully!!');
            return redirect('admin/list-category');
        }else {
            Alert::error('Error', 'Create Category Failurefully!!');
            return redirect('admin/create-category');
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
        $cate = Category::find($id);
        return View('admin.category.EditCategory',compact('cate'));
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
        $cate = Category::find($request->id);
        if($cate->update($inputData)){
            return redirect('admin/list-category');
        }else{
            return View('admin.courses.EditCategory', compact('cate'));
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
        try {
            $course = Category::find($id);
            if($course->delete()){
                Alert::success('Delete Category Successfully');
                return redirect('admin/list-category');
             }else {
                Alert::error('Delete Category Failurefully');
                return redirect('admin/list-category');
            }
        } catch (\Throwable $th) {
            Alert::warning('Constraints Foreign Key');
            return redirect('admin/list-category');
        }
    }
}
