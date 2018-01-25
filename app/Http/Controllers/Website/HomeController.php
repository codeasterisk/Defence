<?php

namespace App\Http\Controllers\Website;

use App\Category;
use App\Gallery;
use App\News;
use App\SearchLog;
use App\Video;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController
{
    public function index() {
        return view('website.welcome')
            ->with('categories', Category::all())
            ->with('latest_news', News::orderby('created_at', 'desc')->get()->take(5))
            ->with('pane_news', Category::where(['type' => 'news'])->get())
            ->with('pane_latest', Category::where(['type' => 'news'])->orderBy('created_at', 'desc')->get())
            ->with('trendings', News::orderBy('clicks', 'desc')->get())
            ->with('videos', Video::orderBy('created_at', 'desc')->get())
            ->with('infographs', Gallery::all()->take(3))
            ->with('trending_searches', SearchLog::orderBy('clicks', 'desc')->get()->take(10));
    }

    public function getBreackingNews(Request $request):JsonResponse {

    }

    public function getLatest(Request $request):JsonResponse {

    }

    public function getNewsByCategory(Request $request):JsonResponse {

    }

    public function getMostRead(Request $request):JsonResponse {

    }

    public function getInfographs(Request $request):JsonResponse {

    }
}
