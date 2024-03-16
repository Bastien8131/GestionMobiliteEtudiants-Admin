<?php

namespace App\Http\Controllers;

use App\Models\demandeFinancement;

class gestionFinancement
{
    // DemandeFinancementController.php

    public function valider($codeDemandeF)
    {
        // Logique pour valider la demande de financement
        $demandeF = demandeFinancement::find($codeDemandeF);
        $demandeF->etatDemandeF = 'Approved';
        $demandeF->save();

        return redirect()->back()->with('success', 'La demande de financement a été approuvée.');
    }

    public function rejeter($codeDemandeF)
    {
        // Logique pour rejeter la demande de financement
        $demandeF = demandeFinancement::find($codeDemandeF);
        $demandeF->etatDemandeF = 'Rejected';
        $demandeF->save();

        return redirect()->back()->with('error', 'La demande de financement a été rejetée.');
    }
}
