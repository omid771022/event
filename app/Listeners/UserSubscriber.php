<?php


namespace App\Listeners;

use App\Events\Register;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\Log;

class UserSubscriber
{
public function  subscribe(Dispatcher $events){

    $events->listen(Register::class, 'App\Listeners\UserSubscriber@CallAdmin');
    $events->listen(Register::class, 'App\Listeners\UserSubscriber@SendEmail');
    $events->listen(Register::class, 'App\Listeners\UserSubscriber@SendWelcome');

}

public function CallAdmin(Register $event)
{

    Log::info('i called admin for user' . $event->getUser()->name);
}

    public function SendEmail(Register $event)
    {
        $user = $event->GetUser();
        $code = '123465';
        Log::info('send activation email to ' . $user->name . ' | code is: ' . $code);

    }

    public function SendWelcome(Register $event)
    {
        $user = $event->GetUser();
        Log::info('send welcome email to ' . $user);

    }

}
