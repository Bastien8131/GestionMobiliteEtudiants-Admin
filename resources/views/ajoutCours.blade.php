@extends('layouts.main')
@section('title', 'Ajouter un cours')
@section('content')
    <main class="container">
        <h1 class="mt-5">Ajouter un cours</h1>
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="{{ route('cours.storeCours') }}">
                    @csrf

                    <div class="form-group">
                        <label for="LibelleCours">Nom du cours:</label>
                        <input type="text" class="form-control" id="LibelleCours" name="LibelleCours" required>
                    </div>

                    <div class="form-group">
                        <label for="nbECTS">ECTS:</label>
                        <input type="text" class="form-control" id="nbECTS" name="nbECTS" required>
                    </div>

                    <div class="form-group">
                        <label for="annee">Année:</label>
                        <input type="text" class="form-control" id="annee" name="annee" required>
                    </div>

                    <div class="form-group">
                        <label for="codeDiplome">Code du diplôme:</label>
                        <input type="text" class="form-control" id="codeDiplome" name="codeDiplome" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter le cours</button>
                    <a href="{{ url('/cours') }}" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </main>
@endsection
