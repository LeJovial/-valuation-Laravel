<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class NavController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function list() {
        $characters = Character::all();
        return view('list', ['characters' => $characters]);
    }

    public function add() {
        return view('add');
    }

    public function updateCharacter($id) {
        $character = Character::findOrFail($id);
        return view('updateCharacter', ['character' => $character]);
    }
}
