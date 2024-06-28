<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    //
    public function testEmail()
    {
        Mail::raw('This is a test email', function ($message) {
            $message->to('quoctrung130920@gmail.com')
                    ->subject('Test Email');
        });

        return 'Email sent successfully';
    }
}
