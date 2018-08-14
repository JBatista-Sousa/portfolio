<?php

use Illuminate\Database\Seeder;

class CursoTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */

  public function run() {

    $curso1 = new App\Curso([
      'nome' => 'Informatica',
      'descricao' => 'otimo curso',
      'coordenador' => 'Fernando',
      'cargaHoraria' => 220
    ]);

    $curso1->periodos()->create(['nome' => 'Primeiro Módulo']);

  }
}
