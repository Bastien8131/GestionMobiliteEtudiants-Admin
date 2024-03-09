@extends('layouts.main')
<title>Confirmation de suppression</title>
@section('content')
    <main>
        <h1>Confirmation de suppression</h1>
        <p>Voulez-vous vraiment supprimer le programme "{{ $programme->nomProgramme }}" ?</p>
        <form method="post" action="{{ route('programme.destroyProgramme', $programme->codeProgramme) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Oui, supprimer</button>
            <a href="{{ route('programme.index') }}">Annuler</a>
        </form>
    </main>
@endsection