<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class configration extends Model
{
      protected $fillable = ['intro_image', 'appointment_intro', 'logo', 'service_image', 'about', 'address', 'working_time', 'phone', 'email', 'facebook', 'twitter', 'google'];
}
