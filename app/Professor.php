<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model{
    protected $fillable = ['nome', 'formacao', 'titulacao'];

    public function curso(){
        return $this->belongsToMany('App\Curso');
        //belongsToMany -> pertence a muitos cursos
    }

    public function disciplina(){
        return $this->hasMany('App\Disciplina');
        //hasMany -> tem muitos // um professor tem muitas disciplinas
    }

}
