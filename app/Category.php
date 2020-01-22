<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name', 'category_img', 'created_by', 'sorting'];

    public function getUser()
    {
        return $this->hasOne('App\User', 'id', 'created_by');
    }

    public function getCategoryImgAttribute($img)
    {
        return asset('public/uploads/category_Images').'/'.$img;

    }
}
