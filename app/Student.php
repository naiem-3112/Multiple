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
    public function isStudent($roles){

        $users=$this->roles()->whereIn('name', $roles )->get();
        if($users) {
            foreach ($users as $user) {
                $list[] = $user->name;
            }
            return $list;
        }
        return false;
    }
    public function isUser($role){
        if($this->roles()->where('role_id', $role )->first()){
            return true;
        }
        return false;
    }
}
