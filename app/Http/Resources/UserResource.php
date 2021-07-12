<?php

namespace App\Http\Resources;

use App\Models\ChatSession;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        date_default_timezone_set('Asia/Yerevan');
       // $current_date = date_default_timezone_get();
        //date_default_timezone_set($current_date);
        Carbon::setLocale('ru');

        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'online' => false,
            'session' => $this->session_details($this->id),
            'image' => $this->profile ? $this->profile->profil_photo: '' ,
            'last_logout_date' => $this->last_logout_date != null ? Carbon::parse($this->last_logout_date)->diffForHumans() : '',
        ];
    }
    private function session_details($id)
    {
        $session = ChatSession::query()->whereIn('user1_id', [auth()->id(), $id])->whereIn('user2_id', [auth()->id(), $id])->first();
        return new SessionResource($session);
    }
}
