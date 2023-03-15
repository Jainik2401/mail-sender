<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $maildata = [
            'title' => 'hello',
            'body' => 'thi is for testing email using smtp'
        ];
        Mail::to('kevin@uptakeinfotech.com')->send(new DemoMail($maildata));

        dd('email send successfully');
    }
}