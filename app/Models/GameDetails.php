<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameDetails extends Model
{
    use HasFactory;

    protected $fillable = ['game_id', 'description', 'game_size'];

    public function games() {
        return $this->belongsTo('App\Models\Game');
    }
}
