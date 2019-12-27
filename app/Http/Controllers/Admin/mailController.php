<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Admin;

class mailController extends Controller
{
    public function sendMail(){

        Mail::to('mimo_199592@yahoo.com')->send( 
        	new \App\Mail\welcomeMail('Mo Nasser'));

   return 'Message has been Done';
    }

}
