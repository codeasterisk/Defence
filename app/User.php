<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','profile_img','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     *Show User Associated Categories
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Categories()
    {
        return $this->belongsToMany('App\Category', 'userepartements', 'user_id', 'cat_id');
    }
}
