<?php

namespace App\Http\Controllers\DataEntry;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Show Main DataEnty Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        activity()->log('زيارة الصفحة الرئيسية والاحصائيات ');
        return view('DataEntry.main');

    }
}
