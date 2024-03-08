@extends('layouts.main')
<title>Gestion des programmes</title>
@section('content')
    <main>
        <h1>Gestion des programmes</h1>
        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Nom programme</th>
                    <th>Durée échange</th>
                    <th>Nom diplôme</th>
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
                                Aucun diplome associée
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection