<?php

namespace App\Observers;

use App\EventCreated;
use App\User;

class UserObserver
{
    public function created(User $user)
    {
//        EventCreated::create([
//         'email' => $user->email,
//         'name' => $user->name,
//         'password' => bcrypt($user->password),
//
//            ]);



    }


    public function updated(User $user)
    {

    }


    public function deleted(User $user)
    {
        //
    }

    public function restored(User $user)
    {
        //
    }

    public function forceDeleted(User $user)
    {
        //
    }
}
