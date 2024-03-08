<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class programmes extends Model
{
    protected $table = 'programmes'; // Table du modèle
    protected $primaryKey = 'codeProgramme'; // Clé primaire
    protected $connexion = 'mysql'; //Connexion à utiliser
    public $timestamps = false;
    protected $fillable = [
        'codeProgramme',
        'nomProgramme',
        'dureeEchange',
        'codeDiplome',
        'codeDiplome_1',
    ];

    // Relation avec la table diplomes
    public function diplomes()
    {
        return $this->belongsTo(diplomes::class, 'codeDiplome');
    }
}
