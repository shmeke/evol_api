<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use Illuminate\Http\Request;

class ChatMessageController extends Controller
{
    public function index()
    {
        $message = ChatMessage::all();
        return response()->json($chats);
    }

    public function store(Request $request)
    {
        $validateddata = $request->validate([
            'message' => 'required|string',
            'chat_id' => 'required|integer',
            'from_user_id' => 'required|integer',
            'to_user_id' => 'required|integer'
        ]);

        $message = ChatMessage::create($validateddata);
        return response()->json($message, 201);
    }

    public function show(ChatMessage $message)
    {
        // return JSON response with the player
        return response()->json($message);
    }

    public function update(Request $request, ChatMessage $message)
    {
        $message->update($request);

        return response()->json($message, 200);
    }

    public function destroy(ChatMessage $message)
    {
        $message->delete();

        return response()->json(null, 204);
    }
}