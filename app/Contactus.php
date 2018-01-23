<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status', 'email','phone','subject'
    ];
}
