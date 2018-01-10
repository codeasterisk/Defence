<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'news_id', 'ip'
    ];

    /**
     * Get News Click
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
