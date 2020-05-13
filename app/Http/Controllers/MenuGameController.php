<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuGameController extends Controller
{
    public function index()
    {
    	$data['game'] = \App\Game::get();
        return view('game', $data);
    }
    public function gameplay()
    {
    	$data['game'] = \App\Game::get();
        return view('game_play', $data);
    }
}
