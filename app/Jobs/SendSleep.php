<?php

namespace App\Jobs;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendSleep implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $user;
    public function __construct(User $user)
    {
       $this-> user =$user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        var_dump('run Send Sleep');
    }
}
