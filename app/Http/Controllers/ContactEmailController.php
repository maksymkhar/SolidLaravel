<?php

namespace App\Http\Controllers;

use App\Http\Flash;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactEmailController extends Controller
{
    public function send(Request $request)
    {
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
}
