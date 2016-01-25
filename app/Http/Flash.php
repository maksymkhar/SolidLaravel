<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25/01/16
 * Time: 20:15
 */

namespace App\Http;


class Flash
{
    public function message($message)
    {
        echo "Missatgee";

        //session->flash('flash_message', $message);
    }
}