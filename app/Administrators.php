<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrators extends Authenticatable
{


    protected $table = "administrators";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname', 'email', 'password', 'firstname', 'description', 'photo',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



}
