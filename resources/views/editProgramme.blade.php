@extends('layouts.main')
@section('title', 'Modifier le programme')
@section('content')
    <main class="container">
        <h1 class="mt-5">Modifier le programme</h1>
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="{{ route('programme.updateProgramme', $programme->codeProgramme) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nomProgramme">Nom du programme:</label>
                        <input type="text" class="form-control" id="nomProgramme" name="nomProgramme" value="{{ $programme->nomProgramme }}" required>
                    </div>

                    <div class="form-group">
                        <label for="dureeEchange">Durée échange:</label>
                        <input type="text" class="form-control" id="dureeEchange" name="dureeEchange" value="{{ $programme->dureeEchange }}" required>
                    </div>

                    <div class="form-group">
                        <label for="codeDiplome">Code du diplôme:</label>
                        <input type="text" class="form-control" id="codeDiplome" name="codeDiplome" value="{{ $programme->codeDiplome }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                    <a href="{{ url('/programme') }}" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </main>
@endsection
