@extends('layouts.main')
@section('title', 'Confirmation de suppression')
@section('content')
    <main class="container">
        <h1 class="mt-5">Confirmation de suppression</h1>
        <div class="row">
            <div class="col-md-6">
                <p>Voulez-vous vraiment supprimer le diplôme "{{ $diplome->nomDiplome }}" ?</p>
                <form method="post" action="{{ route('diplome.destroyDiplome', $diplome->codeDiplome) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Oui, supprimer</button>
                    <a href="{{ route('diplome.index') }}" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </main>
@endsection
