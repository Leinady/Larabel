<?php

namespace App\Http\Controllers;

use App\Models\lain;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
   
    public function basic_email()
    {
        $data = array('name'=>"Thirapat");

        Mail::send(['text'=>'mail'], $data, function($message){
            $message->to('s5935512064@phuket.psu.ac.th','EIEI')->subject('Laravel Testing Mail');
            $message->from('s6135512040@phuket.psu.ac.th', 'Thirapat');
        });
        echo "6135512040 Thirapat Pathan";
    }

}
