<?php

namespace App\Models;

use App\Cour;
use App\Etudiant;
use App\Programme;
use App\Universite;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $codeDiplome
 * @property string $nomDiplome
 * @property string $niveauDiplome
 * @property int $codeU
 * @property Universite $universite
 * @property Etudiant[] $etudiants
 * @property Cour[] $cours
 * @property Programme[] $programmes
// * @property Programme[] $programmes
 */
class diplomes extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'codeDiplome';

    /**
     * @var array
     */
    protected $fillable = ['nomDiplome', 'niveauDiplome', 'codeU'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function universite()
    {
        return $this->belongsTo('App\Universite', 'codeU', 'codeU');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function etudiants()
    {
        return $this->hasMany('App\Etudiant', 'codeDiplome', 'codeDiplome');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cours()
    {
        return $this->hasMany('App\Cour', 'codeDiplome', 'codeDiplome');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programmes()
    {
        return $this->hasMany('App\Programme', 'codeDiplome_1', 'codeDiplome');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
//    public function programmes()
//    {
//        return $this->hasMany('App\Programme', 'codeDiplome', 'codeDiplome');
//    }
}
