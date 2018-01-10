<?php

namespace App\Http\Controllers\Admin;

use App\Http\Traits\UserOpertation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    use UserOpertation;

    /**
     * Admin Middleware For User Operation
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Admin');
    }
}
