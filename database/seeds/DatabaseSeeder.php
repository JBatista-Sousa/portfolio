<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Curso;

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
          //Model::reguarde();
          //$this->call('CursosSeeder');

    }
}
