<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class LogController extends Controller
{
    /**
     * Show Logs
     * @return $this
     */
    public function index()
    {
        return view('Admin.log')->with('logs',Activity::all());
    }
}
