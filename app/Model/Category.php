<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];
    public function article()
    {
        return $this->hasMany('App\Model\Article');
    }
}
