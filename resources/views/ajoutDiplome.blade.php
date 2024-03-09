@extends('layouts.main')
<title>Ajouter un diplôme</title>
@section('content')
    <main>
        <h1>Ajouter un diplôme</h1>
        <form method="post" action="{{ route('diplome.storeDiplome') }}">
            @csrf

            <label for="nomDiplome">Nom du diplôme:</label>
            <input type="text" id="nomDiplome" name="nomDiplome" required>

            <label for="niveauDiplome">Niveau du diplôme:</label>
            <input type="text" id="niveauDiplome" name="niveauDiplome" required>

            <label for="codeU">Code de l'université:</label>
            <input type="text" id="codeU" name="codeU" required>

            <button type="submit">Ajouter le diplôme</button>
            <a href="{{ url('/diplome') }}">Annuler</a>
        </form>
    </main>
@endsection