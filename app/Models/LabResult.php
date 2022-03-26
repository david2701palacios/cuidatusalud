<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LabResult
 *
 * @property $id
 * @property $TITLE
 * @property $DESCRIPTION_RESULTS
 * @property $IMAGE
 * @property $ID_PERSON_FK
 * @property $created_at
 * @property $updated_at
 *
 * @property Person $person
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LabResult extends Model
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
    protected $fillable = ['TITLE','DESCRIPTION_RESULTS','IMAGE','ID_PERSON_FK'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function person()
    {
        return $this->hasOne('App\Models\Person', 'id', 'ID_PERSON_FK');
    }
    

}
