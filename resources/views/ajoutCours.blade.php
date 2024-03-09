@extends('layouts.main')
<title>Ajouter un cours</title>
@section('content')
    <main>
        <h1>Ajouter un cours</h1>
        <form method="post" action="{{ route('cours.storeCours') }}">
            @csrf

            <label for="LibelleCours">Nom du cours:</label>
            <input type="text" id="LibelleCours" name="LibelleCours" required>

            <label for="nbECTS">ECTS:</label>
            <input type="text" id="nbECTS" name="nbECTS" required>

            <label for="annee">Année:</label>
            <input type="text" id="annee" name="annee" required>

            <label for="codeDiplome">Code du diplôme:</label>
            <input type="text" id="codeDiplome" name="codeDiplome" required>

            <button type="submit">Ajouter le cours</button>
            <a href="{{ url('/cours') }}">Annuler</a>
        </form>
    </main>
@endsection