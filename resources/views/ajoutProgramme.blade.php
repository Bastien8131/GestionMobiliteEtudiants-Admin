@extends('layouts.main')
@section('title', 'Ajouter un programme')
@section('content')
    <main class="container">
        <h1 class="mt-5">Ajouter un programme</h1>
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="{{ route('programme.storeProgramme') }}">
                    @csrf

                    <div class="form-group">
                        <label for="nomProgramme">Nom du programme:</label>
                        <input type="text" class="form-control" id="nomProgramme" name="nomProgramme" required>
                    </div>

                    <div class="form-group">
                        <label for="dureeEchange">Durée échange:</label>
                        <input type="text" class="form-control" id="dureeEchange" name="dureeEchange" required>
                    </div>

                    <div class="form-group">
                        <label for="codeDiplome">Code du diplôme:</label>
                        <input type="text" class="form-control" id="codeDiplome" name="codeDiplome" required>
                    </div>

                    <div class="form-group">
                        <label for="codeDiplome_1">Code du diplôme 1:</label>
                        <input type="text" class="form-control" id="codeDiplome_1" name="codeDiplome_1" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter le programme</button>
                    <a href="{{ url('/programme') }}" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </main>
@endsection
