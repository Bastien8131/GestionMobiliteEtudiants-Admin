<?php

namespace App\Http\Controllers;
//use App\Models\;

use App\Models\demandeMobilite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\diplomes;
use App\Models\universites;
use App\Models\programmes;
use App\Models\cours;

class gestionMobilite extends Controller
{

    public function changerEtat($action, $codeDemande)
    {
        // Récupérer la demande de mobilité correspondante
        $demande = demandeMobilite::findOrFail($codeDemande);

        // Vérifier l'action demandée
        if ($action === 'valider') {
            $demande->etatDemandeM = 'valider';
            $demande->save();
            return redirect()->back()->with('success', 'Demande validée avec succès.');
        } elseif ($action === 'refuser') {
            $demande->etatDemandeM = 'refuser';
            $demande->save();
            return redirect()->back()->with('success', 'Demande refusée avec succès.');
        } else {
            return redirect()->back()->with('error', 'Action non valide.');
        }
    }
}
