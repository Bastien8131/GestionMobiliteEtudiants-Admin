<?php

namespace App\Models;

use App\Cour;
use App\Demandesmobilite;
use App\Diplome;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $codeCours
 * @property string $LibelleCours
 * @property string $nbECTS
 * @property int $annee
 * @property int $codeDiplome
 * @property Diplome $diplome
 * @property Cour[] $cours
 * @property Demandesmobilite[] $demandesmobilites
 */
class cours extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'codeCours';

    /**
     * @var array
     */
    protected $fillable = ['LibelleCours', 'nbECTS', 'annee', 'codeDiplome'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function diplome()
    {
        return $this->belongsTo('App\Diplome', 'codeDiplome', 'codeDiplome');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cours()
    {
        return $this->belongsToMany('App\Cour', 'compatible', 'codeCours', 'codeCours_1');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function demandesmobilites()
    {
        return $this->belongsToMany('App\Demandesmobilite', 'concerner', 'codeCours', 'codeDemandeM');
    }
}
