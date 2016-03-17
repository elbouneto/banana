<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = "user";



public function getlastuser(){

    $lastuser=DB::table('user')
        ->select('avatar','created_at','username','ville')
        ->where('enabled',1)
        ->orderBy('avatar')
        ->limit(12)
        ->get();

    return $lastuser;
}



}
