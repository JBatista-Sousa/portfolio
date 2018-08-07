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
    public function run()
    {
          //Model::unguarde();
        $this->call('CursoTableSeeder');
        $this->call('ProfessorTableSeeder');
        $this->call('PeriodoTableSeeder');
        $this->call('DisciplinaTableSeeder');
          //Model::reguarde();
          //$this->call('CursosSeeder');
          

    }
}
