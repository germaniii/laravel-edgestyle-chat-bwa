<?php

namespace App\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ConsoleLogEvent implements ShouldBroadcast
{
    use Dispatchable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function broadcastOn()
    {
        // Specify the channel or channels you want to broadcast on
        return ['newMessage'];
    }

    public function broadcastAs()
    {
        // Set the event name
        return 'ConsoleLogEvent';
    }
}