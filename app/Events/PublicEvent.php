<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PublicEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $messages;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(array $messages)
    {
        //
        $this->messages = $messages;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        //return new PrivateChannel('channel-name');
        return new Channel('public-event');
    }

    public function broadcastWith()
    {
      return [
          'message' => $this->messages,
      ];
    }
}

