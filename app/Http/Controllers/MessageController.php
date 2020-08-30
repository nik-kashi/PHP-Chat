<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create(Request $request)
    {
        $mesaage = Message::create($request->all());
        return response()->json($mesaage, 201);
    }

    public function showAllMessages()
    {
        return response()->json(Message::all());
    }
}
