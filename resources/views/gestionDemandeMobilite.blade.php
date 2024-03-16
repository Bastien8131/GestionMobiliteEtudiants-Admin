@extends('layouts.main')
@section('title', 'Gestion des demandes de mobilité')

@section('content')
    <main class="container">
        <h1 class="mt-5">Gestion des demandes de mobilité</h1>
        <div class="table-responsive mt-3">
            <table class="table">
                <thead>
                <tr>
                    <th>Date de dépôt</th>
                    <th>État de demande</th>
                    <th>Numéro étudiant</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($demandeMobilites as $demandeMobilite)
                    <tr>
                        <td>{{$demandeMobilite->dateDepotDemandeM}}</td>
                        <td>{{$demandeMobilite->etatDemandeM}}</td>
                        <td>{{$demandeMobilite->numEtudiant }}</td>
                        <td>
                            @if($demandeMobilite->etatDemandeM == 'enattente' || $demandeMobilite->etatDemandeM == 'refuser')
                                <a href="{{route('demandeMobilite.changerEtat', ['action' => 'valider', 'codeDemande' => $demandeMobilite->codeDemandeM])}}" class="btn btn-success">Valider</a>
                            @endif
                            @if($demandeMobilite->etatDemandeM == 'enattente' || $demandeMobilite->etatDemandeM == 'valider')
                                <a href="{{route('demandeMobilite.changerEtat', ['action' => 'refuser', 'codeDemande' => $demandeMobilite->codeDemandeM])}}" class="btn btn-danger">Refuser</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
