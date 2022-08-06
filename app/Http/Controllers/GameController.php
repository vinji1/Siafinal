<?php

namespace App\Http\Controllers;
use App\Models\Game;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index() {
        $games = Game::with('game_details')->get();

        return inertia('Game',[
            'games' => $games
        ]);
    }
}
