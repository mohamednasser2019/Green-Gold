<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name','category_img','created_by'];

     public function getUser()
    {
    	return $this->hasOne('App\User', 'id', 'created_by');
    }
}
