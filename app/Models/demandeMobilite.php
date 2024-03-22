<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class demandeMobilite extends Model
{
    protected $table = 'demandesmobilite';
    protected $primaryKey = 'codeDemandeM';
    public $timestamps = false;

    protected $fillable = [
        'dateDepotDemandeM',
        'etatDemandeM',
        'numEtudiant',
        'codeProgramme'
    ];
}
