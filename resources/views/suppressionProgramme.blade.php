@extends('layouts.main')
@section('title', 'Confirmation de suppression')
@section('content')
    <main class="container">
        <h1 class="mt-5">Confirmation de suppression</h1>
        <div class="row">
            <div class="col-md-6">
                <p>Voulez-vous vraiment supprimer le programme "{{ $programme->nomProgramme }}" ?</p>
                <form method="post" action="{{ route('programme.destroyProgramme', $programme->codeProgramme) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Oui, supprimer</button>
                    <a href="{{ route('programme.index') }}" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </main>
@endsection
