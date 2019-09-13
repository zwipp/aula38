<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->integer('quantidade');
            $table->decimal('preco',5,2); //decimal com 2 numeros antes da virgula e 5 depois
            $table->unsignedBigInteger('id_categoria');
            $table->timestamps(); //cria as colunas created_at e updated_at preencher o dia e a hora com o horario que foi criado

            //Estabelecendo a coluna id_categoria como uma chave estrangeira(FK)
            $table->foreign('id_categoria')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
