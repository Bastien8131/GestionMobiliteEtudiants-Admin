@extends('layouts.main')
<title>Ajouter un programme</title>
@section('content')
    <main>
        <h1>Ajouter un programme</h1>
        <form method="post" action="{{ route('programme.storeProgramme') }}">
            @csrf

            <label for="nomProgramme">Nom du programme:</label>
            <input type="text" id="nomProgramme" name="nomProgramme" required>

            <label for="dureeEchange">Durée échange:</label>
            <input type="text" id="dureeEchange" name="dureeEchange" required>

            <label for="codeDiplome">Code du diplôme:</label>
            <input type="text" id="codeDiplome" name="codeDiplome" required>

            <label for="codeDiplome_1">Code du diplôme 1:</label>
            <input type="text" id="codeDiplome_1" name="codeDiplome_1" required>

            <button type="submit">Ajouter le programme</button>
            <a href="{{ url('/programme') }}">Annuler</a>
        </form>
    </main>
@endsection