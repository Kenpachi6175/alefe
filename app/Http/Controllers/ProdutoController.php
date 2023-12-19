<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{

    public readonly Produto $produto;
    public function __construct(){
        $this->produto = new Produto();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $produtos = $this->produto->all();
      return view('listar_produto', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('criar_produto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->produto->create([
            'produto' => $request->input('produto'),
            'valor' => $request->input('valor'),
            'imagem' => $request->input('imagem')
        ]);

        if($created){
            return redirect()->back()->with('message', 'Cadastrado com sucesso');
        }
        return redirect()->back()->with('message', 'Erro de Cadastro');

    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view('deletar_produto', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('editar_produto', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->produto->where('id', $id)->update($request->except(['_token','_method'])); 
        
        if($updated){
            return redirect()->back()->with('message', 'Atualizacão com sucesso');
        }
        return redirect()->back()->with('message', 'Erro de atualização');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->produto->where('id', $id)->delete();
        return redirect()->route('produto.index');
    }
}
