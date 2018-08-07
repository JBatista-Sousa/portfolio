<?php

use Illuminate\Database\Seeder;

class DisciplinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $disciplinas = [
                0 => [
                    'nome' => 'Informatica',
                    'descricao' => 'Basica',
                    'cargaHoraria' => 220
                  ],
        
                  1 => [
                    'nome' => 'Quimica',
                    'descricao' => 'Organica',
                    'cargaHoraria' => 130
                  ]
        
               ];
      
             DB::table('disciplinas')->insert($disciplinas);
        }
    
      
    }
}
