<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactEmailController extends Controller
{
    public function send(Request $request)
    {
        // FLASH NOTIFICATION
        $request->session()->flash(
            'notification',
            'All okk!!'
        );



        //echo "lorem";
        // TODO: SEND EMAIL
        return redirect()->route('welcome');
    }
}
