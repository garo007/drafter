<?php

namespace App\Http\Resources;

use App\Models\Message;
use Illuminate\Http\Resources\Json\JsonResource;

class SessionResource extends JsonResource
{

    public function toArray($request)
    {
        $content = "";
        $chat =  $this->chats()->where('type', 0)->where('user_id', '!=', auth()->id())->latest()->first();
        $chat ? $message = Message::find($chat->message_id) :$message = false;

        $message ? $content = $message->content : $content = ""  ;
        $message ? $contentImage = $message->image : $contentImage = ""  ;
        ($contentImage==null) ? $contentImage = '' : '' ;
        return [
            'id' => $this->id,
            'open' => false,
            'users' => [$this->user1_id, $this->user2_id],
            'unreadCount' => $this->chats->where('read_at', null)->where('type', 1)->where('user_id', auth()->id())->count(),
            'lastMessage' => $content,
            'lastMessageFile' => $contentImage,
            'block' => !!$this->is_block,
            'blocked_by' => $this->blocked_by,
        ];
    }
}
