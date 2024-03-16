@extends('layouts.main')
@section('title', 'Modifier le diplôme')
@section('content')
    <main class="container">
        <h1 class="mt-5">Modifier le diplôme</h1>
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="{{ route('diplome.updateDiplome', $diplome->codeDiplome) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nomDiplome">Nom du diplôme:</label>
                        <input type="text" class="form-control" id="nomDiplome" name="nomDiplome" value="{{ $diplome->nomDiplome }}" required>
                    </div>

                    <div class="form-group">
                        <label for="niveauDiplome">Niveau du diplôme:</label>
                        <input type="text" class="form-control" id="niveauDiplome" name="niveauDiplome" value="{{ $diplome->niveauDiplome }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                    <a href="{{ url('/diplome') }}" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </main>
@endsection
