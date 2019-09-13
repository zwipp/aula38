<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categorias')->insert([
            'nome'=>'Romanticas'
        ]);

        DB::table('categorias')->insert([
            'nome'=>'Nerds'
        ]);

        DB::table('categorias')->insert([
            'nome'=>'Meme'
        ]);

        DB::table('categorias')->insert([
            'nome'=>'Frutas'
        ]);
    }
}
