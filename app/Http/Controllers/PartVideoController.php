<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\PartsVideo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PartVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pvList = PartsVideo::all();
        return View('admin.part_videos.ListPartVideos', compact('pvList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courseList = Course::all();
        return View('admin.part_videos.CreatePartVideos', compact('courseList'));
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
        $partVideo = PartsVideo::create($inputData);
        if ($partVideo){
            Alert::success('Success', 'Create PartVideos Successfully!!');
            return redirect('admin/list-part-video');
        }else {
            Alert::error('Error', 'Create PartVideos Failurefully!!');
            return redirect('admin/create-part-video');
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
        $pvideo = PartsVideo::find($id);
        $courseList = Course::all();
        return View('admin.part_videos.EditPartVideo', compact('pvideo','courseList'));
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
        $pVideo = PartsVideo::find($request->id);
        if($pVideo->update($inputData)){
            return redirect('admin/list-part-video');
        }else{
            $course = Course::all();
            return View('admin.part_videos.EditPartVideo', compact('pVideo','course'));
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
        $pV = PartsVideo::find($id);
        if($pV->delete()){
            Alert::success('Delete PartsVideo Successfully');
            return redirect('admin/list-part-video');
        }else {
            Alert::error('Delete PartsVideo Failurefully');
            return redirect('admin/list-part-video');
        }
    }
}
