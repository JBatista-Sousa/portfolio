<?php

use Illuminate\Database\Seeder;

class PeriodoTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    {
      $periodos = [
        0 => [
          'nome' => 'Primeiro módulo',
        ],

        1 => [
          'nome' => 'Terceiro módulo'
        ]

      ];

      DB::table('periodos')->insert($periodos);
    }
  }
}
