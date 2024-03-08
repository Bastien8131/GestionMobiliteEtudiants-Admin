<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $migration
 * @property int $batch
 */
class migrations extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['migration', 'batch'];
}
