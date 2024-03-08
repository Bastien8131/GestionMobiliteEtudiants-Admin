<?php

namespace App\Models;

use App\Diplome;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $codeU
 * @property string $nomU
 * @property string $villeU
 * @property string $paysU
 * @property string $webU
 * @property Diplome[] $diplomes
 */
class universites extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'codeU';

    /**
     * @var array
     */
    protected $fillable = ['nomU', 'villeU', 'paysU', 'webU'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function diplomes()
    {
        return $this->hasMany('App\Diplome', 'codeU', 'codeU');
    }
}
