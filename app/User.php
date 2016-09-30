<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use \Carbon\Carbon;

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


    /**
     * Determines if the user is the administrator of the website.
     * The administrator is the first user of the database.
     * @return boolean [description]
     */
    public function isAdmin(){
        return $this->id === 1? true: false;
    }
}
