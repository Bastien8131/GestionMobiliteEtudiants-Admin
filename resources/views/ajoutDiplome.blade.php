@extends('layouts.main')
@section('title', 'Ajouter un diplôme')
@section('content')
    <main class="container">
        <h1 class="mt-5">Ajouter un diplôme</h1>
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="{{ route('diplome.storeDiplome') }}">
                    @csrf

                    <div class="form-group">
                        <label for="nomDiplome">Nom du diplôme:</label>
                        <input type="text" class="form-control" id="nomDiplome" name="nomDiplome" required>
                    </div>

                    <div class="form-group">
                        <label for="niveauDiplome">Niveau du diplôme:</label>
                        <input type="text" class="form-control" id="niveauDiplome" name="niveauDiplome" required>
                    </div>

                    <div class="form-group">
                        <label for="codeU">Code de l'université:</label>
                        <input type="text" class="form-control" id="codeU" name="codeU" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter le diplôme</button>
                    <a href="{{ url('/diplome') }}" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </main>
@endsection
