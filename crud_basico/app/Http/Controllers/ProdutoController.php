<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create(){
    return view('produto.create');
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto' => $produto]);
    }
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }
    public function update(Request $request,$id)
    {
        $produto = Produto::findOrFail($id);
        $produto -> update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade
        ]);
        return "Produto Atualizado com Sucesso!";
    }

    public function delete($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.delete', ['produto' => $produto]);         
    }   

    public function destroy($id){
        $produto = Produto::findOrFail($id);
        
        $produto -> delete();
        return "Produto Excluido com Sucesso!";
    }

}
