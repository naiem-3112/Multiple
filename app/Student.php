<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use Notifiable;
    protected $guard = 'student';

    protected $fillable = [
      'name', 'email', 'from', 'to', 'password',
    ];

    public function roles(){
        return $this->belongsToMany('App\Role');
    }
}
