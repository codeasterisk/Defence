<?php

namespace App\Http\Traits;

use App\Video;
use Illuminate\Http\Request;
use Alert;
use Image;
use DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\String\Str;

trait VideoOperation
{
    /**
     * Display a listing of the Videos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::OrderBy('id','desc')->get();
        return view('Admin.Videos.index')
            ->with('videos',$videos);
    }

    /**
     * Show the form for creating a new Video.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Videos.add');
    }

    /**
     * Register a New Video
     *
     * @param $request
     */
    public function register ($request)
    {
        try {
            $slug=make_slug($request->title,'-');
            Video::create([
            'url' =>$request->url,
            'title' =>$request->title,
            'description'=>$request->description,
            'user_id'=>Auth::user()->id,
            'slug'=>$slug,
             'cat_id'=>$request->cat_id,
        ]);

        }
        catch(ValidationException $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/videos');
        }
        catch(\Exception $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/videos');
        }
    }

    /**
     * Store a newly created Video in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'url' => 'required|string|max:255|url',
            'title' => 'required|string|max:255|unique:videos',
            'description' => 'required|string',
            'cat_id' =>'required'

        ]);
        $this->register($request);
        Alert::success('عظيم','تم اضافة فيديو جديد بنجاح');
        return redirect('/dashboard/videos');
    }

    /**
     * Display the specified Video   .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = Video::find($id);
        return view('Admin.Videos.view')
            ->with('video',$video);
    }

    /**
     * Show the form for editing the specified Video.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::find($id);

        return view('Admin.Videos.edit')
            ->with('video',$video);
    }

    public function UpdateRecords($video, $request)
    {
        try {

            $slug=make_slug($request->title,'-');

        $video->update([
            'url' =>$request->url,
            'title' =>$request->title,
            'description'=>$request->description,
            'slug'=>$slug,
            'cat_id'=>$request->cat_id,
        ]);
        }
        catch(ValidationException $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/videos');
        }
        catch(\Exception $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/videos');
        }

    }

    /**
     * Update the specified Video in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video = Video::find($id);
            $this->validate($request, [
                'url' => 'required|string|max:255',
                'title' => 'required|string|max:255|unique:videos,title,' . $video->id,
                'description' => 'required|string',
                'cat_id' =>'required'
                ]);
        //update Video Record
        $this->UpdateRecords($video,$request);
        Alert::success('عظيم','تم تعديل هذا الفيديو بنجاح');
        return redirect('/dashboard/videos');
    }

    /**
     * Remove the specified Video from Database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);
        if (!$video){ Alert::warning('عذراً','ﻻ يوجد فيديو بنفس المواصفات'); return redirect('/dashboard/videos');}
        Video::find($id)->delete();
        Alert::success('عظيم','تم حذف فيديو بنجاح');
        return redirect('/dashboard/videos');
    }
}