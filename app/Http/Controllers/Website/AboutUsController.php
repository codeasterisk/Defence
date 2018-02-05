<?php
/**
 * Created by PhpStorm.
 * User: Murad
 * Date: 2/5/2018
 * Time: 9:18 PM
 */

namespace App\Http\Controllers\Website;


use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    /**
     * View About us page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view() {

        return view('website.about-us');
    }
}