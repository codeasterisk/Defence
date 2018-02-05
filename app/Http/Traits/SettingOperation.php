<?php

namespace App\Http\Traits;

use App\Joinus;
use App\Setting;
use Illuminate\Http\Request;
use Alert;
use DB;
use Illuminate\Support\Facades\Auth;

trait SettingOperation
{
    /**
     * Display a listing of the Settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.setting')
            ->with('settings', Setting::all());
    }
    /**
     * Update Existing Setting
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        $data = $request->all();
        
        if($request->file('logo')) $data['logo'] = uploader($request, 'logo'); else unset($data['logo']);
        
        foreach ($data as $key => $value) {
            if($key == '_token' || !$value) continue;
            Setting::where(['key' => $key])->update(['value' => $value]);
            if(Setting::where(['key' => $key])->first()->value != $value) {
                alert()->success('', '!');
                return redirect()->back();
            }
        }
        alert()->success('تم التعديل بنجاح', ' عظيم');
        return redirect()->back();
    }

}