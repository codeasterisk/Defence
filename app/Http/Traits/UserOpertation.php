<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use App\User;
use Alert;
use Image;
use DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\String\Str;

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
        DB::beginTransaction();
        try {
        if ($request->hasFile('profile_img')) {
          $profileimg=uploader($request,'profile_img');
        }
        $user = User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>$request->role,
            'status'=>$request->status,
            'profile_img'=>$profileimg,
        ]);

        if ($user->role ==2)
        $user->givePermissionTo($request->permissions);
            $user->Categories()->attach($request->cat_id);
        }
        catch(ValidationException $e)
        {
            DB::rollback();
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/users');
        }
        catch(\Exception $e)
        {
            DB::rollback();
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/users');
        }
        DB::commit();
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
        $cat = $user->Categories;
        $permissions = $user->permissions;
        $pre = $permissions->pluck('name');
        return view('Admin.Users.edit')
            ->with('user',$user)
            ->with('cat',$cat->pluck('id'))
            ->with('pre',$pre);

    }

    public function UpdateRecords($user,$request)
    {
        DB::beginTransaction();
        try {
            if ($request->profile_img != null)
            {
                if ($request->hasFile('profile_img')) {
                    $profileimg = uploader($request,'profile_img');
                    $user->update(['profile_img' => $profileimg]);
                }
        }
        if($request->password != null) {$user->update(['password'=>bcrypt($request->password),]);}
        $user->update([
            'name' =>$request->name,
            'email' =>$request->email,
            'role'=>$request->role,
            'status'=>$request->status,
        ]);
        if ($user->role ==2)
            $user->syncPermissions($request->permissions);
            $user->Categories()->sync($request->cat_id);
        }
        catch(ValidationException $e)
        {
            DB::rollback();
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/users');
        }
        catch(\Exception $e)
        {
            DB::rollback();
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('/dashboard/users');
        }
        DB::commit();
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
        if($request->password != null) {
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
                'password' => 'sometimes|string|min:6|confirmed',
                'role' => 'required|string',
                'status' => 'required|string',
                'profile_img' => 'sometimes|image|mimes:jpeg,jpg,png,gif|max:100000'
            ]);
        }elseif($request->password == null)
        {
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
                'role' => 'required|string',
                'status' => 'required|string',
                'profile_img' => 'sometimes|image|mimes:jpeg,jpg,png,gif|max:100000'
            ]);
        }
        //update User Record
        $this->UpdateRecords($user,$request);
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
        if (!$user){ Alert::warning('عذراً','ﻻ يوجد عضو بنفس المواصفات'); return redirect('/dashboard/users');}
        if (Auth::user()->id == $id) {Alert::warning('عذراً','ﻻ يمكنك حذف عضويتك'); return redirect('/dashboard/users');}
        if ($user->role == 1) {Alert::warning('عذراً','ﻻ يمكنك حذف مدير موقع'); return redirect('/dashboard/users');}
        User::find($id)->delete();
        Alert::success('عظيم','تم حذف العضو بنجاح');
        return redirect('/dashboard/users');
    }
}