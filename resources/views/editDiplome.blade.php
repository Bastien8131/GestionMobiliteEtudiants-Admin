@extends('layouts.main')
<title>Modifier le diplôme</title>
@section('content')
    <main>
        <h1>Modifier le diplôme</h1>
        <form method="post" action="{{ route('diplome.updateDiplome', $diplome->codeDiplome) }}">
            @csrf
            @method('PUT')

            <label for="nomDiplome">Nom du diplôme:</label>
            <input type="text" id="nomDiplome" name="nomDiplome" value="{{ $diplome->nomDiplome }}" required>

            <label for="niveauDiplome">Niveau du diplôme:</label>
            <input type="text" id="niveauDiplome" name="niveauDiplome" value="{{ $diplome->niveauDiplome }}" required>

            <button type="submit">Enregistrer les modifications</button>
            <a href="{{ url('/diplome') }}">Annuler</a>
        </form>
    </main>
@endsection