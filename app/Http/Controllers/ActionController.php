<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class ActionController extends Controller
{
    public function store(Request $request)
    {
        $character = new Character;
        $character->name = $request->name;
        $character->date = $request->date;
        $character->title = $request->title;
        $character->illustrator = $request->illustrator;
        $character->save();
        return redirect ('/Personnages');
    }

    public function deleteCharacter(Request $request) {
        Character::destroy($request->id);
        return redirect('/Personnages');
    }

    public function updateCharacter(Request $request, $id) {
        $character = Character::findOrFail($id);
        $character->name = $request->name;
        $character->date = $request->date;
        $character->title = $request->title;
        $character->illustrator = $request->illustrator;
        $character->save();
        return redirect('/Personnages');
    }
}

