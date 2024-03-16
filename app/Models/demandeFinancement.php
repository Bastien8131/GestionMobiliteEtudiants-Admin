<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class demandeFinancement
{
    protected $table = 'demandesfinancement';
    protected $primaryKey = 'codeDemandeF';
    public $timestamps = false;

    protected $fillable = [
        'codeDemandeF',
        'dateDepotDemandeF',
        'etatDemandeF',
        'montantDemandeF',
        'codecontrat',
        'numEtudiant'
    ];

    public function contrat()
    {
        return $this->belongsTo(Contrat::class, 'codeContrat', 'codeContrat');
    }

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'numEtudiant', 'numEtudiant');
    }

}
