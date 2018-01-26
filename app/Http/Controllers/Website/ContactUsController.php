<?php

namespace App\Http\Controllers\Website;

use App\Category;
use App\Contactus;
use App\Gallery;
use App\Joinus;
use App\News;
use App\SearchLog;
use App\Video;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ContactUsController
{
    public function view() {

        return view('website.contact-us');
    }

    public function send(Request $request) {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'subject'   => 'required',
            'message'     => 'required|string|max:255'
        ]);

        Contactus::create(Input::all());

        return redirect('/');
    }
}
