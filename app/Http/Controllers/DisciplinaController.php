<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Disciplina;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\DisciplinasRequest;


class DisciplinaController extends Controller{

  public function lista(){
    $disciplinas = Disciplina::all();
    return view('disciplinas.lista', ['disciplinas' => $disciplinas]);
  }


  public function cadastro(){
    return view('disciplinas.cadastro');
  }


  public function adiciona(DisciplinasRequest $request){
    Disciplina::create($request->all());
    return redirect()->action('DisciplinaController@lista')->with('status', 'Disciplina Cadastrado com Sucesso!');
  }


  public function mostra($id){
    $resposta = Disciplina::find($id);
    if (empty($resposta)) {
      return "Essa Disciplina não existe";
    }
    return view('disciplinas.detalhes')->with('disciplina', $resposta);
  }

  public function edita($id){
    $disciplina = Disciplina::find($id);
    return view('disciplinas.atualiza', ['disciplina' => $disciplina]);

  }

  public function update(DisciplinasRequest $request, $id){
    Disciplina::find($id)->update($request->all());
   return redirect()->action('DisciplinaController@lista');
  }

  public function destroy($id) {
    $disciplina = Disciplina::find($id);
    $disciplina->delete();
    return redirect()->action('DisciplinaController@lista')->with('status', 'Disciplina Cadastrado com Sucesso!');
  }



}
