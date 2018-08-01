<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model{
    protected $fillable = ['nome','cargaHoraria'];

    public function curso(){
        //return $this->hasMany('App\Curso');
    }
}
