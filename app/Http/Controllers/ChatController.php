<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
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

        $validatedData = $request->validate([
            'player_id' => 'required|integer',
            'matched_player_id' => 'required|integer',
        ]);

        $chat = Chat::create($validatedData);

        return response()->json($chat, 201);
    }



    public function show(User $user)
    {
        $user_id = $user->getKey();
        $chat = Chat::where('user_id', $user_id);
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

