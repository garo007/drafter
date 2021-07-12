<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Jenssegers\Date\Date;

class ChatResource extends JsonResource
{

    public function toArray($request)
    {
        Carbon::setLocale('ru');
        $created = Carbon::parse($this->created_at)->format('d M Y');

        return [
            'message' => $this->message['content'],
            'image'  =>$this->message['image'],
            'id' => $this->id,
            'type' => $this->type,
            'read_at' => $this->read_at_timing($this),
            'send_at' =>  Carbon::parse($this->created_at)->diffForHumans(),
            'created' => $created
        ];
    }
    private function read_at_timing($_this)
    {
        $read_at = $_this->type == 0 ? Carbon::parse($_this->read_at) : null;
        if ($read_at){
             return $read_at->diffForHumans(Carbon::now());
        }else{
            return null;
        }
    }
}
