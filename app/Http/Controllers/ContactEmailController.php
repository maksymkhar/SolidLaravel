<?php

namespace App\Http\Controllers;

use App\Http\Flash;
use App\Jobs\SendSubscriptionEmail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactEmailController extends Controller
{
    public function send(Request $request)
    {

        $this->sendEmail();


        // FLASH NOTIFICATION
        $request->session()->flash(
            'flash_message',
            'All okk!!'
        );
//
//        Flash::message("Okk!!");

        //$flash = app('\App\Http\Flash');

        //$flash->message("WOLOLO");



        //echo "lorem";
        // TODO: SEND EMAIL
        return redirect()->route('welcome');
    }

    public function sendEmail()
    {
        $this->dispatch(new SendSubscriptionEmail());

        return "Jolo Compolo!";
    }
}
