<?php

namespace App\Http\Controllers\Admin;

use App\Http\Traits\InfographicOperation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfographicController extends Controller
{
    use InfographicOperation;

    /**
     * Admin Middleware For InfoGraphics Operation
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Admin');
    }
}
