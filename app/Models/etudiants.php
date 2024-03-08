<?php

namespace App\Models;

use App\Demandesfinancement;
use App\Demandesmobilite;
use App\Diplome;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $numEtudiant
 * @property string $nomEtudiant
 * @property string $prenomEtudiant
 * @property string $mailEtudiant
 * @property int $annee
 * @property int $codeDiplome
 * @property Diplome $diplome
 * @property Demandesmobilite[] $demandesmobilites
 * @property Demandesfinancement[] $demandesfinancements
 */
class etudiants extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'numEtudiant';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['nomEtudiant', 'prenomEtudiant', 'mailEtudiant', 'annee', 'codeDiplome'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function diplome()
    {
        return $this->belongsTo('App\Diplome', 'codeDiplome', 'codeDiplome');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function demandesmobilites()
    {
        return $this->hasMany('App\Demandesmobilite', 'numEtudiant', 'numEtudiant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function demandesfinancements()
    {
        return $this->hasMany('App\Demandesfinancement', 'numEtudiant', 'numEtudiant');
    }
}
