<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mail\Oferta;
use Illuminate\Support\Facades\Mail;
use Response;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send(){

        Mail::send('emails.send', null, function ($message) {
            $message->from('us@example.com', 'Laravel');

            $message->to('Dzyndzelkuba@gmail.com')->subject('test!');
        });
    }
}
