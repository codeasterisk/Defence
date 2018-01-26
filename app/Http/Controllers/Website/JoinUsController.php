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

class JoinUsController
{
    public function view() {

        return view('website.join-us')
            ->with('trendings', News::orderBy('clicks', 'desc')->get())
            ->with('videos', Video::orderBy('created_at', 'desc')->get())
            ->with('infographs', Gallery::orderBy('created_at', 'desc')->get()->take(3))
            ->with('trending_searches', SearchLog::orderBy('clicks', 'desc')->get()->take(10));
    }

    public function send(Request $request) {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email',
            'phone'     => 'required|numeric',
            'job-title' => 'required',
            'cv'        => 'required|file|mimes:pdf,docx,doc',
            'about'     => 'required|string|max:255'
        ]);

        Joinus::create($request->all());


    }
}
