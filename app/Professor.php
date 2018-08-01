<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model{
    protected $fillable = ['nome', 'formacao'];

    public function roles(){
        return $this->belongsToMany('App\Curso');
    }

}
