<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Person
 *
 * @property $id
 * @property $NAME_PERSON
 * @property $LAST_NAME_PERSON
 * @property $GENDER
 * @property $AGE
 * @property $ID_USER_FK
 * @property $created_at
 * @property $updated_at
 *
 * @property ConditionsDetail[] $conditionsDetails
 * @property IndicatorsDetail[] $indicatorsDetails
 * @property LabResult[] $labResults
 * @property MedicalControl[] $medicalControls
 * @property PersonsDetail[] $personsDetails
 * @property PersonsDetail[] $personsDetails
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Person extends Model
{
    
    static $rules = [
		'ID_USER_FK' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NAME_PERSON','LAST_NAME_PERSON','GENDER','AGE','ID_USER_FK'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conditionsDetails()
    {
        return $this->hasMany('App\Models\ConditionsDetail', 'ID_PERSON_FK', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function indicatorsDetails()
    {
        return $this->hasMany('App\Models\IndicatorsDetail', 'ID_PERSON_FK', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labResults()
    {
        return $this->hasMany('App\Models\LabResult', 'ID_PERSON_FK', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicalControls()
    {
        return $this->hasMany('App\Models\MedicalControl', 'ID_PERSON_FK', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personsDetails()
    {
        return $this->hasMany('App\Models\PersonsDetail', 'ID_PERSON_IN_CHARGUE_FK', 'id');
        return $this->hasMany('App\Models\PersonsDetail', 'ID_PRINCIPAL_PERSON_FK', 'id');
    }
    
 
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'ID_USER_FK');
    }
    

}
