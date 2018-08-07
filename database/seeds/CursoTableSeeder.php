<?php

use Illuminate\Database\Seeder;

class CursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $cursos = [
          0 => [
            'nome' => 'Informatica',
            'descricao' => 'otimo curso',
            'coordenador' => 'Fernando',
            'cargaHoraria' => 220
          ],

          1 => [
            'nome' => 'Quimica',
            'descricao' => 'Superior',
            'coordenador' => 'Flavia',
            'cargaHoraria' => 130
          ]

       ];

       DB::table('cursos')->insert($cursos);
    }
}
