<?php

namespace App\Http\Controllers\Website;

use App\Category;
use App\Gallery;
use App\News;
use App\Video;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoriesController
{
    public function view($slug) {
        $cat = Category::where(['slug' => $slug])->first();

        if(! $cat) return redirect('/');

        $items = ($cat->type == 'video') ? Video::where(['cat_id' => $cat->id])->paginate(12) : (($cat->type == 'news') ? News::where(['cat_id' => $cat->id])->paginate(1) : Gallery::where(['cat_id' => $cat->id])->paginate(12));

        return view('website.category', compact('items'))->with('category', $cat->title);
    }
}
