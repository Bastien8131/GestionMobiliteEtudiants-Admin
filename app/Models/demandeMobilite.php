<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class demandeMobilite extends Model
{
    protected $table = 'demandesmobilite';
    protected $primaryKey = 'codeDemandeM';
    public $timestamps = false; // Si vous n'avez pas de colonnes created_at et updated_at

    protected $fillable = [
        'dateDepotDemandeM',
        'etatDemandeM',
        'numEtudiant',
        'codeProgramme'
    ];

    // Vous pouvez définir des relations ici si nécessaire
}
