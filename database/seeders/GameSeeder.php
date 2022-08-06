<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = [
            [
                'title' => 'DOTA 2',
                'type' => '5vs5 Multiplayer Game'
            ],

            [
                'title' => 'Apex Legends',
                'type' => 'First Person Shooting Game'
            ]
        ];
        foreach($games as $g) {
            Game::create($g);
        }
    }
}
