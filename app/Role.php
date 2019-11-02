<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable= [
      'name', 'permission'
    ];
    /*protected $casts=[
        'permission' => 'array',
    ];*/
    public function students(){
        return $this->belongsToMany(Student::class);
    }

    public function getRoleNameAttribute($value){
        return ucwords($this->name);
    }
    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }


}
