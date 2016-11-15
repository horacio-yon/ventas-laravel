<?php

namespace sisVenta;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function setPasswordAttribute($value)
    {

        if (!empty($value)) 
        {
            
            $this->attributes['password'] = bcrypt($value);
        }
    }

    protected $table= 'users';
    protected $primaryKey ='id';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
