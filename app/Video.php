<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 'title', 'description','user_id'
    ];

    /**
     * Get Video Writer
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function writer()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
