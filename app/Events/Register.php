<?php

namespace App\Events;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Register
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $user;
    public function getUser()
    {
        return $this->user;
    }
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
