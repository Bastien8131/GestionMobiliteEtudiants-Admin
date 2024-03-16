@extends('layouts.main')
@section('title', 'Gestion des demandes de mobilité')

@section('content')
    <main class="container">
        <h1 class="text-center mb-4">Demandes de financement</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Code Demande</th>
                    <th>Date de dépôt</th>
                    <th>État</th>
                    <th>Montant</th>
                    <th>Code Contrat</th>
                    <th>Numéro Étudiant</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($demandeFinancements as $demandeF)
                    <tr>
                        <td>{{ $demandeF->codeDemandeF }}</td>
                        <td>{{ $demandeF->dateDepotDemandeF }}</td>
                        <td>{{ $demandeF->etatDemandeF }}</td>
                        <td>{{ $demandeF->montantDemandeF }}</td>
                        <td>{{ $demandeF->codeContrat }}</td>
                        <td>{{ $demandeF->numEtudiant }}</td>
                        <td>
                            @if($demandeF->etatDemandeF == 'Pending')
                                <a href="{{ route('demandeFinancement.valider', ['codeDemandeF' => $demandeF->codeDemandeF]) }}" class="btn btn-success btn-sm">Valider</a>
                                <a href="{{ route('demandeFinancement.rejeter', ['codeDemandeF' => $demandeF->codeDemandeF]) }}" class="btn btn-danger btn-sm">Rejeter</a>
                            @elseif($demandeF->etatDemandeF == 'Approved')
                                <span class="text-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                            </svg>
                            Approuvé
                        </span>
                            @else
                                <span class="text-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
                                <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
                            </svg>
                            Refusé
                        </span>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
