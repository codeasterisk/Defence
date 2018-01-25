<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FilltersController
{
    public function ByCategory() {
        return view('website.category');
    }
}
