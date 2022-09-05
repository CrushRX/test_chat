<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Messages;
use http\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function create(Request $request)
    {
        if ($request->get('name') == null || $request->get('message') == null)
            return response('Error', 422);

        $message = new Messages();
        $message->name = $request->get('name');
        $message->message = $request->get('message');
        $message->save();

        broadcast(new MessageSent($message));

        return $message;
    }

    public function list(Request $request)
    {
        return Messages::select('id', 'name', 'message', 'created_at')->get();
    }

    public function delete(Request $request)
    {
        Messages::where('id', $request->get('id'))->delete();
    }
}
