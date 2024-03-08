@extends('layouts.main')
<title>Accueil</title>
@section('content')
    <main>
        <h1>Accueil</h1>
        <a href="{{ url('/diplome') }}">Gestion des diplômes</a><br>
        <a href="{{ url('/programme') }}">Gestion des programmes</a><br>
        <a href="{{ url('/cours') }}">Gestion des cours</a><br>
        <a href="{{ url('/gestionDemandeMobilite') }}">Gestion demande mobilité</a><br>
        <a href="{{ url('/contrat') }}">Gestion des contrats</a><br>
        <a href="{{ url('/gestionDemandeFinancement') }}">Gestion demande financement</a><br>
        <a href="{{ url('/utilisateur') }}">Gestion des comptes utilisateurs</a>
    </main>
@endsection
