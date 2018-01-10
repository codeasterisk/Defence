<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prefix', 'cat_id', 'user_id','title','description','img','subject','slug','status','writer'
    ];

    /**
     * Get News Writer
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function writer()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    /**
     * Get News Category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }

    /**
     * Get News Clicks
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clicks()
    {
        return $this->HasMany(News::class);
    }

}
