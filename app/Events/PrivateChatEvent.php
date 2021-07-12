<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PrivateChatEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $content;
    public $chat;
    public $image;
    /**
     * PrivateChatEvent constructor.
     * @param $content
     * @param $chat
     * @param  $image
     */
    public function __construct($content,$image, $chat)
    {
        $this->content = $content ? $content: null;
        $this->image = $image ? $image : null;
        $this->chat = $chat;
        $this->dontBroadcastToCurrentUser();
    }

    /**
     * @return PrivateChannel
     */
    public function broadcastOn()
    {
        return new PrivateChannel('Chat.'. $this->chat->session_id);
    }

}
