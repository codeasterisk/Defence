<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use App\Category;
use Alert;
use Image;
use DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

trait CategoryOpertation
{
    /**
     * Display a listing of the Categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::OrderBy('id','desc')->get();
        return view('Admin.Categories.index')
            ->with('categories',$categories);
    }

    /**
     * Show the form for creating a new Category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Categories.add');
    }

    /**
     * Register a New Category and Give Him The Precessions.
     *
     * @param $request
     */
    public function register ($request)
    {
        try {
            $slug=make_slug($request->title,'-');
            Category::create([
            'title' =>$request->title,
            'slug' =>$slug,
            'type'=>$request->type
            ]);

        }
        catch(ValidationException $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/categories');
        }
        catch(\Exception $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/categories');
        }
    }

    /**
     * Store a newly created Category in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string|max:255|unique:categories',
            'type'  =>'required|string'
        ]);
        $this->register($request);
        Alert::success('عظيم','تم اضافة قسم جديد بنجاح');
        return redirect('/dashboard/categories');
    }

    /**
     * Display the specified Category   .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('Admin.Categories.view')
            ->with('category',$category);
    }

    /**
     * Show the form for editing the specified Category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        return view('Admin.Categories.edit')
            ->with('category',$category);
    }

    public function UpdateRecords($category,$request)
    {
        try {
            $slug=make_slug($request->title,'-');
        $category->update([
            'title' =>$request->title,
            'slug' =>$slug,
            'type'=>$request->type
        ]);

        }
        catch(ValidationException $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/categories');
        }
        catch(\Exception $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/categories');
        }
    }

    /**
     * Update the specified Category in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

            $this->validate($request, [
                'title' => 'required|string|max:255|unique:categories,title,' . $category->id,
                'type'=>'required'
            ]);

        //update Category Record
        $this->UpdateRecords($category,$request);
        Alert::success('عظيم','تم تعديل هذا القسم بنجاح');
        return redirect('/dashboard/categories');
    }

    /**
     * Remove the specified Category from Database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if (!$category){ Alert::warning('عذراً','ﻻ يوجد قسم بنفس المواصفات'); return redirect('/dashboard/categories');}
        Category::find($id)->delete();
        Alert::success('عظيم','تم حذف القسم بنجاح');
        return redirect('/dashboard/categories');
    }
}