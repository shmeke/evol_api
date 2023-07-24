<?php

namespace App\Http\Controllers;

use App\Models\chatmessagelog;
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
        $message = ChatMessage::create($request);
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