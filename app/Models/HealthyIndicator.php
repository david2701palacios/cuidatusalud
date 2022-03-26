<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HealthyIndicator
 *
 * @property $id
 * @property $NAME_HEALTHY_INDICATORS
 * @property $created_at
 * @property $updated_at
 *
 * @property IndicatorsDetail[] $indicatorsDetails
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HealthyIndicator extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NAME_HEALTHY_INDICATORS'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function indicatorsDetails()
    {
        return $this->hasMany('App\Models\IndicatorsDetail', 'ID_HEALTHY_INDICATORS_FK', 'id');
    }
    

}
