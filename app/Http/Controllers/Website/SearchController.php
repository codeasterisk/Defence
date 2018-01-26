<?php

namespace App\Http\Controllers\Website;

use App\Gallery;
use App\News;
use App\SearchLog;
use App\Video;
use Illuminate\Http\Request;

class SearchController
{
    public function search($word) {
        $news = News::where('title', 'like', "%$word%")->orWhere('description', 'like', "%$word%")->paginate(4);

        if ($search = SearchLog::where(['word' => $word])->first()) $search->update(['clicks' => $search->clicks+1]); else SearchLog::create(['word' => $word]);

        return view('website.search', compact('news','word'))
            ->with('trendings', News::orderBy('clicks', 'desc')->get())
            ->with('videos', Video::orderBy('created_at', 'desc')->get())
            ->with('infographs', Gallery::all()->take(3))
            ->with('trending_searches', SearchLog::orderBy('clicks', 'desc')->get()->take(10));
    }
}
