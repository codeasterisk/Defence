<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joinus extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','phone','about','status', 'job_title', 'cv'
    ];
}
