<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Professor;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ProfessoresRequest;


class ProfessorController extends Controller{

  public function lista(){
    $professores = Professor::all();
    return view('professores.lista', ['professores' => $professores]);
  }


  public function cadastro(){
    return view('professores.cadastro');
  }


  public function adiciona(ProfessoresRequest $request){
    Professor::create($request->all());
    return redirect()->action('ProfessorController@lista')->with('status', 'Professor Cadastrado com Sucesso!');
  }


  public function mostra($id){
    $resposta = Professor::find($id);
    if (empty($resposta)) {
      return "Esse Professor não existe";
    }
    return view('professores.detalhes')->with('professor', $resposta);
  }

  public function edita($id){
    $professor = Professor::find($id);
    return view('professores.atualiza', ['professor' => $professor]);

  }

  public function update(ProfesoresRequest $request, $id){
    Professor::find($id)->update($request->all());
   return redirect()->action('ProfessorController@lista');
  }

  public function destroy($id) {
    $professor = Professor::find($id);
    $professor->delete();
    return redirect()->action('ProfessorController@lista')->with('status', 'Professor Cadastrado com Sucesso!');
  }



}
