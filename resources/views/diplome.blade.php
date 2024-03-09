@extends('layouts.main')
<title>Gestion des diplômes</title>
@section('content')
    <main>
        <h1>Gestion des diplômes</h1>
        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Nom diplôme</th>
                    <th>Niveau</th>
                    <th>Nom université</th>
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
                        <td><a href="{{ route('diplome.editDiplome', $diplome->codeDiplome) }}">Modifier</a></td>
                        <td><a href="{{ route('diplome.confirmation', $diplome->codeDiplome) }}">Supprimer</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('diplome.createDiplome') }}">Ajouter un diplôme</a>
    </main>
@endsection