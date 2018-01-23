<?php

namespace App\Http\Traits;

use App\Contactus;
use Illuminate\Http\Request;
use Alert;
use DB;

trait ContactOpertation
{
    /**
     * Display a listing of the Contacts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts= Contactus::OrderBy('id','desc')->paginate(15);
        return view('Admin.Contact.index')
            ->with('contacts',$contacts);
    }

    /**
     * Register a New Applicant
     *
     * @param $request
     */
    public function register ($request)
    {
        try {
            Contactus::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'phone'=>$request->phone,
             'subject'=>$request->subject,
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
     * Store a newly created Contact in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'phone' => 'required|string',
            'subject' => 'required|string',
        ]);
        $this->register($request);
        Alert::success('عظيم','لقد أرسلت لنا سيرتك الذاتية بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified Contact   .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contactus::find($id);
        $contact->update([
            'status'=>'1'
        ]);
        return view('Admin.Contact.view')
            ->with('contact',$contact);
    }


    /**
     * Remove the specified Contact from Database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contactus::find($id);
        if (!$contact){ Alert::warning('عذراً','ﻻ يوجد رسائل بنفس المواصفات'); return redirect('/dashboard/contact');}
        Contactus::find($id)->delete();
        Alert::success('عظيم','تم حذف الرسالة بنجاح');
        return redirect('/dashboard/contact');
    }
}