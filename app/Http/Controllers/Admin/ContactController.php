<?php

namespace App\Http\Controllers\Admin;

use App\Http\Traits\ContactOpertation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    use ContactOpertation;

    /**
     * Admin Middleware For Contact Operation
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Admin');
    }
}
