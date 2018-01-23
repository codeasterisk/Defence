<?php

namespace App\Http\Controllers\Admin;

use App\Http\Traits\ApplicantOperation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicantsController extends Controller
{
    use ApplicantOperation;

    /**
     * Admin Middleware For Applicants Operation
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Admin');
    }
}
