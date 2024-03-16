@extends('layouts.main')
@section('title', 'Gestion des cours')
@section('content')
    <main class="container">
        <h1 class="mt-5">Gestion des cours</h1>
        <div class="table-responsive mt-3">
            <table class="table">
                <thead>
                <tr>
                    <th>Code</th>
                    <th>Nom du cours</th>
                    <th>Nombre ECTS</th>
                    <th>Année</th>
                    <th>Nom diplôme</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($cours as $cours)
                    <tr>
                        <td>{{ $cours->codeCours }}</td>
                        <td>{{ $cours->LibelleCours }}</td>
                        <td>{{ $cours->nbECTS }}</td>
                        <td>{{ $cours->annee }}</td>
                        <td>
                            @if ($cours->diplomes)
                                {{ $cours->diplomes->nomDiplome }}
                            @else
                                Aucun diplôme associé
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('cours.editCours', $cours->codeCours) }}" class="btn btn-primary">Modifier</a>
                            <a href="{{ route('cours.confirmation', $cours->codeCours) }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('cours.createCours') }}" class="btn btn-success">Ajouter un cours</a>
    </main>
@endsection
