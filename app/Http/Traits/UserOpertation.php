<?php

namespace App\Http\Traits;


use App\User;
use Alert;

trait UserOpertation
{
    /**
     * Display a listing of the Users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::OrderBy('id','desc')->get();
        return view('Admin.Users.index')
            ->with('users',$users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Users.add');
    }

    /**
     * Register a New User and Give Him The Precessions.
     *
     * @param $request
     */
    public function register ($request)
    {
        if ($request->hasFile('profile_img')) {
            $profileimg = Image::make($request->profile_img)->resize(300, 200)->save(rand(99999, 999999999999) . $request->profileimg);
        }
        $user = User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>$request->role,
            'status'=>$request->status,
            'profile_img'=>$profileimg,
        ]);
    }

    /**
     * Store a newly created User in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|string',
            'status'=>'required|string',
            'profile_img'=>'required|image|mimes:jpeg,jpg,png,gif|max:100000'
        ]);
        $this->register($request);
        Alert::success('عظيم','تم اضافة عضو جديد بنجاح');
        return redirect('/dashboard/users');
    }

    /**
     * Display the specified User   .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if (Auth::user()->id == $id) Alert::erorr('Sorry','You Can\'t Delete Your Account'); return redirect('/dashboard/users');
        return view('Admin.Users.view')
            ->with('user',$user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        if (Auth::user()->id == $id) Alert::erorr('Sorry','You Can\'t Delete Your Account'); return redirect('/dashboard/users');
        return view('Admin.Users.edit')
            ->with('user',$user);
    }

    /**
     * Update the specified User in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (Auth::user()->id == $id) Alert::erorr('Sorry','You Can\'t Delete Your Account'); return redirect('/dashboard/users');

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'sometimes|string|min:6|confirmed',
            'role' => 'required|string',
            'status'=>'required|string',
            'profile_img'=>'sometimes|image|mimes:jpeg,jpg,png,gif|max:100000'
        ]);

        if ($request->hasFile('profile_img')) {
            $profileimg = Image::make($request->profile_img)->save(rand(99999, 999999999999) . $request->profileimg);
            $user->update(['profile_img'=>$profileimg,]);
        }
        if($request->password != null) {$user->update(['password'=>bcrypt($request->password),]);}
               $user->update(array_except($request->all(),['profile_img','password']));
        Alert::success('عظيم','تم تعديل هذا العضو بنجاح');
        return redirect('/dashboard/users');
    }

    /**
     * Remove the specified User from Database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) Alert::erorr('عذراً','ﻻ يوجد عضو بنفس المواصفات'); return redirect('/dashboard/users');
        if (Auth::user()->id == $id) Alert::erorr('عذراً','ﻻ يوجد عضو بنفس المواصفات');; return redirect('/dashboard/users');
        if ($user->role == 1) Alert::erorr('عذراً','ﻻ يوجد عضو بنفس المواصفات');; return redirect('/dashboard/users');
        User::find($id)->delete();
        Alert::success('عظيم','تم حذف العضو بنجاح');
        return redirect('/dashboard/users');
    }
}