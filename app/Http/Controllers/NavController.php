<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Illustrator;

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
        $illustrators = Illustrator::all();
        return view('add', ['illustrators' => $illustrators]);
    }

    public function updateCharacter($id) {
        $illustrators = Illustrator::all();
        $character = Character::findOrFail($id);
        return view('updateCharacter', ['character' => $character, 'illustrators' => $illustrators] );
    }
}
