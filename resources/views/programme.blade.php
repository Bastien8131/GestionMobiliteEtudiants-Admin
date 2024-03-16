@extends('layouts.main')
@section('title', 'Gestion des programmes')
@section('content')
    <main class="container">
        <h1 class="mt-5">Gestion des programmes</h1>
        <div class="table-responsive mt-3">
            <table class="table">
                <thead>
                <tr>
                    <th>Code</th>
                    <th>Nom programme</th>
                    <th>Durée échange</th>
                    <th>Nom diplôme</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($programmes as $programme)
                    <tr>
                        <td>{{ $programme->codeProgramme }}</td>
                        <td>{{ $programme->nomProgramme }}</td>
                        <td>{{ $programme->dureeEchange }}</td>
                        <td>
                            @if ($programme->diplomes)
                                {{ $programme->diplomes->nomDiplome }}
                            @else
                                Aucun diplôme associé
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('programme.editProgramme', $programme->codeProgramme) }}" class="btn btn-primary">Modifier</a>
                            <a href="{{ route('programme.confirmation', $programme->codeProgramme) }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('programme.createProgramme') }}" class="btn btn-success">Ajouter un programme</a>
    </main>
@endsection
