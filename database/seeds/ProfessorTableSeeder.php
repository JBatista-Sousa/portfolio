<?php

use Illuminate\Database\Seeder;

class ProfessorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $professores = [
                0 => [
                  'nome' => 'Fernando',
                  'formacao' => 'ASD'
                ],
      
                1 => [
                  'nome' => 'Emanuel Medeiros',
                  'formacao' => 'Administração'
                ]
      
             ];
      
             DB::table('professores')->insert($professores);
        }
    
      
    }
}
