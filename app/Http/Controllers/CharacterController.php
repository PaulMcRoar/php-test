<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Character;

class CharacterController extends Controller
{

    public function index()
    {
        return view('character.index', ['characters' => Character::paginate(15) ]);
    }

    public function show(Character $character)
    {
        return view('character.show', ['character' => $character ]);
    }
}