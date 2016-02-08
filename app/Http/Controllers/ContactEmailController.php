<?php

namespace App\Http\Controllers;

use App\Http\Flash;
use App\Jobs\SendSubscriptionEmail;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactEmailController extends Controller
{
    protected $user;

    /**
     * ContactEmailController constructor.
     * @param $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }


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
        $this->user->email = "maksymkharuk@iesebre.com";
        $this->dispatch(new SendSubscriptionEmail($this->user));

        return "Jolo Compolo!";
    }
}
