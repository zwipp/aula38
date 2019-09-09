<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class ProdutosController extends Controller
{
    public function index(){

        //carregar os produtos da base de dados
        $produtos = Produto::paginate(4); //separar em 4 itens por pagina 

        //retornar na view os produtos
        return view("produtos.index",['produtos'=>$produtos]); //vai passar o caminho e o vertor com os produtos do banco de dados

    }

    public function show($id){ //vizualizar produto unico

        //carregar produto
        $produto = Produto::find($id);

        //retornar na view o produto
        return view("produtos.show", ['produto'=>$produto]);
    }

    public function edit($id){  //editar produto

        //carregar produto
        $produto = Produto::find($id);

        $categoria = Categoria::all();

        //retornar na view o produto
        return view("produtos.edit", compact('produto','categoria'));
    }

    public function update($id){

        //carregando o produto da BD
        $produto = Produto::find($id);

        //alterar os valores do produto
        $produto->nome = request('nome'); //quando passa uma string vai procurar qual o campo igual e vai sobreescrever com o valor dado
        $produto->preco = request('preco');
        $produto->quantidade = request('quantidade');
        $produto->id_categoria = request('categoria');

        //salvar as alterações no banco de dados
        $produto->save(); // salvar as alterações no BD

        //redirecionar para a lista de produtos
        return redirect('/produtos'); //ele irá redirecionar para a pagina de produtos
    }

    public function destroy($id){

        //carrega produto
        $produto = Produto::find($id);

        //deleta produto
        $produto->delete();

        //retorna para a pagina produto
        return redirect('/produtos');
    }
}