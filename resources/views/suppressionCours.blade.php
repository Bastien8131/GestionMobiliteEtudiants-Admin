@extends('layouts.main')
<title>Confirmation de suppression</title>
@section('content')
    <main>
        <h1>Confirmation de suppression</h1>
        <p>Voulez-vous vraiment supprimer le cours "{{ $cours->LibelleCours }}" ?</p>
        <form method="post" action="{{ route('cours.destroyCours', $cours->codeCours) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Oui, supprimer</button>
            <a href="{{ route('cours.index') }}">Annuler</a>
        </form>
    </main>
@endsection