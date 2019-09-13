<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('produtos')->insert([
            'nome'=>'Lul',
            'id_categoria'=>3,
            'preco'=> 21.50,
            'quantidade'=> 5
        ]);
    }
}
