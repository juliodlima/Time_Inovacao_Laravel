<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pessoa;

class PessoaController extends Controller
{
    // index pessoa
    public function index()
    {
        //$registros = Pessoa::all();
        // paginação
        $registros = Pessoa::paginate(5);
        return view('admin.pessoas.index',compact('registros'));
    }
    // adicionar pessoa
    public function adicionar()
    {
        return view('admin.pessoas.adicionar');
    }
    // salvar pessoa
    public function salvar(Request $req)
    {
        $dados = $req->all();
        //dd($dados);

        pessoa::create($dados);

        return redirect()->route('admin.pessoas');
    }
    // editar pessoa
    public function editar($id)
    {
        $registro = Pessoa::find($id);
        return view('admin.pessoas.editar',compact('registro'));
    }
    // salvar pessoa
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        //dd($dados);

        Pessoa::find($id)->update($dados);

        return redirect()->route('admin.pessoas');
    }
    // deletar pessoa
    public function deletar($id) 
    {
        Pessoa::find($id)->delete();
        return redirect()->route('admin.pessoas');
    }
}
