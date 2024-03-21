@extends('layouts.main')
@section('title', 'Gestion des diplômes')
@section('content')
    <main class="container">
        <h1 class="mt-5">Gestion des diplômes</h1>
        <table class="table mt-3">
            <thead>
            <tr>
                <th>Code</th>
                <th>Nom diplôme</th>
                <th>Niveau</th>
                <th>Nom université</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($diplomes as $diplome)
                <tr>
                    <td>{{ $diplome->codeDiplome }}</td>
                    <td>{{ $diplome->nomDiplome }}</td>
                    <td>{{ $diplome->niveauDiplome }}</td>
                    <td>
                        @if ($diplome->universites)
                            {{ $diplome->universites->nomU }}
                        @else
                            Aucune université associée
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('diplome.editDiplome', $diplome->codeDiplome) }}" class="btn btn-primary">Modifier</a>
                        <a href="{{ route('diplome.confirmation', $diplome->codeDiplome) }}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('diplome.createDiplome') }}" class="btn btn-success">Ajouter un diplôme</a><br>
        <a href="{{ url('/diplomeUniv') }}" class="text-center mt-5 btn btn-success">Consulter les diplômes par université</a>
    </main>
@endsection
