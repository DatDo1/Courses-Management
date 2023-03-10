<?php

namespace App\Http\Controllers;

use App\Models\PartsVideo;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videoList = Video::all();
        if (session('email')){
            return view('admin.videos.ListVideos', compact('videoList'));
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
        $partsVideoList = PartsVideo::all();
        return View('admin.videos.CreateVideos', compact('partsVideoList'));
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
        $video = Video::create($inputData);
        if ($video){
            Alert::success('Success', 'Create Video Successfully!!');
            return redirect('admin/list-video');
        }else {
            Alert::error('Error', 'Create Video Failurefully!!');
            return redirect('admin/create-video');
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
        $video = Video::find($id);
        $partsVideoList = PartsVideo::all();
        return View('admin.videos.EditVideo', compact('video','partsVideoList'));
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
        $video = Video::find($request->id);
        if($video->update($inputData)){
            return redirect('admin/list-video');
        }else{
            $pVList = PartsVideo::all();
            return View('admin.videos.EditVideo', compact('video','pVList'));
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
        $video = Video::find($id);
        if($video->delete()){
            Alert::success('Delete Video Successfully');
            return redirect('admin/list-video');
        }else {
            Alert::error('Delete Video Failurefully');
            return redirect('admin/list-video');
        }
    }
}
