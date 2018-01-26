<?php


namespace App\Http\Controllers\Website;


use App\Gallery;
use App\News;
use App\SearchLog;
use App\Video;

class VideosController
{
    public function view($slug) {

        $post = Video::where(['slug' => $slug])->first();

        if(!$post) return redirect('/');

        return view('website.single-video', compact('post'))
            ->with('trendings', News::orderBy('clicks', 'desc')->get())
            ->with('videos', Video::orderBy('created_at', 'desc')->get())
            ->with('infographs', Gallery::all()->take(3))
            ->with('trending_searches', SearchLog::orderBy('clicks', 'desc')->get()->take(10))
            ->with('related', Video::where('id', '>', $post->id)->where(['cat_id' => $post->category->id])->get()->take(3));
    }
}