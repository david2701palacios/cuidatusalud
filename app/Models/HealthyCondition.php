<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HealthyCondition
 *
 * @property $id
 * @property $NAME_HEALTHY_CONDITION
 * @property $created_at
 * @property $updated_at
 *
 * @property ConditionsDetail[] $conditionsDetails
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HealthyCondition extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NAME_HEALTHY_CONDITION'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conditionsDetails()
    {
        return $this->hasMany('App\Models\ConditionsDetail', 'ID_HEALTHY_CONDITIONS_FK', 'id');
    }
    

}
