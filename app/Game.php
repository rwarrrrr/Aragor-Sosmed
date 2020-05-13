<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = "t_game";
    protected $primaryKey = "id";

    protected $guarded = [
    	'created_at','updated_at',
    ];
}
