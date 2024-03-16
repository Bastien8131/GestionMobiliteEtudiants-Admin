@extends('layouts.main')
@section('title', 'Modifier le cours')
@section('content')
    <main class="container">
        <h1 class="mt-5">Modifier le cours</h1>
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="{{ route('cours.updateCours', $cours->codeCours) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="LibelleCours">Nom du cours:</label>
                        <input type="text" class="form-control" id="LibelleCours" name="LibelleCours" value="{{ $cours->LibelleCours }}" required>
                    </div>

                    <div class="form-group">
                        <label for="nbECTS">ECTS:</label>
                        <input type="text" class="form-control" id="nbECTS" name="nbECTS" value="{{ $cours->nbECTS }}" required>
                    </div>

                    <div class="form-group">
                        <label for="annee">Année:</label>
                        <input type="text" class="form-control" id="annee" name="annee" value="{{ $cours->annee }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                    <a href="{{ url('/cours') }}" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </main>
@endsection
