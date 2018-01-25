<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController
{
    public function index() {
        return view('website.welcome');
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
