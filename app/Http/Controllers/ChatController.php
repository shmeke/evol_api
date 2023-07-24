<?php

namespace App\Http\Controllers;

use App\Models\chats;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $chats = Chat::all();
        return response()->json($chats);
    }

    public function store(Request $request)
    {
        $chat = Chat::create($request);
        return response()->json($chat, 201);
    }

    public function show(Chat $chat)
    {
        // return JSON response with the player
        return response()->json($chat);
    }

    public function update(Request $request, Chat $chat)
    {
        $chat->update($request);

        return response()->json($chat, 200);
    }

    public function destroy(Chat $chat)
    {
        $chat->delete();

        return response()->json(null, 204);
    }
}

