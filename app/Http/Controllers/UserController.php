<?php
namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Events\Register;
use App\Jobs\EmailWelcome;
use App\Jobs\SendSleep;
use App\Jobs\SendVerifcationEmailjob;
use App\Listeners\SendEmail;
use App\User;
use Illuminate\Http\Request;
use function Sodium\add;


class UserController extends Controller
{
    public function create(Request $request)
    {
       $user= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);



//        SendVerifcationEmailjob::dispatch($user);
//       event(new Register($user));



        // حالت معمولی  اجرا
//        SendSleep::dispatch($user)->onQueue('emailsend ');
//        SendSleep::dispatch($user)->onQueue('default')->delay(now()->addSeconds(2));



//    SendSleep::withChain([
//
//        new SendVerifcationEmailjob($user),
//        new SendVerifcationEmailjob($user),
//        new SendVerifcationEmailjob($user),
//        new SendVerifcationEmailjob($user),
//        new SendVerifcationEmailjob($user),
//        new SendVerifcationEmailjob($user),
//        new SendVerifcationEmailjob($user),
//    ])->dispatch($user)->delay(now()->addSeconds(7));




        SendVerifcationEmailjob::dispatch($user);
        SendSleep::dispatch($user);
        EmailWelcome::dispatch($user);



        return response($user. "شما  به عنوان کار بر  سیو  شدید ", '201');


    }



}
