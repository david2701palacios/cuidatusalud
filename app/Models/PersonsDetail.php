<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonsDetail
 *
 * @property $id
 * @property $ID_PRINCIPAL_PERSON_FK
 * @property $ID_PERSON_IN_CHARGUE_FK
 * @property $created_at
 * @property $updated_at
 *
 * @property Person $person
 * @property Person $person
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PersonsDetail extends Model
{
    
    static $rules = [
		'ID_PRINCIPAL_PERSON_FK' => 'required',
		'ID_PERSON_IN_CHARGUE_FK' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_PRINCIPAL_PERSON_FK','ID_PERSON_IN_CHARGUE_FK'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function person()
    {
        return $this->hasOne('App\Models\Person', 'id', 'ID_PERSON_IN_CHARGUE_FK');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function person()
    {
        return $this->hasOne('App\Models\Person', 'id', 'ID_PRINCIPAL_PERSON_FK');
    }
    

}
