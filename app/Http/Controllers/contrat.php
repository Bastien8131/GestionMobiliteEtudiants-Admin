<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class contrat
{
    public function afficherContrat($id)
    {
        $donneeContrat = DB::select('SELECT * FROM contrats WHERE codeContrat = ?', [$id])[0];
//        var_dump($donneeContrat);
        $donneeDemandeM = DB::select('SELECT * FROM demandesmobilite WHERE codeDemandeM = ?', [$donneeContrat->codeDemandeM])[0];
//        var_dump($donneeDemandeM);
        $donneeEtudiant = DB::select('SELECT * FROM etudiants WHERE numEtudiant = ?', [$donneeDemandeM->numEtudiant])[0];
//        var_dump($donneeEtudiant);
//        dd($contratData);
        return view('affichageContrat')
            ->with('donneeContrat', $donneeContrat)
            ->with('donneeDemandeM', $donneeDemandeM)
            ->with('donneeEtudiant', $donneeEtudiant)
            ;
    }

}
