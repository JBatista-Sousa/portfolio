<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Curso;
use App\Professor;
use App\Periodo;
use App\Disciplina;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run() {

    $curso1 = App\Curso::create([
      'nome' => 'Informatica',
      'descricao' => 'otimo curso',
      'coordenador' => 'Fernando',
      'cargaHoraria' => 1140
    ]);
    $curso2 = App\Curso::create([
      'nome' => 'Administração',
      'descricao' => 'bla bla bla',
      'coordenador' => 'Libni',
      'cargaHoraria' => 1010
    ]);

    $professor1 = App\Professor::create([
      'nome' => 'Francisco',
      'formacao' => 'Adminisracao',
      'titulacao' => 'Doutorado'
    ]);
    $professor2 = App\Professor::create([
      'nome' => 'Werney',
      'formacao' => 'Ciencia da Computacao',
      'titulacao' => 'Mestrado'
    ]);

    $periodo1 = App\Periodo::create([
      'nome' => 'Primeiro Modulo'
    ]);
    $periodo2 = App\Periodo::create([
      'nome' => 'Quarto Modulo'
    ]);

    $disciplina1 = App\Disciplina::create([
      'nome' => 'Matematica',
      'descricao' => 'Financeira',
      'cargaHoraria' => '230'
    ]);

    $disciplina2 = App\Disciplina::create([
      'nome' => 'Portugues',
      'descricao' => 'Verbos',
      'cargaHoraria' => '230'
    ]);

    $cursos = App\Curso::all();
    $periodos = App\Periodo::all();
    $disciplinas = App\Disciplina::all();
    $professores = App\Professor::all();

    $cursos[0]->periodos()->associate($periodos[0]->id);
    $cursos[0]->periodos()->associate($periodos[1]->id);

    $periodos[0]->disciplinas()->associate($disciplinas[0]->id);
    $periodos[0]->disciplinas()->associate($disciplinas[1]->id);

    $professores[0]->disciplinas()->associate($disciplinas[0]->id);
    $professores[0]->disciplinas()->associate($disciplinas[1]->id);

    $cursos[0]->professores()->attach($professores[0]->id);
    $cursos[0]->professores()->attach($professores[1]->id);


  }
}
