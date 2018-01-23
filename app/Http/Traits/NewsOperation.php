<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use App\News;
use Alert;
use Illuminate\Support\Facades\Auth;

trait NewsOperation
{
    /**
     * Display a listing of the News.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::OrderBy('id','desc')->get();
        return view('Admin.News.index')
            ->with('news',$news);
    }

    /**
     * Show the form for creating a new News.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.News.add');
    }

    /**
     * Register a New News Record.
     *
     * @param $request
     */
    public function register ($request)
    {

        try {
            $slug=make_slug($request->title,'-');
            if ($request->img != null)
            {
                if ($request->hasFile('img')) {
                    $img = uploader($request,'img');
                }
            }
        News::create([
            'prefix' =>$request->title,
            'cat_id' =>$request->cat_id,
            'user_id' =>Auth::user()->id,
            'title' =>$request->title,
            'description' =>$request->description,
            'img' =>$img,
            'subject' =>$request->subject,
            'status' =>$request->status,
            'writer'=>Auth::user()->name,
            'slug' =>$slug,
        ]);

        }
        catch(ValidationException $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/news');
        }
        catch(\Exception $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/news');
        }
    }

    /**
     * Store a newly created News in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'prefix' =>'required|string|max:255',
            'cat_id' =>'required|string|exists:categories,id',
            'title' =>'required|string|max:255',
            'description' =>'required|string|max:160',
            'subject' =>'required|string',
            'img' =>'required|image|mimes:jpeg,jpg,png,gif|max:100000',
            'status' =>'required',
        ]);
        $this->register($request);
        Alert::success('عظيم','تم اضافة خبر جديد بنجاح');
        return redirect('/dashboard/news');
    }

    /**
     * Display the specified News   .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new = News::find($id);
        return view('Admin.News.view')
            ->with('new',$new);
    }

    /**
     * Show the form for editing the specified New.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = News::find($id);

        return view('Admin.News.edit')
            ->with('new',$new);
    }

    public function UpdateRecords($new, $request)
    {
        try {
            if ($request->img != null)
            {
                if ($request->hasFile('img')) {
                    $img = uploader($request,'img');
                    $new->update(['img' => $img]);
                }
            }
            $slug=make_slug($request->title,'-');
        $new->update([
            'prefix' =>$request->title,
            'cat_id' =>$request->cat_id,
            'user_id' =>Auth::user()->id,
            'title' =>$request->title,
            'description' =>$request->description,
            'subject' =>$request->subject,
            'status' =>$request->status,
            'writer'=>Auth::user()->name,
            'slug' =>$slug,

        ]);

        }
        catch(ValidationException $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/news');
        }
        catch(\Exception $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/news');
        }
    }

    /**
     * Update the specified News in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new = News::find($id);

            $this->validate($request, [
                'prefix' =>'required|string|max:255',
                'cat_id' =>'required|string|exists:categories,id',
                'title' =>'required|string|max:255',
                'description' =>'required|string|max:160',
                'subject' =>'required|string',
                'img' =>'sometimes|image|mimes:jpeg,jpg,png,gif|max:100000',
                'status' =>'required',
                ]);

        //update News Record
        $this->UpdateRecords($new,$request);
        Alert::success('عظيم','تم تعديل هذا القسم بنجاح');
        return redirect('/dashboard/news');
    }

    /**
     * Remove the specified News from Database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        if (!$news){ Alert::warning('عذراً','ﻻ يوجد خبر بنفس المواصفات'); return redirect('/dashboard/news');}
        News::find($id)->delete();
        Alert::success('عظيم','تم حذف الخبر بنجاح');
        return redirect('/dashboard/news');
    }
}