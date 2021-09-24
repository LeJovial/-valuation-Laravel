@extends('layouts.base')

@section('title', 'Personnages')

@section('content')
<div class="info">
    <h1 class="title">Liste des personnages</h1>
</div><br>
<div id="list">
    <table border="1"> 
        <thead>
            <tr>
                <th>Nom</th>
                <th>Date création</th>
                <th>Titre BD</th>
                <th>Dessinateur</th>
            </tr>
        </thead>
        <tbody>
            @foreach($characters as $character)
                <tr>
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->date }}</td>
                    <td>{{ $character->title }}</td>
                    <td>{{ $character->illustrator_id }}</td>
                    <td>
                        <a href="/modifier/{{ $character->id }}" class="btn btn-primary">Modifier</a>
                    </td>
                    <td>
                        <form action="/supprimer/{{ $character->id }}" method="post">
                            @csrf
                            <input type="submit" value="Supprimer">
                            <input type="hidden" id="suppr" name="suppr" value="$character->id">
                        </form>
                    </td>
                </tr> 
            @endforeach
        </tbody>
    </table>
</div>
@endsection