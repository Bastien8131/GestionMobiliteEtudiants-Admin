@extends('layouts.main')
<title>Confirmation de suppression</title>
@section('content')
    <main>
        <h1>Confirmation de suppression</h1>
        <p>Voulez-vous vraiment supprimer le diplôme "{{ $diplome->nomDiplome }}" ?</p>
        <form method="post" action="{{ route('diplome.destroyDiplome', $diplome->codeDiplome) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Oui, supprimer</button>
            <a href="{{ route('diplome.index') }}">Annuler</a>
        </form>
    </main>
@endsection