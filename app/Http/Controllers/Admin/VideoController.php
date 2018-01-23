<?php

namespace App\Http\Controllers\Admin;

use App\Http\Traits\VideoOperation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    use VideoOperation;
    /**
     * Admin Middleware For Video Operation
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Admin');
    }
}
