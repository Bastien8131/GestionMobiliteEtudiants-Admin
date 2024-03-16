@extends('layouts.main')
@section('title', 'Accueil')
@section('content')
    <style>
        .nav-link{
            display: none;
        }
    </style>
    <main class="container">
        <h1 class="mt-5">Accueil</h1>
        <div class="list-group mt-3">
            <a href="{{ url('/diplome') }}" class="list-group-item list-group-item-action">Gestion des diplômes</a>
            <a href="{{ url('/programme') }}" class="list-group-item list-group-item-action">Gestion des programmes</a>
            <a href="{{ url('/cours') }}" class="list-group-item list-group-item-action">Gestion des cours</a>
            <a href="{{ url('/gestionDemandeMobilite') }}" class="list-group-item list-group-item-action">Gestion demande mobilité</a>
            <a href="{{ url('/contrat') }}" class="list-group-item list-group-item-action">Gestion des contrats</a>
            <a href="{{ url('/gestionDemandeFinancement') }}" class="list-group-item list-group-item-action">Gestion demande financement</a>
        </div>
    </main>
@endsection
