<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;
use App\Periodo;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\CursosRequest;


class CursoController extends Controller{

  public function lista(){
    $cursos = Curso::all();
    return view('cursos.lista', ['cursos' => $cursos]);
    //retorna todos os cursos
  }


  public function cadastro(){
    return view('cursos.cadastro');
  }


  public function adiciona(CursosRequest $request){
    Curso::create($request->all());
    return redirect()->action('CursoController@lista')->with('status', 'Curso Cadastrado com Sucesso!');
  }


  public function mostra($id){
   // $resposta = DB::select('select * from cursos where id = ?',[$id]);
    $curso = Curso::find($id);
    ////////////////////
    $periodos = Curso::find($id)->periodos();
    /////////////////////
  
    return view('cursos.detalhes', ['curso' => $curso, 'periodos' => $periodos]);
   
  }

  public function edita($id){
    //recupera o curso pelo id
    $curso = Curso::find($id);
    return view('cursos.atualiza', ['curso' => $curso]);

  }

  public function update(CursosRequest $request, $id){
    //return "atualizando {$id}";
   
    //recupera o curso pelo id e atualiza as informaçoes que chegaram no request
    Curso::find($id)->update($request->all());
   
   
   return redirect()->action('CursoController@lista');
  }

  
  public function destroy($id) {   
    $curso = Curso::find($id);
    $curso->delete();
    //Request::session()->flash('status', 'O Curso '.$curso->nome.' foi removido com sucesso!');
    return redirect()->action('CursoController@lista')->with('status', 'Curso Cadastrado com Sucesso!');
    //return redirect()->action('CursoController@lista');
  }



}







