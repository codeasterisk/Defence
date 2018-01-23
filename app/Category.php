<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug','type'
    ];

    /**
     * Get Category News
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news()
    {
        return $this->hasMany(News::class,'cat_id');
    }


    /**
     * Get Category Videos
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function videos()
    {
        return $this->hasMany(Video::class,'cat_id');
    }

    /**
     * Get Category infographics
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function infographics()
    {
        return $this->hasMany(Gallery::class,'cat_id');
    }

    /**
     *Show  Category Users
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'userepartements', 'cat_id', 'user_id');
    }

}
