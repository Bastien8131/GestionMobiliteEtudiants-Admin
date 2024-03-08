<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cours extends Model
{
    protected $table = 'cours'; // Table du modèle
    protected $primaryKey = 'codeCours'; // Clé primaire
    protected $connexion = 'mysql'; //Connexion à utiliser
    public $timestamps = false;
    protected $fillable = [
        'codeCours',
        'LibelleCours',
        'nbECTS',
        'annee',
        'codeDiplome',
    ];

    // Relation avec la table diplomes
    public function diplomes()
    {
        return $this->belongsTo(diplomes::class, 'codeDiplome');
    }
}
