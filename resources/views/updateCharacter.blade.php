@extends('layouts.base')

@section('title', 'Modification Personnage')

@section('content')
<div id="backadd">
    <form action="/modifier/{{ $character->id }}" method="post">
        @csrf
        <label for="name">Nom du personnage :</label><br>
        <input type="text" id="name" name="name" placeholder="Ex: Kid Paddle" ><br><br>

        <label for="date">Date de création :</label><br>
        <input type="text" id="date" name="date" placeholder="Ex: 1993"><br><br>

        <label for="title">Titre de la BD :</label><br>
        <input type="text" id="title" name="title" placeholder="Ex: Kid Paddle"><br><br>

        <label for="illustrator">Dessinateur :</label><br>
        <select name="illustrator_id">
                @foreach ($illustrators as $illustrator)
                    <option value="{{ $illustrator->id }}">{{ $illustrator->name }}</option>
                @endforeach
            </select>
        <input id="illustrator_id" name="illustrator_id" placeholder="Ex: Midam"><br><br>

        <input type="submit" value="Modifier">
    </form>
</div>
@endsection