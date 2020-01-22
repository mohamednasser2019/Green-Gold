<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
      protected $fillable = ['event_title', 'event_img', 'event_desc', 'event_link', 'created_by','type'];


    public function getUser()
    {
        return $this->hasOne('App\User', 'id', 'created_by');
    }

        public function getEventImgAttribute($img)
    {
        if ($img)
            return asset('public/uploads/Event_Images') . '/' . $img;
        else
            return "";
    }
}
