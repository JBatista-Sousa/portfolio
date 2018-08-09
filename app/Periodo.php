<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model{
    protected $fillable = ['nome'];

    public function curso(){
        return $this->belongsTo('App\Curso');
        //belongsTo = pertence a um curso
    }

    public function disciplina(){
        return $this->hasMany('App\Disciplina');
        //hasMany -> tem muitos // um periodo tem muitas disciplinas
    }
}
