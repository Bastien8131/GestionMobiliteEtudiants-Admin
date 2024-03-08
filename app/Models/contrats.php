<?php

namespace App\Models;

use App\Demandesfinancement;
use App\Demandesmobilite;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $codeContrat
 * @property int $dureeContrat
 * @property string $etatContrat
 * @property int $codeDemandeM
 * @property Demandesmobilite $demandesmobilite
 * @property Demandesfinancement[] $demandesfinancements
 */
class contrats extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'codeContrat';

    /**
     * @var array
     */
    protected $fillable = ['dureeContrat', 'etatContrat', 'codeDemandeM'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function demandesmobilite()
    {
        return $this->belongsTo('App\Demandesmobilite', 'codeDemandeM', 'codeDemandeM');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function demandesfinancements()
    {
        return $this->hasMany('App\Demandesfinancement', 'codeContrat', 'codeContrat');
    }
}
