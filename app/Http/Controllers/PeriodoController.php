<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Periodo;
use App\Curso;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\PeriodosRequest;


class PeriodoController extends Controller{

  public function lista(){
    $periodos = Periodo::all();
    return view('periodos.lista', ['periodos' => $periodos]);
  }


  public function cadastro(){
    return view('periodos.cadastro');
  }


  public function adiciona(PeriodosRequest $request){
    Periodo::create($request->all());
    return redirect()->action('PeriodoController@lista')->with('status', 'Periodo Cadastrado com Sucesso!');
  }


//   public function mostra($id){
//     $resposta = Periodo::find($id);
//     if (empty($resposta)) {
//       return "Esse Periodo não existe";
//     }
//     return view('periodos.detalhes')->with('periodo', $resposta);
//   }

  public function edita($id){
    $periodo = Periodo::find($id);
    return view('periodos.atualiza', ['periodo' => $periodo]);

  }

  public function update(PeriodosRequest $request, $id){
    Periodo::find($id)->update($request->all());
   return redirect()->action('PeriodoController@lista');
  }

  public function destroy($id) {
    $periodo = Periodo::find($id);
    $periodo->delete();
    return redirect()->action('PeriodoController@lista')->with('status', 'Periodo Cadastrado com Sucesso!');
  }



}
