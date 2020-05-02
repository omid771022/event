<?php

namespace App\Listeners;

use App\Events\Register;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return boolean
     */
    public function handle(Register $event)
    {
//        $user = $event->GetUser();
//        $code = '123465';
//        Log::info('send activation email to '. $user->name . ' | code is: ' . $code);

    }
}
