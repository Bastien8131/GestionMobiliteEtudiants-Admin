<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class diplomes extends Model
{
    protected $table = 'diplomes'; // Table du modèle
    protected $primaryKey = 'codeDiplome'; // Clé primaire
    protected $connexion = 'mysql'; //Connexion à utiliser
    public $timestamps = false;
    protected $fillable = [
        'codeDiplome',
        'nomDiplome',
        'niveauDiplome',
        'codeU',
    ];

    // Relation avec la table universites
    public function universites()
    {
        return $this->belongsTo(universites::class, 'codeU');
    }

    // Relation avec la table cours
    public function cours()
    {
        return $this->hasMany(cours::class, 'codeDiplome');
    }
}
