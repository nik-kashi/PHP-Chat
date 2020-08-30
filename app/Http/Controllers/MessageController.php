<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create(Request $request)
    {
        $user = User::find($request->userId);
        return $user->messages()->create(['message'=>$request->message]);
    }

    public function showAllMessages()
    {
        return response()->json(Message::with('user')->get());
    }
}
