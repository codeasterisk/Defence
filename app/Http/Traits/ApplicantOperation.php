<?php

namespace App\Http\Traits;

use App\Joinus;
use Illuminate\Http\Request;
use Alert;
use DB;
use Illuminate\Support\Facades\Auth;

trait ApplicantOperation
{
    /**
     * Display a listing of the Applicants.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicants = Joinus::OrderBy('id','desc')->paginate(15);
        return view('Admin.Applicants.index')
            ->with('applicants',$applicants);
    }

    /**
     * Register a New Applicant
     *
     * @param $request
     */
    public function register ($request)
    {
        try {
            Joinus::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'phone'=>$request->phone,
             'about'=>$request->about,
            ]);

        }
        catch(ValidationException $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/');
        }
        catch(\Exception $e)
        {
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/');
        }
    }

    /**
     * Store a newly created Applicant in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'url' => 'required|string|max:255|url',
            'title' => 'required|string|max:255|unique:videos',
            'description' => 'required|string',
        ]);
        $this->register($request);
        Alert::success('عظيم','لقد أرسلت لنا سيرتك الذاتية بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified Applicant   .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $applicant = Joinus::find($id);
        $applicant->update([
            'status'=>'1'
        ]);
        return view('Admin.Applicants.view')
            ->with('applicant',$applicant);
    }


    /**
     * Remove the specified Applicant from Database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $applicant = Joinus::find($id);
        if (!$applicant){ Alert::warning('عذراً','ﻻ يوجد سيرة ذاتية بنفس المواصفات'); return redirect('/dashboard/applicants');}
        Joinus::find($id)->delete();
        Alert::success('عظيم','تم حذف السيرة الذاتية بنجاح');
        return redirect('/dashboard/videos');
    }
}