<?php

namespace App\Http\Controllers;



use App\Events\BlockEvent;
use App\Events\ChatSessionEvent;
use App\Events\MsgReadEvent;
use App\Events\PrivateChatEvent;
use App\Http\Resources\ChatResource;
use App\Http\Resources\SessionResource;
use App\Http\Resources\UserResource;
use App\Models\ChatSession;
use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class ChatsController extends Controller
{


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
//        if(request()){
//            $chat_session_exists = ChatSession::query()
//                ->whereIn('user1_id', [auth()->id(), request()->user_id])
//                ->whereIn('user2_id', [auth()->id(), request()->user_id])
//                ->first();
//            if ($chat_session_exists){
//                return view('chat');
//            }else{
//                $chatSession = new ChatSession();
//                $chatSession->user1_id = auth()->id();
//                $chatSession->user2_id = \request()->user_id;
//                $chatSession->save();
//            }
//        }
        return view('chat');

    }



    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getFriends()
    {
        $messages = Message::select('chat_session_id')->groupBy('chat_session_id')->pluck('chat_session_id')->toArray();

        $chat_sessions = ChatSession:: whereIn('id', $messages)->  //erb petqa suyc trvi messaginerov
        where('user1_id', auth()->id())                           //erb petqa cuyc trvi seession_chat ov
        ->orWhere('user2_id', auth()->id())->get();

        for ($i = 0; $i < count($chat_sessions); $i++) {
            $arr[] = User::where('id', '!=', auth()->id())->where(function ($query) use ($chat_sessions, $i) {
                $query->where('id', $chat_sessions[$i]['user1_id'])
                    ->orWhere('id', $chat_sessions[$i]['user2_id']);

            })->first();
        }

        return UserResource::collection($arr);

    }



    /**
     * @param Request $request
     * @return SessionResource
     */
    public function create(Request $request)
    {
        $session = ChatSession::create(['user1_id' => auth()->id(), 'user2_id' => $request->friend_id]);

        $modifiedSession = new SessionResource($session);
        broadcast(new ChatSessionEvent($modifiedSession, auth()->id()));
        return $modifiedSession;
    }

    /**
     * @param ChatSession $session
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function chats(ChatSession $session)
    {
        return ChatResource::collection($session->chats->where('user_id', auth()->id()));
    }


    /**
     * @param ChatSession $session
     */
    public function read(ChatSession $session)
    {
        $chats = $session->chats->where('read_at', null)->where('type', 1)->where('user_id', auth()->id());
        $chats2 = $session->chats->where('read_at', null)->where('type', 0)->where('user_id', '!=',auth()->id());

        foreach ($chats as $chat) {
            $chat->update(['read_at' => Carbon::now()]);
            broadcast(new MsgReadEvent(new ChatResource($chat), $chat->session_id));
        }
        foreach ($chats2 as $chat) {
            $chat->update(['read_at' => Carbon::now()]);
            broadcast(new MsgReadEvent(new ChatResource($chat), $chat->session_id));
        }
    }

    /**
     * @param ChatSession $session
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function clear(ChatSession $session)
    {
        $session->deleteChats();
        $session->chats->count() == 0 ? $session->deleteMessages() : '';
        return response('cleared', 200);
    }


    public function block(ChatSession $session)
    {
        $session->block();

        broadcast(new BlockEvent($session->id, true));

        return response(null, 201);
    }

    public function unblock(ChatSession $session)
    {
        $session->unblock();

        broadcast(new BlockEvent($session->id, false));

        return response(null, 201);
    }

    /**
     * @param ChatSession $session
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function send(ChatSession $session, Request $request)
    {
        if ($request->has('file')){
            $file_name = $request->file('file')->getClientOriginalName();
            $ext = explode('.', $file_name);
            $extension = end($ext);
            $file = auth()->user()->id . '-' . time() . '.' . $extension;
//            $file = auth()->user()->id . '-' . time() . '.' . $request->file('file')->extension();

            $request->file('file')->storeAs('public/chat',$file);
            $message = $session->messages()->create([
                'image' => $file,
            ]);
            $chat = $message->createForSend($session->id);

            $message->createForReceive($session->id, $request->to_user);
            broadcast(new PrivateChatEvent(null,$message->image, $chat));
            return response(['data' => [$chat->id => 200],'message' => $file]);
        }else{
            $message = $session->messages()->create([
                'content' => $request->message
            ]);


            $chat = $message->createForSend($session->id);

            $message->createForReceive($session->id, $request->to_user);

            broadcast(new PrivateChatEvent($message->content,null, $chat));
            return response([$chat->id=> 200,'message' => $request->message]);
        }
    }
    public function last_visit($id){
        date_default_timezone_set('Asia/Yerevan');
        $date = date("Y-m-d H:i:s");
        $user = User::where('id',$id)->first();
        $user->last_logout_date = $date;
        $user->save();
        return response(['last_logout_date'=>$date]);
    }


}
