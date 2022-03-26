<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MedicalControl
 *
 * @property $id
 * @property $NAME_DOCTOR
 * @property $ROL_DOCTOR
 * @property $DATE_CONTROL
 * @property $OBSERVATIONS
 * @property $ID_PERSON_FK
 * @property $created_at
 * @property $updated_at
 *
 * @property Person $person
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MedicalControl extends Model
{
    
    static $rules = [
		'ID_PERSON_FK' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NAME_DOCTOR','ROL_DOCTOR','DATE_CONTROL','OBSERVATIONS','ID_PERSON_FK'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function person()
    {
        return $this->hasOne('App\Models\Person', 'id', 'ID_PERSON_FK');
    }
    

}
