<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Student extends Authenticatable
{
    use Notifiable;
    //protected $guard = 'student';

    protected $fillable = [
        'name', 'email', 'from', 'to', 'password',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first())
            return true;
        else
            return false;
    }

    /*public function isAdmin($role)
    {
        if ($this->roles()->where('role_id', $role)->first()) ;
        {
            return true;
        }
        return false;
    }*/
}
