<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'img', 'title', 'description','user_id',
    ];
    /**
     * Get Gallery Writer
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function writer()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
