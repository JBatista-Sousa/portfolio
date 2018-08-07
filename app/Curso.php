<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {
    protected $fillable = ['nome', 'descricao', 'modulo', 'coordenador', 'cargaHoraria'];

    public function professor(){
        return $this->belongsToMany('App\Professor');
        //belongsToMany -> pertence a muitos
    }

    public function periodo(){
        return $this->hasMany('App\Periodo');
        //hasMany -> tem muitos periodos
    }
}
//Henrique Alves Xavier
