<?php

namespace App\Http\Traits;

use App\Gallery;
use Illuminate\Http\Request;
use Alert;
use Image;
use DB;
use Illuminate\Support\Facades\Auth;

trait InfographicOperation
{
    /**
     * Display a listing of the Graphs.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graphs = Gallery::OrderBy('id','desc')->get();
        return view('Admin.Infograph.index')
            ->with('graphs',$graphs);
    }

    /**
     * Show the form for creating a new Graphs.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Infograph.add');
    }

    /**
     * Register a New Graph
     *
     * @param $request
     */
    public function register ($request)
    {

        try {

            $slug=make_slug($request->title,'-');

            if ($request->hasFile('img')) {
                $img=uploader($request,'img');
            }

            Gallery::create([
            'img' =>$img,
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
            return Redirect('/dashboard/infographics');
        }
        catch(\Exception $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/infographics');
        }
    }

    /**
     * Store a newly created Graph in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string|max:255|unique:galleries',
            'description' => 'required|string',
            'img' => 'required|image|mimes:jpeg,jpg,png,gif|max:100000',
            'cat_id'=>'required',
        ]);
        $this->register($request);
        Alert::success('عظيم','تم اضافة انفوجراف جديد بنجاح');
        return redirect('/dashboard/infographics');
    }

    /**
     * Display the specified Graph   .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $graph = Gallery::find($id);
        return view('Admin.Infograph.view')
            ->with('gaph',$graph);
    }

    /**
     * Show the form for editing the specified Graph.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $graph = Gallery::find($id);

        return view('Admin.Infograph.edit')
            ->with('graph',$graph);
    }

    public function UpdateRecords($graph, $request)
    {
        try {


            $slug=make_slug($request->title,'-');

            if ($request->img != null)
            {
                if ($request->hasFile('img')) {
                    $img = uploader($request,'img');
                    $graph->update(['img' => $img]);
                }
            }
            
            $slug=make_slug($request->title,'-');

        $graph->update([
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
            return Redirect('/dashboard/infographics');
        }
        catch(\Exception $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/infographics');
        }

    }

    /**
     * Update the specified Graph in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $graph = Gallery::find($id);
            $this->validate($request, [
                'title' => 'required|string|max:255|unique:galleries,title,'. $graph->id,
                'description' => 'required|string',
                'img' => 'sometimes|image|mimes:jpeg,jpg,png,gif|max:100000',
                'cat_id'=>'required',
            ]);
        //update Graph Record
        $this->UpdateRecords($graph,$request);
        Alert::success('عظيم','تم تعديل هذا انفوجراف بنجاح');
        return redirect('/dashboard/infographics');
    }

    /**
     * Remove the specified Graph from Database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $graph = Gallery::find($id);
        if (!$graph){ Alert::warning('عذراً','ﻻ يوجد انفوجراف بنفس المواصفات'); return redirect('/dashboard/infographics');}
        Gallery::find($id)->delete();
        Alert::success('عظيم','تم حذف الانفوجراف بنجاح');
        return redirect('/dashboard/infographics');
    }
}