<?php

namespace App\Http\Controllers\Website;

use App\Category;
use App\Gallery;
use App\News;
use App\SearchLog;
use App\Video;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GalleriesController
{
    public function view($slug) {

        $post = Gallery::where(['slug' => $slug])->first();

        if(!$post) return redirect('/');

        return view('website.single-info-graph', compact('post'))
            ->with('trendings', News::orderBy('clicks', 'desc')->get())
            ->with('videos', Video::orderBy('created_at', 'desc')->get())
            ->with('infographs', Gallery::orderBy('created_at', 'desc')->get()->take(3))
            ->with('trending_searches', SearchLog::orderBy('clicks', 'desc')->get()->take(10))
            ->with('related', Gallery::where('id', '>', $post->id)->where(['cat_id' => $post->category->id])->get()->take(3));
    }
}
