@extends('layouts.main')
@section('title', 'Diplome par université')
@section('content')
    <main class="container diplomeUniv">
        <h3 class="text-center mt-5">Filtrer par université</h3>
            @foreach ($universites as $universite)
                <a href="{{ route('diplome.universite', $universite->codeU) }}">- {{ $universite->nomU }}</a><br>
            @endforeach
            <h2>Diplômes de l'université : {{ $selectedUniversite ? $selectedUniversite->nomU : '' }}</h2>
        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Niveau</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($diplomes as $diplome)
                <tr>
                    <td>{{ $diplome->codeDiplome }}</td>
                    <td>{{ $diplome->nomDiplome }}</td>
                    <td>{{ $diplome->niveauDiplome }}</td>
                @empty
                <li>Aucun diplôme trouvé</li>
                </tr>
            @endforelse
            </tbody>
        </table>
        <a href="{{ url('/diplome') }}">Page précédente</a>
    </main>
@endsection