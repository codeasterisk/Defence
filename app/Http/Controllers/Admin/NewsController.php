<?php

namespace App\Http\Controllers\Admin;

use App\Http\Traits\NewsOperation;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    use NewsOperation;

    /**
     * Admin Middleware For News Operation
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Admin');
    }
}
