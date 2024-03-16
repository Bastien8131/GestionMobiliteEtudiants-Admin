@extends('layouts.main')
@section('content')
    <style>
        header, footer{
            display: none;
        }
    </style>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Détails du contrat</h1>
        <div class="card">
            <div class="card-header bg-primary text-white">
                Contrat
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Code du contrat:</strong> {{ $donneeContrat->codeContrat }}</p>
                <p class="card-text"><strong>Durée du contrat:</strong> {{ $donneeContrat->dureeContrat }} mois</p>
                <p class="card-text"><strong>État du contrat:</strong> {{ $donneeContrat->etatContrat }}</p>
                <p class="card-text"><strong>Code de la demande de mobilité:</strong> {{ $donneeContrat->codeDemandeM }}</p>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header bg-primary text-white">
                Demande de mobilité
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Code de la demande de mobilité:</strong> {{ $donneeDemandeM->codeDemandeM }}</p>
                <p class="card-text"><strong>Date de dépôt de la demande:</strong> {{ $donneeDemandeM->dateDepotDemandeM }}</p>
                <p class="card-text"><strong>État de la demande:</strong> {{ $donneeDemandeM->etatDemandeM }}</p>
                <p class="card-text"><strong>Numéro étudiant:</strong> {{ $donneeDemandeM->numEtudiant }}</p>
                <p class="card-text"><strong>Code du programme:</strong> {{ $donneeDemandeM->codeProgramme }}</p>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header bg-primary text-white">
                Informations étudiant
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Numéro étudiant:</strong> {{ $donneeEtudiant->numEtudiant }}</p>
                <p class="card-text"><strong>Nom:</strong> {{ $donneeEtudiant->nomEtudiant }}</p>
                <p class="card-text"><strong>Prénom:</strong> {{ $donneeEtudiant->prenomEtudiant }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $donneeEtudiant->mailEtudiant }}</p>
                <p class="card-text"><strong>Année:</strong> {{ $donneeEtudiant->annee }}</p>
                <p class="card-text"><strong>Code du diplôme:</strong> {{ $donneeEtudiant->codeDiplome }}</p>
            </div>
        </div>
    </div>
@endsection
