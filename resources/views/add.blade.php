@extends('layouts.base')

@section('title', 'Ajout Personnages')

@section('content')
<div id="backadd">
    <form action="/AjoutPerso" method="post">
        @csrf
        <label for="name">Nom du personnage :</label><br>
        <input type="text" id="name" name="name" placeholder="Ex: Kid Paddle" ><br><br>

        <label for="date">Date de création :</label><br>
        <input type="text" id="date" name="date" placeholder="Ex: 1993"><br><br>

        <label for="title">Titre de la BD :</label><br>
        <input type="text" id="title" name="title" placeholder="Ex: Kid Paddle"><br><br>

        <label for="illustrator">Dessinateur :</label><br>
        <input type="text" id="illustrator" name="illustrator" placeholder="Ex: Midam"><br><br>

        <input type="submit" value="Ajouter">

    </form>
</div>
@endsection