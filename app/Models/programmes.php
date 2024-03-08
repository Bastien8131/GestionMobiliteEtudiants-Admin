<?php

namespace App\Models;

use App\Demandesmobilite;
use App\Diplome;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $codeProgramme
 * @property string $nomProgramme
 * @property int $dureeEchange
 * @property int $codeDiplome
 * @property int $codeDiplome_1
 * @property Diplome $diplome
// * @property Diplome $diplome
 * @property Demandesmobilite[] $demandesmobilites
 */
class programmes extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'codeProgramme';

    /**
     * @var array
     */
    protected $fillable = ['nomProgramme', 'dureeEchange', 'codeDiplome', 'codeDiplome_1'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function diplome()
    {
        return $this->belongsTo('App\Diplome', 'codeDiplome_1', 'codeDiplome');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
//    public function diplome()
//    {
//        return $this->belongsTo('App\Diplome', 'codeDiplome', 'codeDiplome');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function demandesmobilites()
    {
        return $this->hasMany('App\Demandesmobilite', 'codeProgramme', 'codeProgramme');
    }
}
