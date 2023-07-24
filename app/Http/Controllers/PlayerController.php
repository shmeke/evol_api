<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all players
        $players = Player::all();
        //return JSON response with the players
        return response()->json($players);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $player = Player::create($validatedData);

        return response()->json($player, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        // return JSON response with the player
        return response()->json($player);
    }

    public function getByEmail(String $email)
    {
        $player = Player::where('email', $email)->first();

        return response()->json($player);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        $validatedData = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $player->update($validatedData);

        return response()->json($player, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        $player->delete();

        return response()->json(null, 204);
    }
}