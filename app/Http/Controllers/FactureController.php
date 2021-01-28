<?php

namespace App\Http\Controllers;

use App\Mail\Facture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FactureController extends Controller
{
    public function sendEmail()
        {
            $details = [
                'title' => 'Un mail de chez nous',
                'body' => 'This is for testing mail using gmail.'
            ];

            Mail::to("lucas.sevault1@gmail.com")->send(new Facture($details));
            return "Email Sent";
        }


}

