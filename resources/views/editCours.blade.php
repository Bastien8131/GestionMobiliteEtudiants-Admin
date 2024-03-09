@extends('layouts.main')
<title>Modifier le cours</title>
@section('content')
    <main>
        <h1>Modifier le cours</h1>
        <form method="post" action="{{ route('cours.updateCours', $cours->codeCours) }}">
            @csrf
            @method('PUT')

            <label for="LibelleCours">Nom du cours:</label>
            <input type="text" id="LibelleCours" name="LibelleCours" value="{{ $cours->LibelleCours }}" required>

            <label for="nbECTS">ECTS:</label>
            <input type="text" id="nbECTS" name="nbECTS" value="{{ $cours->nbECTS }}" required>

            <label for="annee">Année:</label>
            <input type="text" id="annee" name="annee" value="{{ $cours->annee }}" required>

            <button type="submit">Enregistrer les modifications</button>
            <a href="{{ url('/cours') }}">Annuler</a>
        </form>
    </main>
@endsection