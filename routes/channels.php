<?php

use App\Models\ChatSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('user.{userId}', function ($user, $userId) {
    return $user->id === $userId;
});

Broadcast::channel('Chat', function ($user) {
   return $user;
});

Broadcast::channel('Chat.{session}', function ($user, ChatSession $session) {
    if ($user->id  === $session->user1_id || $user->id  === $session->user2_id) {
        return  true;
    }
    return false;
});
