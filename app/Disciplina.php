<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model{
  protected $fillable = ['nome', 'descricao', 'cargaHoraria'];

  public function professor(){
    return $this->belongsTo('App\Professor');
    //belongsTo = pertence a //uma disciplina pertence a um professor
  }

  public function periodo(){
    return $this->belongsTo('App\Periodo');
    //belongsTo = pertence a //uma disciplina pertence a um período
  }
}
