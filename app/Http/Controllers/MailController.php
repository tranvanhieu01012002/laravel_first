<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function sendMail(){
        Mail::to('test@gmail.com')->send(new NotifyMail("anh Hieu"));
        return $this->markdown('emails.test');
    }
}
