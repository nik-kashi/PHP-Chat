<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MessageController extends Controller
{
    public function create(Request $request)
    {
        $user = User::find($request->userId);
        $message = $request->message;
        Log::info("new message From: " . ($user->name) . " Message: " . $message);
        return $user->messages()->create(['message' => $message]);
    }

    public function getNewMessages(Request $request)
    {
        $from = $request->input('from');
        return response()->json(Message::with('user')->where('id', '>', $from)->get());
    }
}
