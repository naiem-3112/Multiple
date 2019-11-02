<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=[
      'name', 'leader_id'
    ];
    public function students(){
        return $this->hasMany('App\Student');
    }
}
