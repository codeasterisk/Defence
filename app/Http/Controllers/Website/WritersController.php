<?php

namespace App\Http\Controllers\Website;

use App\Category;
use App\Gallery;
use App\Joinus;
use App\News;
use App\SearchLog;
use App\Video;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class WritersController
{
    public function view() {

        return view('website.write')
            ->with('categories', Category::where(['type' => 'news'])->get(['id', 'title']));
    }

    public function send(Request $request) {
        $request->validate([
            'prefix'        => 'required',
            'category'      => 'required|exists:categories,id',
            'writer'        => 'required',
            'title'         => 'required|max:255',
            'description'   => 'required|max:255',
            'img'           => 'required|image|mimes:png,jpeg,jpg,tiff,bmp',
            'subject'       => 'required|string'
        ]);

        $filename = rand(9,888888) . time() . '.' . $request->file('img')->clientExtension();
        $request->file('img')->move('photos', $filename);

        $inputs = $request->all();

        $inputs['img'] = $filename;

        $inputs['status'] = 0;

        $inputs['slug'] = str_slug($request->title);

        $inputs['slug'] .= '-' . time();

        $inputs['cat_id'] = $request->category;

        News::create($inputs);

        return redirect('/');
    }
}
