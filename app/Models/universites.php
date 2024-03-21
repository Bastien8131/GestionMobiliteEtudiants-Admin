<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class universites extends Model
{
    protected $table = 'universites'; // Table du modèle
    protected $primaryKey = 'codeU'; // Clé primaire
    protected $connexion = 'mysql'; //Connexion à utiliser
    public $timestamps = false;
    protected $fillable = [
        'codeU',
        'nomU',
        'villeU',
        'paysU',
        'webU',
    ];

    // Relation avec la table diplomes
    public function diplomes()
    {
        return $this->hasMany(diplomes::class, 'codeU');
    }
}
