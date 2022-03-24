<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property $id
 * @property $EMAIL_USER
 * @property $email_verified_at
 * @property $PASSWORD_USER
 * @property $ID_ROL_FK
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Model
{
    
    static $rules = [
		'EMAIL_USER' => 'required',
		'PASSWORD_USER' => 'required',
		'ID_ROL_FK' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['EMAIL_USER','PASSWORD_USER','ID_ROL_FK'];



}
