@extends('layouts.main')
@section('title', 'Liste des contrats')

@section('content')
    <main class="container">
        <h1 class="mt-5">Gestion des contrats</h1>
        <div class="table-responsive mt-3">
            <table class="table">
                <thead>
                <tr>
                    <th>Durée</th>
                    <th>État</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listeContrats as $contrat)
                    <tr>
                        <td>{{$contrat->dureeContrat}} mois</td>
                        <td>{{$contrat->etatContrat}}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#afficherContrat{{$contrat->codeContrat}}">
                                Afficher le contrat
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        @foreach($listeContrats as $contrat)
            <div class="modal fade" id="afficherContrat{{$contrat->codeContrat}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content" style="height: 90vh">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Information sur le contrat</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <iframe src="{{route('contrat.afficher', ['id' => $contrat->codeContrat])}}" style="width: 100%; height: 100%"></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
@endsection
