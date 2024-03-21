@extends('layouts.main')
@section('title', 'Cours par diplôme')
@section('content')
    <main class="container">
        <h3 class="text-center mt-5">Filtrer par diplôme</h3>
            @foreach ($diplomes as $diplome)
                <a href="{{ route('cours.diplome', $diplome->codeDiplome) }}">- {{ $diplome->nomDiplome }}</a><br>
            @endforeach
            <h2>Cours des diplômes : {{ $selectedDiplome ? $selectedDiplome->nomDiplome : '' }}</h2>
        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Nombre ECTS</th>
                    <th>Année</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($cours as $cours)
                <tr>
                    <td>{{ $cours->codeCours }}</td>
                    <td>{{ $cours->LibelleCours }}</td>
                    <td>{{ $cours->nbECTS }}</td>
                    <td>{{ $cours->annee }}</td>
                @empty
                <li>Aucun cours trouvé</li>
                </tr>
            @endforelse
            </tbody>
        </table>
        <a href="{{ url('/cours') }}">Page précédente</a>
    </main>
@endsection