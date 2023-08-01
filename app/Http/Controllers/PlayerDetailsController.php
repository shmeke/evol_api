<?php

namespace App\Http\Controllers;

use App\Models\PlayerDetails;
use Illuminate\Http\Request;

class PlayerDetailsController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all players
        $players = PlayerDetails::all();
        //return JSON response with the players
        return response()->json($players);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'playerId' => 'required|integer',
            'name' => 'required|string',
            'year_born' => 'required|string',
            'home_town' => 'required|string',
            'looking_for_type' => 'required|string'
        ]);

        $player = PlayerDetails::create($validatedData);

        return response()->json($player, 201);
    }

    public function updateMatches(Request $request, Player $player)
    {
        $playerFound = PlayerDetails::where('playerId', $player)->first();

        $validatedData = $request->validate([
            'number_of_matches' => 'required|integer'
        ]);

        $playerFound->update($validatedData);

        return response()->json($playerFound, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(PlayerDetails $player)
    {
        // return JSON response with the player
        return response()->json($player);
    }

    public function getByEmail(String $email)
    {
        $player = PlayerDetails::where('email', $email)->first();

        return response()->json($player);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PlayerDetails $player)
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
    public function destroy(PlayerDetails $player)
    {
        $player->delete();

        return response()->json(null, 204);
    }
}
