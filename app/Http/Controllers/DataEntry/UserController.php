<?php

namespace App\Http\Controllers\DataEntry;

use App\Http\Traits\UserOpertation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;
use Alert;
class UserController extends Controller
{
    use UserOpertation;

    /**
     * DataEntry Middleware For User Operation
     * @return void
     */
    public function __construct()
    {
        $this->middleware('EntryMiddleware');
    }

    /**
     * Show the form for editing the specified User.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        $user =Auth::user();
        $cat = $user->Categories;
        $permissions = $user->permissions;
        $pre = $permissions->pluck('name');
        activity()->log('زيارة صفحة البروفايل الخاص به');
        return view('DataEntry.Users.edit')
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
            if($request->password != null) {$user->update(['password'=>bcrypt($request->password)]);}
            $user->update([
                'name' =>$request->name,
                'email' =>$request->email,
            ]);

        }
        catch(ValidationException $e)
        {
            DB::rollback();
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('editors/profile');
        }
        catch(\Exception $e)
        {
            DB::rollback();
            Alert::error('عذراً','حدث خطأ ما , حاول ثانية');;
            return Redirect('editors/profile');
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
    public function update(Request $request)
    {
        $user = Auth::user();
        if($request->password != null) {
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
                'password' => 'sometimes|string|min:6|confirmed',
                'profile_img' => 'sometimes|image|mimes:jpeg,jpg,png,gif|max:100000'
            ]);
        }elseif($request->password == null)
        {
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
                'profile_img' => 'sometimes|image|mimes:jpeg,jpg,png,gif|max:100000'
            ]);
        }
        //update User Record
        $this->UpdateRecords($user,$request);
        Alert::success('عظيم','تم تعديل بروفايلك الشخصي بنجاح');
        activity()->log('قام بتعديل المعلومات الخاصة به');
        return redirect('editors/profile');
    }

}
