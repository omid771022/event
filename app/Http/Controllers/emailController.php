<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Mail\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Notification;

class emailController extends Controller
{





    public function email()
    {

        $data = [];
        Mail::send([], $data, function (Message $message) {
            $message->to('evil13771022@gmail.com', 'omid ')->from('evil13771022@gmail.com', 'sender ')
                ->subject('test emalil ');
        });
        dd("eevnv");
    }

public function sendNot(){



    $data = [];
    Mail::send([], $data, function (Message $message) {
        $message->to('evil13771022@gmail.com', 'omid ')->from('evil13771022@gmail.com', 'sender ')
            ->subject('test emalil ');
    });

    $user = User::first();
    $details = [

        'greeting' => 'Hi Artisan',

        'body' => 'This is my first notification from ItSolutionStuff.com',


        'actionText' => 'View My Site',

        'actionURL' => url('/'),

        'order_id' => 101

    ];



    $user->notify(new InvoicePaid($details));



    dd('done');


}


}
