<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Competencia;

class CompetenciaController extends Controller
{
    // index competencia
    public function index()
    {
        //$registros = Competencia::all();
        // paginação
        $registros = Competencia::paginate(7);
        return view('admin.competencias.index',compact('registros'));
    }
    // adicionar competencia
    public function adicionar()
    {
        return view('admin.competencias.adicionar');
    }
    // salvar competencia
    public function salvar(Request $req)
    {
        $dados = $req->all();
        //dd($dados);

        Competencia::create($dados);

        return redirect()->route('admin.competencias');
    }
    // editar competencia
    public function editar($id)
    {
        $registro = Competencia::find($id);
        return view('admin.competencias.editar',compact('registro'));
    }
    // salvar competencia
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        //dd($dados);

        Competencia::find($id)->update($dados);

        return redirect()->route('admin.competencias');
    }
    // deletar competencia
    public function deletar($id) 
    {
        Competencia::find($id)->delete();
        return redirect()->route('admin.competencias');
    }
}
