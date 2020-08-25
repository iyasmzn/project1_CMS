<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'title', 'content', 'image', 'slug',
    ];
    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
    public function comment()
    {
        return $this->hasMany('App\Model\Comment');
    }
    public function tag()
    {
        return $this->belongsToMany('App\Model\Tag');
    }
}
