@extends('layouts.main')
<title>Modifier le programme</title>
@section('content')
    <main>
        <h1>Modifier le programme</h1>
        <form method="post" action="{{ route('programme.updateProgramme', $programme->codeProgramme) }}">
            @csrf
            @method('PUT')

            <label for="nomProgramme">Nom du programme:</label>
            <input type="text" id="nomProgramme" name="nomProgramme" value="{{ $programme->nomProgramme }}" required>

            <label for="dureeEchange">Durée échange:</label>
            <input type="text" id="dureeEchange" name="dureeEchange" value="{{ $programme->dureeEchange }}" required>

            <button type="submit">Enregistrer les modifications</button>
            <a href="{{ url('/programme') }}">Annuler</a>
        </form>
    </main>
@endsection