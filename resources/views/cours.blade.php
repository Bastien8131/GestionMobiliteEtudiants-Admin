@extends('layouts.main')
<title>Gestion des cours</title>
@section('content')
    <main>
        <h1>Gestion des cours</h1>
        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Nom du cours</th>
                    <th>Nombre ECTS</th>
                    <th>Année</th>
                    <th>Nom diplôme</th>
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
                                Aucun diplome associée
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection