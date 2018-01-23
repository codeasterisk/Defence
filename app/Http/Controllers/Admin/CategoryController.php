<?php

namespace App\Http\Controllers\Admin;

use App\Http\Traits\CategoryOpertation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    use CategoryOpertation;

    /**
     * Admin Middleware For Category Operation
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Admin');
    }

}
